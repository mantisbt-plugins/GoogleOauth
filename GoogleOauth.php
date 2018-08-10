<?php
class GoogleOauthPlugin extends MantisPlugin {

    var $cmv_pages;
    var $current_page;

    function register() {
        $this->name        = 'Google Authentication Module';
        $this->description = 'Add Google authentication to MantisBT.';
        $this->page        = 'config';

        $this->version  = '2.0.1';
        $this->requires = array(
            'MantisCore' => '2.0.0',
        );

        $this->author  = 'Alleen Wang';
        $this->contact = 'wchwch@gmail.com';
        $this->url     = 'http://alleen.tw';
    }

    function init() {
        $this->cmv_pages    = array(
            'login_page.php'
        );
        $this->current_page = basename( $_SERVER['PHP_SELF'] );
        plugin_require_api( 'core/user_api.php' );
    }

    function hooks() {
        return array(
            'EVENT_LAYOUT_RESOURCES' => 'resources',
            'EVENT_MANAGE_USER_CREATE_FORM' => 'oauthEmailInputForCreate',
            'EVENT_MANAGE_USER_UPDATE_FORM' => 'oauthEmailInputForEdit',
            'EVENT_MANAGE_USER_UPDATE' => 'saveGmailAddress',
            'EVENT_MANAGE_USER_CREATE' => 'saveGmailAddress'
        );
    }


    function config() {
        return array(
            'clientId'     => '',
            'clientSecret' => '',
            'redirect_uri' => '',
        );
    }

    function resources() {
        if ( ! in_array( $this->current_page, $this->cmv_pages ) ) {
            return '';
        }

        $redirectUri = plugin_config_get( 'redirect_uri' );
        $clientId = plugin_config_get( 'clientId' );

        $res = '<meta name="redirectUri" content="' . $redirectUri . '" />';
        $res .= '<meta name="clientId" content="' . $clientId . '" />';
        $res .= '<script type="text/javascript" ' . 
                ' src="' . plugin_file( 'plugin.js' ) . '"></script> ';

        return $res;        
    }

    /**
     *
     *
     */
    function oauthEmailInputForCreate( $p_event, $p_user_id = null ) {
        $this->oauthEmailInput($p_user_id,'create');
    }

    /**
     *
     *
     */
    function oauthEmailInputForEdit( $p_event, $p_user_id = null ) {
        $this->oauthEmailInput($p_user_id,'edit');
    }

    /**
     *
     *
     */
    function oauthEmailInput( $p_user_id = null, $operation = null ) {
        
        switch( $operation ) {
            case 'edit':
                $str_open = $str_close = '';
                $table = plugin_table( 'user' );
                $t_query = " SELECT * FROM {$table} WHERE user_id=" . db_param();
                $t_sql_param = array( $p_user_id );
                $t_result = db_query( $t_query, $t_sql_param);
                $t_row = db_fetch_array( $t_result );
                $attr['gmail_address'] = $t_row['gmail_address'];
            break;

            case 'create':
            default:
                $attr = null;
                $str_open = '<p><table class="table table-bordered table-condensed table-striped">' . '<fieldset>';
                $str_close = '</fieldset></table>';
            break;
        }
        
        echo $str_open;
        $this->draw_oauth_email_input_row( $attr );
        echo $str_close;
    }

    /**
     *
     */
    function draw_oauth_email_input_row($attr=null) {

        $attribute = $attr;
        $attribute['size'] = 32;
        $attribute['maxlength'] = 64;
        
        $this->draw_generic_input_row('gmail_address',$attribute,'');
    }

    /**
     *
     *
     */
    function draw_generic_input_row($item_idcard,$attr=null, $suffix='_code') {
        $lbl = plugin_lang_get($item_idcard);

        $access_key = "{$item_idcard}{$suffix}";
        $input_name = "plugin_{$access_key}";
        $value = !is_null($attr[$item_idcard]) ? $attr[$item_idcard] : '';
        echo '<tr ', helper_alternate_class(), '><td class="category">', $lbl,'</td>';
        echo '<td>';
        echo '<input type="text" id="' . $input_name . '"' . 
             ' name="' . $input_name . '"' . ' value="' . $value . '"'; 
        
        echo ' class="input-sm" ';
        
        if( isset($attr['size']) ) {
            echo ' size="' . intval($attr['size']) . '" ';
        }

        if( isset($attr['maxlength']) ) {
            echo ' maxlength="' . intval($attr['maxlength']) . '" ';
        }

        echo '>';
        echo '</td></tr>';
    }


    /**
     *
     */
    function saveGmailAddress( $p_event, $p_user_id ) {
        
        // Get User data
        $gmail_address = '';
        if( isset($_REQUEST['plugin_gmail_address']) ) {
            $gmail_address = trim($_REQUEST['plugin_gmail_address']);
        }

        // Insert or Update ?
        $table = plugin_table('user');

        db_param_push();
        $t_query = "SELECT user_id FROM {$table} WHERE user_id=" . db_param();
        $t_result = db_query( $t_query, array( $p_user_id ) );

        $t_sql_param = array($gmail_address,$p_user_id);
        if( db_result( $t_result ) > 0 ) {
            $t_query = " UPDATE {$table} SET gmail_address = " . db_param();
            $t_query .= " WHERE user_id=" . db_param();
        } else {
            $t_query = " INSERT INTO {$table} (gmail_address,user_id) ";
            $t_query .= " VALUES(" . db_param() . ',' . db_param() . ") ";
        }
        db_query( $t_query, $t_sql_param );
    }


    /**
     *
     */
    function schema() {
        $t_ddl = " user_id I NOTNULL UNSIGNED PRIMARY," .
                 " gmail_address C(200) NOTNULL DEFAULT \" '' \" ";

        $t_schema[] = array( 'CreateTableSQL',
                         array( plugin_table( 'user' ), $t_ddl)
                       );

        $t_schema[] = array( 'CreateIndexSQL', array( 'idx_gmail_address', plugin_table( 'user' ), 'gmail_address', array( 'UNIQUE' ) ) );

        return $t_schema;
    }

}

<?php
/**
 * plugin: GoogleAouth
 * file  : error.php
 */

$dn = dirname( dirname( dirname( dirname( __FILE__ ) ) ) );
require_once $dn . DIRECTORY_SEPARATOR . 'core.php';

// we arrive here using the plugin.php page mechanism
// that's why we have 'page' in GET, is not our choice
$xget = explode('?',$_GET['page']);
$plugin_name = explode('/',$xget[0]);
$plugin_name = $plugin_name[0];
$key = 'plugin_' . $plugin_name . '_' . $xget[1];
$msg = lang_get( $key );
$action = lang_get( $key . '_action' );

// want URL to MantisBT install directory
$dummy = explode('plugins',config_get('path'));
$action = str_replace('$$basehref$$/', $dummy[0], $action);

# ----
layout_page_header_begin( 'GoogleOauth' );

layout_page_header_end();

layout_admin_page_begin();
?>

<div class="col-md-12 col-xs-12">
	<div class="space-10"></div>
	<div class="page-header">
    <?php echo $msg; ?>
    </div>
    <?php echo $action; ?>
</div>

<?php
layout_admin_page_end();

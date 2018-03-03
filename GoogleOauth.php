<?php

class GoogleOauthPlugin extends MantisPlugin {

	var $cmv_pages;
	var $current_page;

	function register() {
		$this->name        = 'Google Authentication Module';
		$this->description = 'Add Google authentication to MantisBT.';
		$this->page        = 'config';

		$this->version  = '2.0';
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
	}

	function hooks() {
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'resources'
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
}

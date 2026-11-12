<?php

class GoogleOauthPlugin extends MantisPlugin {

	var $cmv_pages;
	var $current_page;

	function register() {
		$this->name        = 'Google Authentication Module';
		$this->description = 'Add Google authentication to MantisBT.';
		$this->page        = 'config';

		$this->version  = '2.1';
		$this->requires = array(
			'MantisCore' => '2.0.0',
		);

		$this->author  = 'Alleen Wang';
		$this->contact = 'wchwch@gmail.com';
		$this->url     = 'https://github.com/mantisbt-plugins/GoogleOauth';
	}

	function init() {
		$this->cmv_pages    = array(
			'login_page.php',
			'login_password_page.php'
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

		return '
			<meta name="redirectUri" content="' . plugin_config_get( 'redirect_uri' ) . '" />
			<meta name="clientId" content="' . plugin_config_get( 'clientId' ) . '" />
			<style>
			#plugin_googleoauth {
				margin-bottom: 16px;
				text-align: center;
			}
			#gauth-btn {
				display: inline-flex;
				align-items: center;
				justify-content: center;
				gap: 10px;
				width: 100%;
				max-width: 100%;
				box-sizing: border-box;
				height: 40px;
				padding: 0 16px;
				background: #fff;
				border: 1px solid #dadce0;
				border-radius: 4px;
				font-family: "Google Sans", Roboto, Arial, sans-serif;
				font-size: 14px;
				font-weight: 500;
				color: #3c4043;
				text-decoration: none;
				cursor: pointer;
				transition: background 0.15s ease, box-shadow 0.15s ease;
			}
			#gauth-btn:hover {
				background: #f8f9fa;
				box-shadow: 0 1px 3px rgba(60,64,67,.3);
				text-decoration: none;
				color: #3c4043;
			}
			#gauth-btn svg {
				flex-shrink: 0;
			}
			.gauth-divider {
				display: flex;
				align-items: center;
				margin: 16px 0 0;
				color: #80868b;
				font-size: 13px;
			}
			.gauth-divider::before,
			.gauth-divider::after {
				content: "";
				flex: 1;
				border-top: 1px solid #dadce0;
			}
			.gauth-divider span {
				padding: 0 10px;
			}
			</style>
			<script type="text/javascript" src="'.plugin_file("plugin.js").'"></script>
		';
	}
}

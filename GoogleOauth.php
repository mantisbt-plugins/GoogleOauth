<?php

class GoogleOauthPlugin extends MantisPlugin {

  function register() {
    $this->name        = 'Google Authentication Module';
    $this->description = 'Add Google authentication to MantisBT.';
    $this->page        = 'config';

    $this->version     = '1.0';
    $this->requires    = array(
      'MantisCore'       => '1.2.0',
    );

    $this->author      = 'Alleen Wang';
    $this->contact     = 'wchwch@gmail.com';
    $this->url         = 'http://alleen.tw';
  }

  function init() {

    $this->cmv_pages = array(
      'login_page.php'
    );
    $this->current_page = basename($_SERVER['PHP_SELF']);
  }
  function hooks() {
    return array(
        'EVENT_LAYOUT_PAGE_HEADER' => 'my_begin',
        'EVENT_LAYOUT_RESOURCES' => 'my_resources'
      );
  }

  function config() {
      return array(
          'clientId' => '',
          'clientSecret' => '',
          'redirect_uri' => '',
      );
  }

  function my_begin($p_event) {
    if (!in_array($this->current_page, $this->cmv_pages)) return '';
    include ('pages/login_view.php');
    return $p_javascript;
  }

  function my_resources($p_event) {
    if (!in_array($this->current_page, $this->cmv_pages)) return '';
    return '<script src="plugins/GoogleOauth/pages/assets/lib/jquery-2.1.3.min.js"></script>';
  }
}

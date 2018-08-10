<?php
/**
 * plugin: GoogleAouth
 * file  : redirect.php
 */

$plugin_name = 'GoogleOauth';

$dn = dirname( dirname( dirname( dirname( __FILE__ ) ) ) );
$dn .= DIRECTORY_SEPARATOR;

require_once $dn . 'core.php';
require_once $dn . 'core/gpc_api.php';
require_once $dn .  
  "plugins/{$plugin_name}/library/google-api-php-client/vendor/autoload.php";

$cfg = array('clientId' => null,'clientSecret' => null,'redirect_uri' => null);
foreach($cfg as $key => $val) {
    $cfg[$key] = config_get('plugin_' . $plugin_name . '_' . $key);
}

$client = new Google_Client();
$client->setApplicationName("MantisBT Google authentication module");
$client->setClientId( $cfg['clientId'] );
$client->setClientSecret( $cfg['clientSecret'] );
$client->setRedirectUri( $cfg['redirect_uri'] );

$objOAuthService = new Google_Service_Oauth2($client);

if (isset( $_GET['code'] )) {
    $client->fetchAccessTokenWithAuthCode( $_GET['code'] );
    $_SESSION['access_token'] = $client->getAccessToken();
    $goto = filter_var( $cfg['redirect_uri'], FILTER_SANITIZE_URL);
    header('Location: ' . $goto );
}

if (isset( $_SESSION['access_token'] ) && $_SESSION['access_token']) {
    $client->setAccessToken( $_SESSION['access_token'] );
}

if ($client->getAccessToken()) {
    $userData = $objOAuthService->userinfo->get();
    $data['userData'] = $userData;
    $_SESSION['access_token'] = $client->getAccessToken();
}

$user_id = user_get_id_by_email( $userData->email );
if( $user_id === false ) {
    $user_id = user_get_id_by_gmail_address( $userData->email );
}

# check for disabled account
$user_feedback = plugin_lang_get('register_first', $plugin_name);

// want URL to MantisBT install directory
$dummy = explode('plugins',config_get('path'));
$goto = $dummy[0] . plugin_page('error',true,$plugin_name);

if( !user_is_enabled( $user_id ) ) {
    $goto .=  '?user_is_enabled_failure';
    header('Location: ' . $goto );
    return false;
}

# max. failed login attempts achieved...
if( !user_is_login_request_allowed( $user_id ) ) {
    $goto .=  '?user_is_login_request_allowed_failure';
    header('Location: ' . $goto );
    return false;
}

# check for anonymous login
if( user_is_anonymous( $user_id ) ) {
    $goto .=  '?user_is_anonymous';
    header('Location: ' . $goto );
    return false;
}


// If we are here, everything seems OK
user_increment_login_count( $user_id );
user_reset_failed_login_count_to_zero( $user_id );
user_reset_lost_password_in_progress_count_to_zero( $user_id );

# set the cookies
auth_set_cookies( $user_id, false );
auth_set_tokens( $user_id );

# Changes from different users contributions
# Obtain the redirect url from state param
# Example: state=view.php?id=2222
$relative_return_path = 'index.php';
if (isset( $_GET['state'] )) {
    $relative_return_path = $_GET['state'];
}
print_header_redirect( $return_path );
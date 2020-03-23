<?php

require_once 'assets/lib/google-api-php-client/vendor/autoload.php';

require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'core.php';
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'core/authentication_api.php';
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'core/config_api.php';
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'core/constant_inc.php';
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'core/crypto_api.php';
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'core/email_api.php';
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'core/gpc_api.php';
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'core/utility_api.php';
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ). DIRECTORY_SEPARATOR . 'plugins/GoogleOauth/GoogleOauth.php';
require_once 'google_reg.php';


# force logout on the current user if already authenticated
if( auth_is_user_authenticated() ) {
	auth_logout();
}

# Check to see if signup is allowed
if( !auth_signup_enabled() ) {
	print_header_redirect( auth_login_page() );
	exit;
}

$client = new Google_Client();

$client->setApplicationName("MantisBT Google authentication module");
$client->setClientId(config_get(plugin_GoogleOauth_clientId));
$client->setClientSecret(config_get(plugin_GoogleOauth_clientSecret));
$client->setRedirectUri(config_get(plugin_GoogleOauth_redirect_uri));

$objOAuthService = new Google_Service_Oauth2($client);
if (isset($_GET['code'])) {
    $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken())
{
    $userData = $objOAuthService->userinfo->get();
    $data['userData'] = $userData;
    $_SESSION['access_token'] = $client->getAccessToken();
}
$user_id = user_get_id_by_email( $userData->email );

if($user_id == false && config_get(plugin_GoogleOauth_auto_register) == 1){
    reg_with_google($userData);
    $user_id = user_get_id_by_email( $userData->email );
}

# check for disabled account
if( !user_is_enabled( $user_id ) ) {
    echo "<p>Email address not registered. Please register new account first. <br/> <a href='/signup_page.php'>Register</a></p>";
    return false;
}

# max. failed login attempts achieved...
if( !user_is_login_request_allowed( $user_id ) ) {
    echo "<p>Email address not registered. Please register new account first. <br/> <a href='/signup_page.php'>Register</a> </p>";
    return false;
}

# check for anonymous login
if( user_is_anonymous( $user_id ) ) {
    echo "<p>Email address not registered. Please register new account first. <br/> <a href='/signup_page.php'>Register</a> </p>";
    return false;
}

user_increment_login_count( $user_id );

user_reset_failed_login_count_to_zero( $user_id );
user_reset_lost_password_in_progress_count_to_zero( $user_id );

# set the cookies
auth_set_cookies( $user_id, false );
auth_set_tokens( $user_id );

// Obtain the redicrect url from state param
// Example: state=view.php?id=2222
if (isset($_GET['state'])) {
    $return_path = $_GET['state'];
    $redirect_url = '../../../' . $return_path;
} else {
    $redirect_url = '../../../index.php';
}

print_header_redirect( $redirect_url );

<?php
/**
 * plugin: GoogleAouth
 * file  : config_update.php
 */

$fid = 'plugin_GoogleOauth_config_update';
form_security_validate( $fid );
auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

plugin_config_set('clientId', strip_tags(gpc_get_string('prefClientID')));
plugin_config_set('clientSecret', strip_tags(gpc_get_string('prefClientSecret')));
plugin_config_set('redirect_uri', config_get('path'). "plugin.php?page=GoogleOauth/redirect");

form_security_purge( $fid );
print_successful_redirect( plugin_page( 'config', true ) );
<?php

form_security_validate( 'plugin_GoogleOauth_config_update' );
auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

plugin_config_set('clientId', strip_tags(gpc_get_string('prefClientID')));
plugin_config_set('clientSecret', strip_tags(gpc_get_string('prefClientSecret')));
plugin_config_set('redirect_uri', config_get('path')."plugins/GoogleOauth/pages/redirect.php");

form_security_purge( 'plugin_GoogleOauth_config_update' );
print_successful_redirect( plugin_page( 'config', true ) );

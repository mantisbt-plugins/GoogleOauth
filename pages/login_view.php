<?php
$p_javascript = "<script>
$(document).ready(function() {
	//allow admin to set password directly
	//include input for new password
	var frm = $('form[action=\"login.php\"]');
	$('<a style=\"display:block;margin-top:15px;font-size:1.3em;\" href=\"https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=".plugin_config_get('redirect_uri')."&client_id=".plugin_config_get('clientId')."&scope=https://www.googleapis.com/auth/userinfo.profile+https://www.googleapis.com/auth/userinfo.email&access_type=offline&approval_prompt=force&state=\">Sign in with google</a>').appendTo(frm);

	frm.children('#sign_with_google').on('click', function(){

		return false;
	});
});
</script>";


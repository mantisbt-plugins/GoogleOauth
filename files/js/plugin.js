
$(document).ready(function() {
    //allow admin to set password directly
    //include input for new password
    var frm = $('#login-form');
    var redirectUri = $("meta[name='redirectUri']").attr('content');
    var clientId = $("meta[name='clientId']").attr('content');
    $('<a class="btn btn-primary btn-sm bigger-110" href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=' + redirectUri + '&client_id=' + clientId + '&scope=https://www.googleapis.com/auth/userinfo.profile+https://www.googleapis.com/auth/userinfo.email&access_type=offline&approval_prompt=force&state=">Sign in with google</a>').appendTo(frm);

    frm.children('#sign_with_google').on('click', function(){
        return false;
    });
});

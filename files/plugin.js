
$(document).ready(function () {
    //allow admin to set password directly
    //include input for new password
    var frm = $('#login-form');
    var redirectUri = $("meta[name='redirectUri']").attr('content');
    var clientId = $("meta[name='clientId']").attr('content');
    // (disabled) Send all the params
    //var url = window.location.href
    //var state = ( url.match(/\?(.+)$/) || [,''])[1];
    // Send just the return param value
    var urlParams = new URLSearchParams(window.location.search);
    var state = urlParams.get('return') || '';
    $('<a id="sign_with_google" class="btn btn-primary btn-sm bigger-110" href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=' + redirectUri + '&client_id=' + clientId + '&scope=https://www.googleapis.com/auth/userinfo.profile+https://www.googleapis.com/auth/userinfo.email&access_type=offline&prompt=consent&state=' + state + '">Sign in with google</a>').appendTo(frm);
});

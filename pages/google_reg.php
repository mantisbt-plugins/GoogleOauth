<?php

function reg_with_google($p_google_userdata){
    $email = $p_google_userdata->email ;
    # check for disabled account
    $username = mb_strtolower(trim(preg_replace("/\s+/", "", $p_google_userdata->name)));
    # notify the selected group a new user has signed-up
    if( user_signup( $username, $email ) ) {
        email_notify_new_account( $username, $email );
    }
}
?>
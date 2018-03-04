# MantisBT GoogleAuth Plugin
--------


[TOC]


Features
--------
1. Add Google oauth 2.0 support to login to MantisBT.
2. User must have an existing MantisBT account.
3. Signup / account creation scenario is not supported.

How to install
--------------

1. Copy GoogleOauth folder into plugins folder.
2. Open Mantis with browser.
3. Log in as administrator.
4. Go to Manage -> Manage Plugins.
5. Find GoogleOauth in the list.
6. Click Install.

How to use
----------

1. Go to [Google Developers Console](https://console.developers.google.com/) and create the new project.
2. Copy client id and secret key to google oauth setting page.
3. Click the save button.

Supported Versions
------------------

- MantisBT 1.2.x - supported
- MantisBT 2.x - supported (repository master branch)

Plugin Folder Structure
-----------------------
Struct has been changed to follow the MantisBT suggested folder structure and naming convention

./GoogleAuth/pages
./GoogleAuth/files
./GoogleAuth/library

Operations Flow
-----------------------
If installation was ok, when you access MantisBT login page you will see a new button

![](.//screens/login_screen_with_sign_in_with_google_button.png)

When you click on button 'Sign in with google' you will see something similar to:  

![](.//screens/google_signin_screen.png)  

Or this  

![](.//screens/google_account_choice.png)  

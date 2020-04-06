<?php


define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Web$cloud_999');
define('DB_NAME', 'google_login');
define('DB_USER_TBL', 'users');

// Google API configuration
define('GOOGLE_CLIENT_ID', '986467249435-803hnkuhk8mpsujsgo441qq7qvg9hpab.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '35pRRhhR6bIGqJigai28H8eR');
define('GOOGLE_REDIRECT_URL', 'http://localhost/google_login/index.php');

// Start session
if(!session_id()){
    session_start();
}
//config.php

//Include Google Client Library for PHP autoload file
require_once 'google-api-php-client/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId(GOOGLE_CLIENT_ID);

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret(GOOGLE_CLIENT_SECRET);

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_client->addScope('email');

$google_client->addScope('profile');
//
// $google_oauthV2 = new Google_Oauth2Service($google_client);  //not working (depricated)
$google_service = new Google_Service_Oauth2($google_client);


?>
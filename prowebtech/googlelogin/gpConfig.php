<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '287552037815-bke9i3i6321l4v1srtlp7i3nado1dhg8.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'mIl_kCI2sgU1kvQfEok7-i-L'; //Google client secret
$redirectURL = 'http://localhost/prowebtech/googlelogin/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
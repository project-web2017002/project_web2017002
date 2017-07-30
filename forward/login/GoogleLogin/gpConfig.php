<?php
session_start();

//Include Google client library
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

 /*
 * Configuration and setup Google API
 */
$clientId = '1046813497164-aojhrompgncpq377snpbkap1nf1e0q1f.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'Pl2WBnP1saK1hZNy5eTLyqzT'; //Google client secret
$redirectURL = 'http://localhost/optimus/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Optimus');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
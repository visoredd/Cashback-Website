<?php
//Include Google client library
if(!session_id()){
  session_start();
}
include_once 'srcc/Google_Client.php';
include_once 'srcc/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '862037793609-glsjaaf8d3i3iu8d4rl3i438defko6qi.apps.googleusercontent.com';
$clientSecret = 'qpHGYjHRhNRIO466YkpfHHd7';
$redirectURL = 'http://localhost/cashback/gogle/';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
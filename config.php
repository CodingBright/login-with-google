<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('719117001454-bhukcnrsvv9hglllsqbvf8neb47go7cm.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/AllExtraFiles/login_go/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
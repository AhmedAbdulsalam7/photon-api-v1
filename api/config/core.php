<?php
// show error reporting

error_reporting(E_ALL);
 
// set your default time-zone
date_default_timezone_set('Asia/Manila');
 
// variables used for jwt
$key = "photon-fast-light-secret-should-get";
$issued_at = time();
$expiration_time = $issued_at + (60 * 60); // valid for 1 hour
$issuer = "http://localhost/rest-api-authentication-photon/api/";
?>
<?php
include_once("flipkartApiClass.php");
 
// Get affiliateID and token from https://affiliate.flipkart.com/
// Set flipkart affiliateID and token
$affiliateID = 'shahrusha1';
$token = '888b73480eb947719f34cb997246474b';
$fkObj = new flipkartApi($affiliateID, $token);
 
// fetch flipkart offer
$offerJsonURL =  "https://affiliate-api.flipkart.net/affiliate/offers/v1/all/json";
 
$result = flipkartApi::getData($offerJsonURL, 'json');
var_dump($result);

?>
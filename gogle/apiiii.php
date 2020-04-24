<?php
include_once("flipkartApiClass.php");
 
// Get affiliateID and token from https://affiliate.flipkart.com/
// Set flipkart affiliateID and token
$affiliateID = 'shahrusha1';
$token = '888b73480eb947719f34cb997246474b';
$fkObj = new flipkartApi($affiliateID, $token);
 
// fetch flipkart offer
$offerJsonURL =  'https://affiliate-api.flipkart.net/affiliate/1.0/feeds/shahrusha1/category/tyy-4io.json?expiresAt=1522203410410&sig=3ae3b395e572c62680fd9abc7eb3ab88';
 // https://affiliate-api.flipkart.net/affiliate/feeds/<your affiliate_tracking_id>/category/<category>.json
$result = flipkartApi::getData($offerJsonURL, 'json');
var_dump($result);

?>

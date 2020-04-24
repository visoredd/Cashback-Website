<?php
$mysqli = new mysqli("localhost", "root", "", "cashback");
$url = "";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://tools.vcommission.com/api/coupons.php?apikey=a4a5dc0efa7be03167ef4ca646794bf0318aecb6cd4e81b2e7bdb6de29a13bc7');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result,true);
foreach($obj as $ob => $o){
	$insertall = $mysqli->query("INSERT INTO vcom (name,title,category, link) VALUES ('".$o['store_name']."','".$o['coupon_title']."','".$o['category']."','".$o['link']."')");
}
echo 'Inserted';

?>
<?php $mysqli = new mysqli("localhost", "root", "", "cashback");
$deletecash = $mysqli->query("DELETE FROM allflipkart");
?>
<?php 



    include "clusterdev.flipkart-api.php";

    //Replace <affiliate-id> and <access-token> with the correct values

    $flipkart = new \clusterdev\Flipkart("shahrusha1", "888b73480eb947719f34cb997246474b", "json");

    $url = 'https://affiliate-api.flipkart.net/affiliate/api/shahrusha1.json';

    //Call the API using the URL.

    $details = $flipkart->call_url($url);

    if(!$details){

        echo 'Error: Could not retrieve products list.';

        exit();
    }

    //The response is expected to be JSON. Decode it into associative arrays.

    $details = json_decode($details, TRUE);
    $count = 0;
    $count1 = 0;
    $count2 = 0; 
    $count3 = 0;
    $c = "";
    $v1 = $details['apiGroups']['affiliate']['apiListings'];
    foreach($v1 as $v => $data){ 
        if($v!=="software" && $v!=="network_components" && $v!=="landline_phones" && $v!== "pet_supplies" && $v!=="kids_clothing" && $v!=="bags_wallets_belts" && $v!=="kids_clothing" && $v!=="kids_footwear" && $v!=="eyewear" && $v!=="home_entertainment" && $v!=="luggage_travel" && $v!=="stationery_office_supplies " && $v!=="baby_care" && $v!=="audio_players" && $v!=="toys"){
                $caturl = $data['availableVariants']['v1.1.0']['top'];
                $newcaturl = $flipkart->call_url($caturl);
                $newcaturl = json_decode($newcaturl, TRUE);
                $nexturl = $newcaturl['nextUrl'];
                $products = $newcaturl['products'];
                $count3 = 0;
                foreach((array)$products as $product){
                    if($count3<30){
                        if($product['productBaseInfoV1']['inStock']==1){
                            if($product['productBaseInfoV1']['discountPercentage']>20){
                                $i = substr($product['productBaseInfoV1']['title'],0,6);
                                if($i !== $c){
                                    
                                    $insertall = $mysqli->query("INSERT INTO allflipkart (title, description, off, category, offers, link) VALUES ('".$product['productBaseInfoV1']['title']."','".$product['productBaseInfoV1']['productDescription']."','".$product['productBaseInfoV1']['discountPercentage']."', '".$v."', '".$product['productBaseInfoV1']['offers'][0]."','".$product['productBaseInfoV1']['productUrl']."')");
                                    $c = substr($product['productBaseInfoV1']['title'],0,6);
                                    $count3++;
                                }

                            }
                        }
                    }
                }
        }
    }
    echo 'Inserted'
?>

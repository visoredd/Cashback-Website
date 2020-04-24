<?php $mysqli = new mysqli("localhost", "root", "", "cashback");
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
        if($v=="mobiles"){
                $caturl = $data['availableVariants']['v1.1.0']['get'];

                $newcaturl = $flipkart->call_url($caturl);
                $newcaturl = json_decode($newcaturl, TRUE);
                for($i=0;$i<=2;$i++){
                
                $nexturl = $newcaturl['nextUrl'];
                $products = $newcaturl['products'];
                $count3 = 0;
                foreach((array)$products as $product){
                        if($product['productBaseInfoV1']['inStock']==1){
                                if ((strpos($product['productBaseInfoV1']['title'], 'HTC') !== false) || (strpos($product['productBaseInfoV1']['title'], 'Micromax') !== false) || (strpos($product['productBaseInfoV1']['title'], 'Karbonn') !== false) || (strpos($product['productBaseInfoV1']['title'], 'Samsung') !== false) || (strpos($product['productBaseInfoV1']['title'], 'Gionee') !== false) || (strpos($product['productBaseInfoV1']['title'], 'OPPO') == true) || (strpos($product['productBaseInfoV1']['title'], 'Panasonic') !== false) || (strpos($product['productBaseInfoV1']['title'], 'Sony') == true) || (strpos($product['productBaseInfoV1']['title'], 'Nokia') == true) || (strpos($product['productBaseInfoV1']['title'], 'Google') == true)){
                                    if($product['productBaseInfoV1']['flipkartSellingPrice']['amount']>3333){
                                    
                                    echo $v; ?> | <?php 
                                    echo $product['productBaseInfoV1']['title'];?><br><?php
                                    $count3++;
                                }
                            }

                        }
                }
                $newcaturl1 = $flipkart->call_url($nexturl);
                $newcaturl = json_decode($newcaturl1, TRUE);
            }
        }
    }

?>
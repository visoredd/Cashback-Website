<?php

    //Include the class.

    include "clusterdev.flipkart-api.php";

    //Replace <affiliate-id> and <access-token> with the correct values

    $flipkart = new \clusterdev\Flipkart("shahrusha1", "888b73480eb947719f34cb997246474b", "json");

    $url = 'https://affiliate-api.flipkart.net/affiliate/1.0/feeds/shahrusha1/category/7jv.json?expiresAt=1521946592690&sig=533d27b71d3035fe5db74408615cc161';

    //Call the API using the URL.

    $details = $flipkart->call_url($url);

    if(!$details){

        echo 'Error: Could not retrieve products list.';

        exit();
    }

    //The response is expected to be JSON. Decode it into associative arrays.

    $details = json_decode($details, TRUE);
    $count = 0;

    $products = $details['products'];
    foreach ($products as $product){
        if($count<5){
            //Keep count.
            $count++;
            //The API returns these values nested inside the array.
            //Only image, price, url and title are used in this demo
            $productId = $product['productBaseInfoV1']['productId'];
            $title = $product['productBaseInfoV1']['title'];
            $productDescription = $product['productBaseInfoV1']['productDescription'];
            //We take the 200x200 image, there are other sizes too.
            $productImage = array_key_exists('200x200', $product['productBaseInfoV1']['imageUrls'])?$product['productBaseInfoV1']['imageUrls']['200x200']:'';
            $sellingPrice = $product['productBaseInfoV1']['flipkartSellingPrice']['amount'];
            $productUrl = $product['productBaseInfoV1']['productUrl'];
            $productBrand = $product['productBaseInfoV1']['productBrand'];
            $productUrl = $product['productBaseInfoV1']['productUrl'];
            //Setting up the table rows/columns for a 3x3 view.
            echo '<a target="_blank" href="'.$productUrl.'"><img src="'.$productImage.'"/><br>'.$title."</a><br>Rs. ".$sellingPrice."<br>";
        }
    }
?>
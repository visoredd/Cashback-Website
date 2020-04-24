<?php

    //Include the class.

    include "clusterdev.flipkart-api.php";

    //Replace <affiliate-id> and <access-token> with the correct values

    $flipkart = new \clusterdev\Flipkart("shahrusha1", "888b73480eb947719f34cb997246474b", "json");

    $url = 'https://affiliate-api.flipkart.net/affiliate/offers/v1/all/json';

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
    $products = $details['allOffersList'];
    foreach ($products as $product){
            //Keep count.
            if($product['category']=="Deals Of The Day"){
            if($count2<=2){
            $count2++;
            //The API returns these values nested inside the array.
            //Only image, price, url and title are used in this demo
            $title = $product['title'];
            $productDescription = $product['description'];
            //We take the 200x200 image, there are other sizes too.
            $productImage = array_key_exists('200x200', $product['imageUrls'])?$product['imageUrls']['200x200']:'';
            $productUrl = $product['url'];
            echo "<a href=".$productUrl.">".$title.":".$productDescription."<br><br>";
            }
            //Setting up the table rows/columns for a 3x3 view.
            }
            if($product['category']=="Fashion & Lifestyle"){
                if($count<=4){
            $count++;
            //The API returns these values nested inside the array.
            //Only image, price, url and title are used in this demo
            $title = $product['title'];
            $productDescription = $product['description'];
            //We take the 200x200 image, there are other sizes too.
            $productImage = array_key_exists('200x200', $product['imageUrls'])?$product['imageUrls']['200x200']:'';
            $productUrl = $product['url'];
            echo "<a href=".$productUrl.">".$title.":".$productDescription."<br><br>";
            }
            //Setting up the table rows/columns for a 3x3 view.
            }
            if($product['category']=="Electronics"){
            if($count1<=5){
            $count1++;
            //The API returns these values nested inside the array.
            //Only image, price, url and title are used in this demo
            $title = $product['title'];
            $productDescription = $product['description'];
            //We take the 200x200 image, there are other sizes too.
            $productImage = array_key_exists('200x200', $product['imageUrls'])?$product['imageUrls']['200x200']:'';
            $productUrl = $product['url'];
            echo "<a href=".$productUrl.">".$title.":".$productDescription."<br><br>";
            }
            //Setting up the table rows/columns for a 3x3 view.
            }
            
    }
?>
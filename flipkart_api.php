<?php $mysqli = new mysqli("localhost", "root", "", "cashback"); ?>

<?php 



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
    $projects = array();
    $records = $mysqli->query("SELECT * FROM flipkart_api2");
    while ($project =  mysqli_fetch_array($records))
    {
        $projects[] = $project;
    }
    
    foreach ($products as $product){
    	foreach ($projects as $project)
    {
       if($project['description'] == $product['description']){
       	$count3 =1;
       	break;
       }

     }
     if($count3!==1){
     	$query = $mysqli->query("INSERT INTO flipkart_api2 SET title = '".$product['title']."', description = '".$product['description']."', link = '".$product['url']."'");
     	$count=0;
     }
     }
?>

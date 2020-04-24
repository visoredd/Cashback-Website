<?php

        // database connection details
        $MySQL_host     = 'localhost';
        $MySQL_username = 'root';
        $MySQL_password = '';
        $MySQL_database = 'cashback';

        // if could not connect to database
        if (!($connection = @mysql_connect($MySQL_host, $MySQL_username, $MySQL_password)))

            // stop execution and display error message
            die('Error connecting to the database!<br>Make sure you have specified correct values for host, username and password.');

        // if database could not be selected
        if (!@mysql_select_db($MySQL_database, $connection))

            // stop execution and display error message
            die('Error selecting database!<br>Make sure you have specified an existing and accessible database.');

$url = 'https://tools.vcommission.com/api/coupons.php?apikey=a4a5dc0efa7be03167ef4ca646794bf0318aecb6cd4e81b2e7bdb6de29a13bc7';
$content = file_get_contents($url);
$json = json_decode($content, true);

var_dump($json);


?>
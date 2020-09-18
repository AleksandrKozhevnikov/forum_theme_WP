<?php

$dbhost = "localhost";
$dbuser = "sid212_sid";
$dbpass = "Amatory97";
$dbname = "sid212_forum";

($connection = new mysqli($dbhost, $dbuser, $dbpass)) || die("Couldn't connect to MySQL");
mysqli_select_db($connection, $dbname) || die("Couldn't open db: $dbname. Error if any was: ".$connection->connect_error );
mysqli_set_charset($connection,'utf8');
?>
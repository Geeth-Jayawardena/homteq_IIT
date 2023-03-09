<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'homteq';
//create a DB connection 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//if the DB connection fails, display an error message and exit
if(mysqli_connect_error()){
    die("Database connection faild" . mysqli_connect_error());
}else {
    echo "Connection successfull.";
}

?>
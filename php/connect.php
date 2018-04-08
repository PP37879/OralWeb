<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
 


$servername = "mysql.hostinger.in.th";
$username = "u296145480_user";
$password = "pp0897733645";
$dbname = "u296145480_oral";
$conn = new mysqli($servername, $username, $password, $dbname);
?>
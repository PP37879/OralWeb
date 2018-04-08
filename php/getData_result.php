<?php
$host  = "mysql.hostinger.in.th";
$user = "u296145480_user";
$pass = "pp0897733645";
$db = "u296145480_oral";

$con = mysqli_connect($host,$user,$pass,$db);

// if(!$con)
// {
//  die("Error ".mysqli_connect_error());
 
// }
// else
// {
//  echo "<h3>connection success</h3>";
 
// }

$con->set_charset("utf8");
$sql = "select * from result;";

$res = mysqli_query($con,$sql);
$response = array();
while($row=mysqli_fetch_array($res))
{

 array_push($response,array('ID'=>$row[0],'studentName'=>$row[1]));
}

echo json_encode(array('result'=>$response), JSON_UNESCAPED_UNICODE);
mysqli_close($con);
//echo "Hello world...";



?>﻿
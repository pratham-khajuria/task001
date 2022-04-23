<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "demo_1";

$con=mysqli_connect($host,$user,$pass,$db);

if ($con){
  echo " ";
}

else{
  echo "db is not connected";
}

?>

<?php

$dbhost = "localhost";
$dbuser= "root";
$dbPass = "";
$dbname = "school";

$link = mysqli_connect($dbhost, $dbuser, $dbPass, $dbname);

//if(!$link){
  //  die("connection failed" . mysqli_connect_error());
//}
if(@mysqli_connect_error())
{
    die('user can not connect to the database try again');
}else{
    @mysqli_select_db($link,'school');
}

?>

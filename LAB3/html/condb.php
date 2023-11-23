<?php
$host = "db";
$username = "root"
$password = "1234"
$db = "internet";


$conn = mysqli_conect($host,$username,$password,$db);
mysqli_query($conn,"SET NAMES utf8");

try{

}
catch(Exception $e){
    $error->getMessage();
    error_log($error);
    echo $error;

}


?>
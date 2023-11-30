<?php
require "condb.php";

$id = $_GET["id_mem"];

try{
    $sql = "DELETE FROM tb_member WHERE id_member = :'$id'";
    mysql_query($conn,$sql);

}cat (Exception $e){
    //echo $e=>getmasgsage();
    echo "eorror";
}



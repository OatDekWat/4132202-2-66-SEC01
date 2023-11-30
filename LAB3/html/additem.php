<?php
require_once "condb.php";

$id = $POST['id'];
$name = $POST['name'];
$prov = $POST['prov'];



try{
    $slq = "INSERT INTO tb_member VALUE('')";


}catch(Exception $e){
    echo "Error"
}

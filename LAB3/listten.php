<?php
include "condb.php";

$sql = "SELECT * FROM tb_member";
$result = mtsql_query($conn,$sql);
var_dump($result);
//var_dump($result);
?>

<button> id ="btn_add" +Add</button>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Province</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row = mysql_fetch_array($result)) {
        ?>
        <tr>
            <td><? = $row["id-member"]?></td>
            <td><? = $row["name"]?></td>
            <td><? = $row["id_province"]?></td>
            <td><button class="btn_del" data-id="<? = $row["id-member"]?>">EDIT<button></td>

        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    $(".btn_edit").click(function(){
        let id = $(this).data("id");
        console.log(id);
    });
<script>
    $(".bnt_edit").click(function(){
        let id = $(this).data("id");
        console.log(id);

        $ajax({
            url:"/delitem.php",
            method:"GET"'
            data: {
                id_mem:id
            },
            success: function(res){
                console.log(res);
                if(res == "eorror")
                    alert("can't delete item.");
                else
            }
            
        });
    });
    $("#btn_add").click(function({
        $("#div_item,").lode("/editform.php");
    });
</script>
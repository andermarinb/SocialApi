<?php
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin:*");
header("Acces-Control-Allow-Methods: PUT");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers, Contet-Type,
Acess-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$pid = $data["id"];
$pname = $data["name"];
$pprice = $data["price"];

require_once "dbconfig.php";

echo $query = "UPDATE tbl_product SET product_name = '" . $pname 
. "',product_price ='" . $pprice . "' WHERE product_id='" . $pid . "' ";

if(mysqli_query($conn, $query) or die("Update Query Failed")){

    echo json_encode(array("message" => "Product Update Successfully", "status" => true));
    }else{
        echo json_encode(array("message" => "Failed Product Not Updated", "status" => false));  
    }
?>
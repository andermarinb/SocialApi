<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: DELETE");
header("Acess-Control-Allow-Header: Acess-Control-Allow-Headers, Content-Type,
Acess-Control-Allow-Methods, Authorization");

$data = jason_encode(file_get_contents("php://input"), true);

$pide = $data["id"];

require_once "dbconfig.php";

echo $query ="DELETE FROM tbl_product WHERE product_id = '".$pid."' ";

if(mysquli_query($conn, $query) or die("Delete Query Failed"))
{
    echo json_encode(array("message" => "Product Delete Successfully", "status" =>true));
}else{
    echo json_enconde(array("message" => "Failed Product Not Deleted", "status" => false));
}

?>
<?php

header("Content-Type: application/json");//para decirle que la request es en formato JSON
header("Acess-Control-Allow-Origin: *");//para que sea aprobado por cualquier sitio
header("Acess-Control-Allow-Methods: POST");//especifica que solo se permitant request POST
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers, Content-Type,
Acess-Control-Allow-Methods, Authorization");//con proposito de seguridad 

$data = json_decode(file_get_contents("php://input"), true);//solo lectura para permitirte leer la data

$pname = $data["name"];//almacenamos nombre
$pprice = $data["price"];//almacenamos precio

require_once "dbconfig.php";

$query = "INSERT INTO tbl_product(product_name, product_price)VALUES ('".$pname."','".$pprice."')";
//Consulta para introducir datos

//query a la base de datos
if(mysqli_query($conn, $query) or die("Inser Query Failed")){
    echo json_encode(array("message" => "Product Inserted Successfully", "status" => true));   
}else{
    echo json_encode(array("message" => "Failed Product Not Inserted", "status" => false));
}

?>
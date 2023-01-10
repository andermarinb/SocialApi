<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");

require_once "dbconfig.php";

$query = "SELECT * FROM tbl_product"; //query de nuestra base de datos

$result = mysqli_query($conn, $query) or die("Select Query Failed.");//almacenamos el resultado, si da error saltara el die

$count = mysqli_num_rows($result);//almacenamos las filas

if($count>0){//almacenamos los datos
    $row = mysqli_fetch_all($result, MYSQL_ASSOC);

    echo json_encode($row);
}else{
    echo json_encode(array("message" => "No Product Found.", "status => false"));
}
?>
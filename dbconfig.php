<?php

$DBhost = "localhost:3306"; //Colocar aqui tu localhost y puerto
$DBuser = "root";//nombre de usuario en la base de datos
$DBpass = "123456";//contraseña d ela base de datos en caso de no tener colocar simplemnte ""
$DBname ="php_crud_api_db";//nombre de la base de datos que usaras

$conn = mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);

if(!$conn){
    die("COnnection failed: " . mysqli_connect_error());
}

?>
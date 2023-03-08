<?php
require_once 'db_conexion.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$ciudad=$_POST['ciudad'];

$sql = $cnnPDO->prepare("INSERT into ajax
(nombre, email, celular, ciudad) values (:nombre, :email, :celular, :ciudad)");

$result = $sql->execute(array(
    'nombre' => $nombre, 
    'email' => $email,
    'celular' => $celular,
    'ciudad' => $ciudad
));

echo $result;

?>
<?php
require_once 'db_conexion.php';
$id=$_POST['id'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$ciudad=$_POST['ciudad'];

$sql = $cnnPDO->prepare("UPDATE ajax SET  email=:email, celular=:celular, ciudad=:ciudad WHERE id = :id");

$result = $sql->execute(array(
    'id' => $id, 
    'email' => $email,
    'celular' => $celular,
    'ciudad' => $ciudad
));

echo $result;

?>
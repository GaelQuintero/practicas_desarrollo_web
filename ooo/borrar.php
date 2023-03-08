<?php
require_once 'db_conexion.php';
$id=$_POST['datos'];

$sql = $cnnPDO->prepare('DELETE from ajax WHERE id =:id');

$result = $sql->execute(array(
    'id' => $id, 
   
));

echo $result;

?>
<?php
require_once "db_conexion.php";

$salida='<div style="margin-top:50px";';	

if (isset($_POST['consulta'])){
	$sussy = $_POST['consulta'];

	$query = $cnnPDO->prepare("SELECT  id, nombre, email, celular, ciudad FROM ajax WHERE nombre LIKE '%$sussy%' OR id LIKE '%$sussy%'");
}
else {
	$query = $cnnPDO->prepare("SELECT * FROM ajax ORDER BY id");
}




$query->execute();
$reg = $query->rowCount();

if ($reg > 0 ){

	$salida.="<br><table class='table table-dark table-striped table-bordered border-danger text-danger'>
	<caption class='text-white '><h6>Lista de datos</h6></caption>
	<thead class='table-dark border-danger text-danger'>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Email</td>
			<td>Celular</td>
			<td>Ciudad</td>
			
		</tr>
		
	</thead>";

	while($fila = $query->fetch(PDO::FETCH_ASSOC)){
		extract($fila);
		$salida.="<tr>
			<td>".$id."</td>
			<td>".$nombre."</td>
			<td>".$email."</td>
			<td>".$celular."</td>
			<td>".$ciudad."</td>
			
			
			
		</tr>";
	}

	$salida.="</table></div>";

} else {

	$salida="<div class='alert alert-danger' role='alert'> <b>No se encontro ningún resultado que coincidan con está búsqueda</b> </div>";

}
 echo $salida;
 unset($query);
?>

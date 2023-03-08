<?php
/* Conectar a una base de datos de MySQL Local */
$utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

/* Definir las variables para la conexion al PDO */
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'crud');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');


	try {
		/* Conectar a una base de datos de MySQL Local */
		$cnnPDO = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD,$utf8);
	} catch (PDOException $e) {

	echo "<!DOCTYPE html>
<html>
<head>
	<title>SH: Conexion a la Base de datos</txitle>
	<meta charset='utf-8'>
	<link rel='icon' href='images/icon.png'>
	
</head>
<body>

		<div style='width:40%;margin:0 auto; margin-top:50px;'>
		<div class='card border border-danger  text-center'>
        <div class='card-header'>
        <font color=red>Error de Cadena de Conexión</font>
      </div>
      <div class='card-body'>
          <h6 class='card-title'><font color=red><i><strong>Ha surgido un error y no se puede conectar a la base de datos!</font></i></strong></h6>
        <br>
        <img src=images/Error_db.png class=img-fluid>
        <br><br>
        <h6 align=center>
            <font color=red><i><strong>
            Verifique el nombre de su | base de datos |<br> 
            </font></i></strong>
        </h6>
    </div>
     <div class='card-footer text-muted'>
        © 2022 Copyright : Desarrollo de Sitios Web
      </div>
    </div>
    </div>	";
}
?>
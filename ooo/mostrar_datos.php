<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Mostrar datos</title>
    <!-- BOOTSTRAP 5.1  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Libreria de jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <!-- Libreria de sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  </head>
  <body style="background-color: rgb(112, 241, 166) ;">

  <style type="text/css">
      
      .container
      {
          width: 680px;
          height: 38;
          left: 30%;
          top: auto;
          border-radius: 50px;
      }
      button{
          font-family: 'roboto';
         
          border: none;
          display: block;
          width: 80%;
          margin: 10px auto;
          color: #fff;
          height: 40px;
          font-size: 16px;
          cursor: pointer;
          
      }
     
      body{
          
        background: rgb(91,131,152);
background: radial-gradient(circle, rgba(91,131,152,1) 0%, rgba(48,59,70,1) 100%);
      }
      

      
      
       </style>
       <nav class="navbar navbar-expand-sm navbar-white bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand">Datos registrados  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg></a>
    <div class="collapse navbar-collapse mb-0" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Registrar nuevos datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="editar_datos.php">Modificar datos</a>
        </li>
        <input  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" type="button" class="btn btn-outline-primary" value="Editar datos">
      </ul>
      <form class="d-flex">
        
      <input class="form-control me-2" type="search" id="caja_busqueda"placeholder="Buscar datos" aria-label="Search"></input>
      <input type="button" class="btn btn-outline-primary" id="borrar" name="borra"value="Borrar datos">
    </form>
    </div>
  </div>
</nav>
          <body>   
          <div class="container text-center" style="width:80%;margin:0 auto; margin-top:20px;">

	<h3 class="text-center w-responsive mx-auto mb-5 text-white">CRUD con PHP, MySQL y AJAX</h3>


	<div id="Div-Contactos">
		<!-- Aqui se publicaran los datos de los Contactos -->
    
	</div>



<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
    <div class="modal-content" >
      <div class="modal-header" >
        <h5 class="modal-title">Modificar datos registrados</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <div class="mb-3 ">
               <label  class="form-label">Por favor ingresa el ID</label>
               <input type="text" class="form-control" name="id" id="id" placeholder="ID" autofocus>
       </div><br>
      
       <div class="input-group flex-nowrap">
  <span class="input-group-text">Nuevo correo electronico</span>
  <input type="text" name="email" id="email" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
</div><br>
      <div class="mb-3" >
              <label  class="form-label">Por favor ingresa tu nuevo numero celular</label>
              <input type="number" class="form-control"  name="celular" id="celular" placeholder="Celular">
      </div>
      <div class="mb-3" >
              <label  class="form-label">Por favor ingresa tu nueva ciudad</label>
              <input type="text" class="form-control"  name="ciudad" id="ciudad" placeholder="Ciudad">
      </div>
     

      </div>
      <div class="modal-footer" >
      <input type="button" class="btn btn-outline-primary" id="editar" name="editar"value="Actualizar datos">
      </div>
    </div>
  </div>
</div>

</div>




      </body>
      </html>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     
     <script type="text/javascript">

        
	$(document).ready(function(){

	/* Funcion para leer la tabla y mostrar todos los contactos */
	readContactos(); 

	function readContactos(consulta){
		$.ajax({
       		 type:"POST",
       		 url:"buscar_datos.php",
    		 dataType: 'html',
        	data: {consulta},
   })
    .done(function(respuesta){
    	$('#Div-Contactos').html(respuesta);
    });

	}

	$(document).on('keyup','#caja_busqueda', function(){
		let valor = $('#caja_busqueda').val();
			if (valor != "") {
				readContactos(valor);
			}
			else {
				readContactos();
			}
	});

	$(document).on('keydoun','#caja_busqueda', function(){
	let valor = $('#caja_busqueda').val();
		if (valor != "") {
			readContactos();
		}
	
	});
    	//Funcion para borrar//
    $('#borrar').click(function(){
      event.preventDefault();
        var datos = $('#caja_busqueda').val();

      if ($('#borrar').val() == '') {
        swal ("¡Debes de ingresar el ID! " , "" , "warning");
        return; }
        
        
        $.ajax({
        type:"POST",
        url:"borrar.php",
        data:{datos},
        
        success:function(r){
          if (r==1)
          {
  
           swal ("Datos borrados correctamente " , "Los datos fueron eliminados" , "success");
            $('#id').val('');
            readContactos();
           
          }
          else 
          {
            swal ("Error " , "Los datos no fueron borrados" , "warning");
          }

        }

      });
      return false;
     
    });
    //Funcion para editar//
    $('#editar').click(function(){
      event.preventDefault();
        var datos = $('#caja_busqueda').val();
        
        $.ajax({
        type:"POST",
        url:"editar.php",
        data:datos,
        success:function(r){
          if (r==1)
          {
           swal ("Datos actualizados correctamente " , "Los datos fueron modificados" , "success");
           $('#id').val('');
            $('#email').val('');
            $('#celular').val('');
            $('#ciudad').val('');
          }
          else 
          {
            swal ("Error " , "Los datos no fueron actualizados" , "warning");
          }

        }

      });
      return false;

     
    });
  });
    
  

</script>

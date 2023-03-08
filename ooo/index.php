<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registro con ajax</title>
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
          background: rgb(237,66,66);
background: radial-gradient(circle, rgba(237,66,66,1) 0%, rgba(245,45,56,1) 100%, rgba(245,39,39,1) 100%);
          border: none;
          display: block;
          width: 80%;
          margin: 10px auto;
          color: #fff;
          height: 40px;
          font-size: 16px;
          cursor: pointer;
          
      }
      form{
         
          padding: 40px 0;
          border-radius: 50px;
      }
      body{
          
        background: rgb(91,131,152);
background: radial-gradient(circle, rgba(91,131,152,1) 0%, rgba(48,59,70,1) 100%);
      }
      
      
       </style>
          <body>   
          <form action="mostrar_datos.php" id="form-contactos" method="post">
         <div class="container ">
            <div class="p-3 mb-3 bg-dark text-white text-align:center">Registrar datos</div>
              <div class="card">
                  <div class="card-body">
                      
                                <br>
       <div class="mb-3 ">
               <label  class="form-label">Por favor ingresa tu nombre</label>
               <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" autofocus>
       </div><br>
       <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">@</span>
  <input type="text" name="email" id="email" class="form-control" placeholder="Correo electronico" aria-label="Username" aria-describedby="addon-wrapping">
</div><br>
      <div class="mb-3">
              <label  class="form-label">Por favor ingresa tu celular</label>
              <input type="number" class="form-control"  name="celular" id="celular" placeholder="Celular">
      </div>
      <div class="mb-3">
              <label  class="form-label">Por favor ingresa tu ciudad</label>
              <input type="text" class="form-control"  name="ciudad" id="ciudad" placeholder="Ciudad">
      </div>
      <div class=" d-grid gap-2">
              <button type="button"  name="enviar" id="enviar">Registrar datos  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></button>
      </div>
      
          </form> 
          <div class=" d-grid gap-2">
              <button type="submit" href="mostrar_datos.php">Mostrar datos registrados <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg></button>
      </div>
      </body>
      </html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos = $('#form-contactos').serialize();

      if ($('#nombre').val() == '') {
        swal ("¡Debes de ingresar tu Nombre! " , "" , "warning");
        return;
      }
      if ($('#email').val() == '') {
        swal ("¡Debes de ingresar tu correo electronico! " , "" , "warning");
        return;
      }
      if ($('#celular').val() == '') {
        swal ("¡Debes de ingresar tu numero celular! " , "" , "warning");
        return;
      }
      if ($('#ciudad').val() == '') {
        swal ("¡Debes de ingresar tu ciudad! " , "" , "warning");
        return;
      }

      $.ajax({
        type:"POST",
        url:"registro.php",
        data:datos,
        success:function(r){
          if (r==1)
          {
           swal ("Datos enviados correctamente " , "Los datos fueron registrados" , "success");
            $('#nombre').val('');
            $('#email').val('');
            $('#celular').val('');
            $('#ciudad').val('');
            
          }
          else 
          {
            swal ("Error " , "Los datos no fueron registrados" , "warning");
          }

        }

      });
      return false;

    });
  });
</script>
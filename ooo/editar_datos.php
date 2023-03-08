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
            <div class="p-3 mb-3 bg-dark text-white text-align:center">Modificar datos</div>
              <div class="card">
                  <div class="card-body">
                       <p style="text-align:center">Ingresa el ID de los datos que quieres actualizar</p>
                                <br>
                                <div class="mb-3 ">
               <label  class="form-label">Por favor ingresa el ID</label>
               <input type="text" class="form-control" name="id" id="id" placeholder="ID" autofocus>
       </div><br>
       <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Nuevo correo electronico</span>
  <input type="text" name="email" id="email" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
</div><br>
      <div class="mb-3">
              <label  class="form-label">Por favor ingresa tu nuevo numero celular</label>
              <input type="number" class="form-control"  name="celular" id="celular" placeholder="Numero celular">
      </div>
      <div class="mb-3">
              <label  class="form-label">Por favor ingresa tu nueva ciudad</label>
              <input type="text" class="form-control"  name="ciudad" id="ciudad" placeholder="Nueva ciudad">
      </div>
      <div class=" d-grid gap-2">
              <button type="button"  name="enviar" id="enviar">Actualizar datos  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg></button>
      </div>
      
          </form> 
          <div class=" d-grid gap-2">
              <button type="submit" href="mostrar_datos.php">Volver</button>
      </div>
      </body>
      </html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos = $('#form-contactos').serialize();
      
      if ($('#id').val() == '') {
        swal ("¡Debes de ingresar la ID! " , "" , "warning");
        return;
      }

      if ($('#email').val() == '') {
        swal ("¡Debes de ingresar tu nuevo correo electronico! " , "" , "warning");
        return;
      }
      if ($('#celular').val() == '') {
        swal ("¡Debes de ingresar tu nuevo numero celular! " , "" , "warning");
        return;
      }
      if ($('#ciudad').val() == '') {
        swal ("¡Debes de ingresar tu nueva ciudad! " , "" , "warning");
        return;
      }

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
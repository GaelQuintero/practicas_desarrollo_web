<?php
session_start();
require_once 'cdn.html';


?>
<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesion</title>
    <!-- icono de la pagina -->
    <link rel="icon" type="image/png" sizes="16x16"  href="/favicons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
    <!-- JQuery Validate library -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<style>
    body {
        background-color: #ffffff;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='635' height='635' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='88' y1='88' x2='0' y2='0'%3E%3Cstop offset='0' stop-color='%23008c91'/%3E%3Cstop offset='1' stop-color='%2300dde2'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='75' y1='76' x2='168' y2='160'%3E%3Cstop offset='0' stop-color='%23008c91'/%3E%3Cstop offset='0.09' stop-color='%2300aeb3'/%3E%3Cstop offset='0.18' stop-color='%2300c4c9'/%3E%3Cstop offset='0.31' stop-color='%2300d6da'/%3E%3Cstop offset='0.44' stop-color='%2300e3e7'/%3E%3Cstop offset='0.59' stop-color='%2300edf1'/%3E%3Cstop offset='0.75' stop-color='%2300f5f9'/%3E%3Cstop offset='1' stop-color='%2305FAFE'/%3E%3C/linearGradient%3E%3Cfilter id='c' x='0' y='0' width='200%25' height='200%25'%3E%3CfeGaussianBlur in='SourceGraphic' stdDeviation='12' /%3E%3C/filter%3E%3C/defs%3E%3Cpolygon fill='url(%23a)' points='0 174 0 0 174 0'/%3E%3Cpath fill='%23000' fill-opacity='0.54' filter='url(%23c)' d='M121.8 174C59.2 153.1 0 174 0 174s63.5-73.8 87-94c24.4-20.9 87-80 87-80S107.9 104.4 121.8 174z'/%3E%3Cpath fill='url(%23b)' d='M142.7 142.7C59.2 142.7 0 174 0 174s42-66.3 74.9-99.3S174 0 174 0S142.7 62.6 142.7 142.7z'/%3E%3C/svg%3E");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: top left;
    }
</style>


<body style="margin-top: 110px;">
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>

            <div class="col-6">
                <div class="card">

                    <h5 class="card-header bg-info  info-color white-text text-center py-4">
                        <strong>Acceder a Chain</strong>
                    </h5>


                    <div class="card-body px-lg-5">


                        <form method="post" style="color: #00cccc;">

                            <div class="text-center">



                            </div>


                            <label for="nombre" class="cyan-text font-weight-info">Ingresa tu nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            <br>



                            <label for="correo" class="cyan-text font-weight-info">Ingresa tu correo</label>
                            <input type="email" name="correo" id="correo" class="form-control">
                            <br>

                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"  style="  border-radius: 20px;" name="enviar" id="enviar" type="submit">Iniciar sesion</button>


                            <center>
                                <?php
  // Establecer la conexión a la base de datos
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "practica1";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // Habilitar excepciones de PDO
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      echo "Error de conexión: " . $e->getMessage();
  }

                                if (isset($_POST['enviar'])) {
                                  

                                    $num = $_POST['nombre'];
                                    $psw = $_POST['correo'];


                                    $query = $conn->prepare('SELECT * from register WHERE nombre=:nombre and correo=:correo');

                                    $query->bindParam(':nombre', $num);
                                    $query->bindParam(':correo', $psw);



                                    $query->execute();

                                    $count = $query->rowCount();
                                    $campo = $query->fetch();

                                    if ($count) {
                                        
                                        $_SESSION['nombre'] = $campo['nombre'];
                                        $_SESSION['apellido'] = $campo['apellido'];
                                        $_SESSION['correo'] = $campo['correo'];
                                     





                                        echo "<script> window.location.href='welcome.php';</script>";
                                    } else {
                                        echo '<script>
                                        Swal.fire({
                                            icon: "warning",
                                            iconColor: "#00cccc",
                                            title: "Nombre y correo no existen",
                                            html: "<font color=#00cccc><strong>¡Por favor verifique los datos!</font>",
                                            position: "top-center",
                                            showConfirmButton: false,
                                            confirmButtonText: "Aceptar",
                                            timerProgressBar: true,
                                            timer: 2500,
                                        })
                                        </script>';
                                    }
                                }
                                ob_end_flush();
                                ?>
                            </center>

                        </form>
                        <form action="registro.php">
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"  style="  border-radius: 20px;" name="#" id="#" type="submit">Volver</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-3">

            </div>
        </div>
    </div>


</body>


</html>
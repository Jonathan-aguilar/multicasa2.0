<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
  <title> Login Multicasa Bienes Raices</title>
  <meta name="viewport" content="width, user-scalable=no, initial-scale=1,maxinum-scale=1">
  <link rel="stylesheet" href="css/estilo_login.css">
   
</head>
<body>

</body>
<script src="js/validar_login.js"></script> 
<script src="js/validar_login.js"></script> 
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Contactanos</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilosAltaInmueble.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/buttons.dataTables.min.css"> 

</head>
<body>

    <div class="container">
        <div class="contenedor">
            <header class="header">
                <div class="logo-empresa">
                    <img class="logotipo" src="images/logo.png" style="width: 48%">
                    <img class="tel" src="images/tel.png" style="width: 18.3%">
                </div>
                <div class="menuHorizontal">
                    <ul class="topnav">
                        <li class="derecha"><a href="index.php">Inicio</a></li>
                        <li class="derecha"><a href="#">La Compañia</a></li>
                        <li class="derecha"><a href="#">Servicios</a></li>
                        <li class="derecha"><a href="#">Requisitos</a></li>
                        <li class=" izquierda"><a href="login.php"><img class="incono-verde"src="images/icono_verde.png" >Admin.</a></li>
                        <li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Buscar</a></li>
                        <li class=" izquierda"><a href="index.php"><img class="incono-verde"src="images/icono_verde.png" >Inicio</a></li>
                    </ul>
                </div>
            </header>
            <div class="contenido">
                <div class="col-12 col-md-12 col-lg-12 py-3" id="main">
                <form action="verifica_usuario.php" method="post";>
 <form action="verifica_usuario.php" onsubmit="return validar(this);" method="post" >

  <h2>Login administrador Multicasa</h2>
  <input type="text" id="iusuario" placeholder="&#128272; Usuario" name="usuario" maxlength="50" required>
  <input type="password" id="iclave" placeholder="&#128272; Contraseña" name="clave" maxlength="8" required>
  </div>
  <input type="submit" value="Ingresar">
</form>
                 
                    <br>

                </div>
            </div>

            <footer class="footer">
                <div class="logo-empresa">
                    <img class="logo" src="images/logotipo.png">
                </div>
                <div class="menuFooter">
                    <ul class="topnav">
                        <li class="derecha"><a href="index.php">Inicio</a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Compra </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Construir </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Venta </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Mudanzas </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Seguros </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Contactos </a></li>
                        <div class="copyright">
                            <p>Bienes Raíces Multicasa © 2019</p>
                            <a href="politicas.php">Politicas De Privacidad</a>              
                        </div>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <!-- --------------------------Scripts ------------------------------ -->

    <script src="js/jquery-1.12.3.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="bootstrap/js/dataTables.bootstrap.js"></script>

    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/buttons.flash.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
</body>
<script src="js/validar_login.js"></script> 
<script src="js/validar_login.js"></script> 
</html>
<?php
$conexion=mysqli_connect('localhost','root','','multicasa');
$usuario=$_POST['usuario'];
$pass= $_POST['clave'];
$consulta="SELECT * from administradores where usuario='$usuario' and clave='$pass'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);
if($consulta="SELECT * from administradores where usuario='$usuario' and clave='$pass'"){
  header("location:admin/inicio_privado.php");
}
else {
  echo "alert('Los campos no coinciden')";
  return false;
	echo '<script type="text/javascript">';
	echo "alert('Los campos no coinciden')";
    echo '</script>';	
    header('refresh:0; login.php');
  
  return false;
}
mysqli_free_result($resultado);
mysqli_close($conexion);

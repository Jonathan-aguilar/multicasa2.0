<?php
	include("class_inmueble_dal.php");
	
	$id_inmueble = $_GET['id_inmueble'];
	$obj = new inmueble_dal();
    $resultado = $obj->eliminar($id_inmueble);
	if($resultado){
        header('location: ../modificar_inmueble.php');
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Error: No se pudo eliminar el registro.")';
                echo '</script>';
               header('location: ../modificar_inmueble.php');
            }

?>
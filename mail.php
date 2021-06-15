<?php

$msg = utf8_encode($_POST['mensaje']);

$to = "jonathan.aguilar1797@gmail.com";
$subject = "Multicasa cliente";
"CC: jonathan.aguilar1797@gmail.com";

mail($to,$subject,$msg);
echo "<script type='text/javascript'>";
echo "alert('Tu mensaje ha sido enviado con éxito')";
echo"</script>"; 
echo "<script type='text/javascript'>";
echo "window.location.href='inicio_publico.php'";
echo"</script>"; 
?> 
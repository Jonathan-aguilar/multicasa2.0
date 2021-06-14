<?php

$msg = $_POST['mensaje'];
$to = "multicasaweb@gmail.com.com";
$subject = "Multicasa cliente";
"CC: multicasaweb@gmail.com.com";

mail($to,$subject,$msg);
?> 
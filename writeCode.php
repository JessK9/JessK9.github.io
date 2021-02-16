<?php

$open =  fopen('readCode.php', 'w+');
$code = $_POST['input'];
//echo $code;
fwrite($open, $code);
fclose($open);


?>
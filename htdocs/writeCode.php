<?php

$open =  fopen('readCode.php', 'w+');
$code = $_POST['input'];

fwrite($open, $code);
fclose($open);


?>
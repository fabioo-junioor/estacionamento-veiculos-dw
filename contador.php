<?php
$arquivo = "reg.txt";
$handle = fopen($arquivo, 'r+');
$data = fread($handle, 512);
$contador = $data + 1;

echo ($contador);

fseek($handle, 0);
fwrite($handle, $contador);
fclose($handle);

?>
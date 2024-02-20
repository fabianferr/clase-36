<?php
$fp = fopen("fichero.txt", "r+");
while (!feof($fp)) {
$linea = fgets($fp);
echo $linea . "<br>";
}
fwrite($fp, "Prueba de escritura" . PHP_EOL);
fclose($fp);
?>
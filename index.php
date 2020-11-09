<?php
$myfile = fopen("texto.txt", "r") or die("No se puede abrir el fichero!");
$color = array('black', 'yellow', 'green');
for ($i = 0; !feof($myfile) ; $i++) {
    $i= $i % count($color);
    $nuevaLinea = fgets($myfile);
    echo "<spam style='color:".$color[$i]."'>".$nuevaLinea."</spam><br>";
}
fclose($myfile);
?>

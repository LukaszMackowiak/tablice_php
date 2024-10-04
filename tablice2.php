<?php

$tab = array();
$suma = 0;
for ($i = 0; $i < 5; $i++) {
    $tab4[$i] = rand(1, 100);
    $suma = $suma + $tab4[$i];
    echo $tab4[$i] . ", <br>";
}

echo "Suma: " . $suma;

?>
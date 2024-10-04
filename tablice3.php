<?php

$tab = array();
$suma = 0;

for ($i = 0; $i < 10; $i++) {
    $tab[$i] = rand(1, 30);
    echo $tab[$i] . ", ";
}

echo "<br> Elementy podzielne przez 3 to: ";

for ($i = 0; $i < 10; $i++) {
    if ($tab[$i] % 3 == 0) {
        echo $tab[$i] . ", ";
        $suma = $suma + 1;
    }
}

echo "<br> Liczb podzielnych przez 3 jest: " . $suma;


?>
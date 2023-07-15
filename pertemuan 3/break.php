<?php

for ($i=1; $i <= 10  ; $i++) { 
    if ($i == 5) {
        break;
    }
    echo $i . ' ';
}

echo "<br>";
echo "<br>";

$hewan = ["kucing", "anjing", "kambing", "ayam", "jerapah"];

for ($i=2; $i < count($hewan); $i++) { 
    if($hewan[$i] == "jerapah"){
        echo 'ketemu jerapah';
        break;
    }
    echo "bukan jerapah <br>";
}
<?php
function penjumlahan($nilai1, $nilai2)
{
    $hasil = $nilai1 + $nilai2;
    return $hasil;
}

function perkalian($nilai1, $nilai2)
{
    return $nilai1 * $nilai2;
}



$jumlah1 =  penjumlahan(2,3);
$jumlah2 =  penjumlahan(5,1);

echo $jumlah1;
echo "<br>";
echo $jumlah2;
echo "<br>";

// kali hasil jumlah
echo perkalian($jumlah1, $jumlah2);

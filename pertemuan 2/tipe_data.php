<?php

// INT
$umur = 19;

var_dump($umur);

// float
$phi = 3.14;

var_dump($phi);

// string
$nama = "Rofi";

var_dump($nama);


// bolean
$mahasiswa = true;

// array indexing
$siswa = ["Rofi", 19, true];

echo "nama saya" . $siswa[0] .
    "umur saya" . $siswa[1] . "saya laki laki" . $siswa[2];

// array asosiatif
$mahasiswa = ["nama => Rofi", "umur => 19", "ipk => 4.0"];
echo "nama saya $mahasiswa[nama], saya seorang mhsiswa dgn ipk $mahasiswa[ipk]";
<?php

$nama_lengkap = "GRS";
$nilai_akhir = 90;

$grade = "";
if ($nilai_akhir >= 90) {
    $grade = "A";
} else if ($nilai_akhir >= 80) {
    $grade = "B";
} else if ($nilai_akhir >= 70) {
    $grade = "C";
} else if ($nilai_akhir >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "Mahasiswa dengan nama $nama_lengkap mendapatkan nilai akhir $nilai_akhir dan mendapatkan grade $grade <br>";
echo 'Mahasiswa dengan nama $nama_lengkap mendapatkan nilai akhir $nilai_akhir dan mendapatkan grade $grade <br>';

//Contoh Perulangan
for ($i = 0; $i < 10; $i++) {
    echo "Perulangan ke-$i <br> <hr>";
}

//Function
function salam($nama, $tempat)
{
    $tgl = date("d-m-Y");
    $waktu = date("H:i:s");
    echo "Selamat datang di $tempat, $nama, hsti ini tanggal $tgl dan waktu $waktu <br>";
    echo "<br><br>";
}

salam("Andi", "Taiwan");
salam("Vali", "Hawai");
salam("Mon Ami", "France");

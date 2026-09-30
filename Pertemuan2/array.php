<?php
    //Array//
    //Biasa//
    $mahasiswa = ["Gyandra Rabil Saputra", "088812092133","IS",100000];

    //Cara Ke-2 menampilkan array//
    var_dump($mahasiswa);

    //Cara Ke-2 menampilkan array(Upgrade)//
    echo "<br>";
    echo $mahasiswa[0];
    echo "<br>";
    echo $mahasiswa[1];
    echo "<br>";
    echo $mahasiswa[2];
    echo "<br>";
    echo $mahasiswa[3];
 
    echo "<br>";
    echo "==============================================================";
    echo "<br>";

    //Array Associative (Memiliki key dan value)//
    $mahasiswa2 = [
        "nama" => "Gyandra Rabil Saputra",
        "telepon" => "088812092133",
        "jurusan" => "IS",
        "uang_saku" => 100000,
        "hobi1" => "Gaming"
    ];

    echo $mahasiswa2["nama"];
    echo "<br>";
    echo $mahasiswa2["telepon"];
    echo "<br>";
    echo $mahasiswa2["jurusan"];
    echo "<br>";
    echo $mahasiswa2["uang_saku"];
    echo "<br>";
    echo $mahasiswa2["hobi"];
?>
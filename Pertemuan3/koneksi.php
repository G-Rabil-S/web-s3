<?php
$host = "localhost";
$db = "assisten";
$user = "root";
$pass = "";

try {
    //FUNGSI KONEKSI//
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //Meminta mesin untuk menampilkan error jika terjadi kesalahan koneksi//
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //Jika koneksi gagal, maka akan menampilkan pesan error dan menghentikan eksekusi program//
    die("Koneksi Ke Database  Gagal: " . $e->getMessage());
}

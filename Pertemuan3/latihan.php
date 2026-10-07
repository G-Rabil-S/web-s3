<?php
//Bagian Logika//

//1.Panggil mesin koneksi yg sudah dibuat//
require "koneksi.php";

//2.Siapkan perintah Query//
$query = "SELECT * FROM anggota";

//3.Suruh pdo untuk eksekusi perintah Query//
$stmt = $pdo->query($query);

//4.Ambil semua datanya dan tampung ke variable data_anggota//
$data_anggota = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($data_anggota);
?>

<!--Bagian Tampilan-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3>Data Anggota</h3>
        <table border="1" class="table table-bordered border-primary">
        <tr>
            <th width="5px">No</th>
            <th width="50px">Nama</th>
            <th width="50px">Jurusan</th>
            <th width="30px">Jenis Kelamin</th>
            <th width="50px">Alamat</th>
        </tr>
        <?php $no = 1;
        foreach ($data_anggota as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jurusan'] ?></td>
                <td><?= $row['JK'] ?></td>
                <td><?= $row['alamat'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tr>
        </table>
    </div>
</body>

</html>
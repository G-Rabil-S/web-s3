<?php
    //Variabel Superglobal//
    // $_GET dan $_POST tipe datanya ARRAY//
    //Variabel $_GET dan $_POST fungsinya untuk menampung data yang di kirimkan melalui URL dan Form//

    //$_GET digunakan untuk searching data melalui URL//
    //$_POST digunakan untuk mengirim data melalui form//

    //Versi Bang Munawir
    if(isset($_GET["nama"]) && isset($_GET["search"])) {
        $nama_user = $_GET["nama"];
        $search = $_GET["search"];

        echo "Halo $nama_user, anda mencari $search <br>";
    }

    echo "============================================================== <br>";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo "<br>";
        echo "Hasil POST: <br>";
        echo $username;
        echo "<br>";
        echo $password;
    }


    //Versi Saya
   // if($_SERVER["REQUEST_METHOD"] == "POST") {
    //    $username = $_POST["username"];
    //   $password = $_POST["password"];
    //    echo "Username : $username <br>";
    //   echo "Password : $password <br>":
        
    //}
    

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET dan POST</title>
    </head>
    <body>
        <h3>FORM SEARCH (GET)</h3>
        <form action="" method="GET">
                Nama: <input type="text" name="nama" >
                Search <input type="text" name="search" > 
                <input type="submit" >
        </form>
    ==============================================================
        <h3>FORM LOGIN (POST)</h3>
        <form action="" method="POST">
            <ul>
                <li>Nama: <input type="text" name="username" ></li>
                <li>Password: <input type="password" name="password" ></li>
                <li><input type="submit" ></li>
                <li><input type="reset" ></li>
            </ul>
        </form>
    </body>
</html>
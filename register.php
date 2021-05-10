<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body> 

<?php
require_once 'app/controller/Auth.php';
$lib = new Auth();

    if (isset($_POST['login'])) {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $telp = $_POST['telp'];

        $cek = $lib->Register($nik, $nama, $username, $password, $telp);
    }

?>

   <div style="margin: auto; width: 50%; border: 3px solid; padding: 20px;">
    <center>
    <h1>Register Masyarakat</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nik</td>
                    <td><input type="text" name="nik" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Telp</td>
                    <td><input type="number" name="telp" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="login"></td>
                    <td><a href="index.php">Kembali</a></td>
                </tr>   
            </table>
        </form>
    </center>
   </div>
</body>
</html>
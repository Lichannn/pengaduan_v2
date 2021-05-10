<h1>Tambah Petugas</h1>
<form action="" method="POST">
    <table>
        <tr>
            <td>Nama Petugas: </td>
            <td><input type="text" name="nama_petugas"></td>
        </tr>
        <tr>
            <td>Username: </td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Telp: </td>
            <td><input type="number" name="telp"></td>
        </tr>
        <tr>
            <td><input type="submit" name="insert"></td>
        </tr>
    </table>
</form>

<?php
require_once '../app/controller/ad-petugas.php';
$lib = new CrudPetugas();

if (isset($_POST['insert'])) {
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $cek = $lib->InsertData($nama_petugas, $username, $password, $telp);
}

?>
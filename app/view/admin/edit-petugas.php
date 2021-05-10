<?php 
require_once '../app/controller/ad-petugas.php';
$lib = new CrudPetugas();
?>
<h1>Edit Petugas</h1>
<form action="" method="POST">
    <?php foreach ($lib->ReadById($_GET['id']) as $d): ?>
        <table>
            <tr>
                <td>Nama Petugas: </td>
                <td><input type="text" name="nama_petugas" value="<?= $d['nama_petugas'] ?>"></td>
            </tr>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" value="<?= $d['username'] ?>"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="text" name="password" value="<?= $d['password'] ?>"></td>
            </tr>
            <tr>
                <td>Telp: </td>
                <td><input type="number" name="telp" value="<?= $d['telp'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="insert"></td>
            </tr>
        </table>
        <?php endforeach; ?>
</form>

<?php

if (isset($_POST['insert'])) {
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $id = $_GET['id'];

    $cek = $lib->UpdateData($id, $nama_petugas, $username, $password, $telp);
}

?>
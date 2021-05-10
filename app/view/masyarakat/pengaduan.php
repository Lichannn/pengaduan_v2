<h1>Buat Pengaduan</h1>
<form action="" method="POST">
    <table>
        <tr>
            <td>Pengaduan</td>
            <td><textarea name="isi_laporan" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="input"></td>
        </tr>
    </table>
</form>
<?php

require_once '../app/controller/ms-pengaduan.php';
$lib = new CrudMasyarakat();

if (isset($_POST['input'])) {
    $nik = $_SESSION['nik'];
    $isi_laporan = $_POST['isi_laporan'];

    $insert = $lib->InsertData($nik, $isi_laporan);
}

?>
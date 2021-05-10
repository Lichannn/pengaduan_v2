<?php
require_once '../app/controller/ad-tanggapan.php';
$lib = new CrudTanggapan();

if (isset($_POST['tanggap'])) {
    $id_pengaduan = $_GET['id'];
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_SESSION['id'];

    $tanggap = $lib->InsertData($id_pengaduan, $tanggapan, $id_petugas);
    
}
?>
<?php 
    foreach ($lib->ReadData($_GET['id']) as $d):
?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Tanggal Pengaduan: </td>
                <td><?= $d['tgl_pengaduan'] ?></td>
            </tr>
            <tr>
                <td>Nik: </td>
                <td><?= $d['nik'] ?></td>
            </tr>
            <tr>
                <td>Isi Pengaduan: </td>
                <td><?= $d['isi_laporan'] ?></td>
            </tr>
            <tr>
                <td>Tanggapan:</td>
                <td><textarea name="tanggapan" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="tanggap"></td>
            </tr>
        </table>
    </form>
<?php endforeach; ?>

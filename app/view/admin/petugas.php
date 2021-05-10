<?php 
require_once '../app/controller/ad-petugas.php';
$lib = new CrudPetugas();
    if (isset($_GET['id'])) {
        $cek = $lib->DeleteData($_GET['id']);
    }
?>
<div style="padding-top: 20px;">
<a href="?page=6">+ Petugas</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Petugas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Telp</th>
            <th>Opsi</th>
        </tr>
        <?php $no =1; foreach ($data = $lib->ReadData() as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama_petugas'] ?></td>
            <td><?= $d['username'] ?></td>
            <td><?= $d['password'] ?></td>
            <td><?= $d['telp'] ?></td>
            <td>
                <a href="?id=<?= $d['id_petugas']; ?>&page=7">Edit |</a>
                <a href="?id=<?= $d['id_petugas']; ?>&page=5">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
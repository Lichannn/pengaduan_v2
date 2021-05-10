<div style="padding-top: 22px;">
    <table border="1">
        <th>Tanggal pengaduan</th>
        <th>Nama</th>
        <th>Nik</th>
        <th>Isi Laporan</th>
        <th>Status</th>
        <th>Opsi</th>
        <?php
        require_once '../app/controller/ad-pengaduan.php';
        $lib = new CrudPengaduan();
            foreach ($lib->ReadData() as $d):
        ?>
            <tr>
                <td><?= $d['tgl_pengaduan']; ?></td>
                <td><?= $d['nama']; ?></td>
                <td><?= $d['nik']; ?></td>
                <td><?= $d['isi_laporan']; ?></td>
                <td><?= $d['status']; ?></td>
                <td><?php if ($d['status'] =='selesai') {
                    echo "sudah di tanggapi";
                }else{
                ?>
                <a href="?id=<?= $d['id_pengaduan'] ?>&page=4">Tanggapi</a>
                <?php } ?></td>
            </tr>
        <?php
            endforeach;
        ?>
    </table>
</div>
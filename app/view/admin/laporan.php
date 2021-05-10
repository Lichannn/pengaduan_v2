<div style="padding-top: 22px;">
    <table border="1" >
        <th>Tanggal pengaduan</th>
        <th>Nama</th>
        <th>Nik</th>
        <th>Isi Laporan</th>
        <th>Status</th>
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
            </tr>
        <?php
            endforeach;
        ?>
    </table>
</div>
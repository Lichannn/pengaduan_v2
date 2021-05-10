<?php
require_once 'db.php';
$lib = new database();

class CrudMasyarakat extends database
{
    public function InsertData($nik, $isi_laporan)
    {
        $query = ("INSERT INTO pengaduan (nik, isi_laporan, status)
        VALUES (:nik, :isi_laporan, 'proses')");
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(":nik", $nik);
        $stmt->bindParam(":isi_laporan", $isi_laporan);
        $stmt->execute();
        echo "<script>alert('Pengaduan Berhasil di kirim');history.back-1;</script>";
    }
}

?>

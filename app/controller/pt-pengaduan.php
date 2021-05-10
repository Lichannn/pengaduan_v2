<?php

require_once 'db.php';
$lib = new database();

class CrudPetugas extends database
{
    public function ReadData()
    {
        $query = ("SELECT id_pengaduan, tgl_pengaduan, masyarakat.nik, masyarakat.nama, isi_laporan, status FROM pengaduan INNER JOIN masyarakat ON pengaduan.nik = masyarakat.nik");
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function InsertData($id_pengaduan, $tanggapan, $id_petugas)
    {
            
        $query = ("INSERT INTO tanggapan (id_pengaduan, tanggapan, id_petugas) 
        VALUES (:id_pengaduan, :tanggapan, :id_petugas)");
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(":id_pengaduan", $id_pengaduan);
        $stmt->bindParam(":tanggapan", $tanggapan);
        $stmt->bindParam(":id_petugas", $id_petugas);
        $stmt->execute();
        $update = $this->connect->query("UPDATE pengaduan SET status = 'selesai' WHERE id_pengaduan = '$id_pengaduan'");
        header('location: ?page=2');
    }
}

?>
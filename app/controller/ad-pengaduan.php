<?php
require_once 'db.php';
$lib = new database();
class CrudPengaduan extends database
{
    public function ReadData()
    {
        $query = ("CALL select_pengaduan()");
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}

?>
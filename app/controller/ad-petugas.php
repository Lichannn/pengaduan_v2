<?php  

    require_once 'db.php';
    $lib = new database();

    class CrudPetugas extends database
    {
        public function ReadData()
        {
           $query = ("CALL select_petugas('petugas')");
           $stmt = $this->connect->prepare($query);

           $stmt->execute();
           $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
           return $data;
        }
        public function InsertData($nama_petugas, $username, $password, $telp)
        {
            $query = ("INSERT INTO petugas 
        (nama_petugas, username, password, telp, level)
        VALUES(:nama_petugas, :username, :password, :telp, 'petugas')");
            $stmt = $this->connect->prepare($query);
            $stmt->bindParam(":nama_petugas", $nama_petugas);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":telp", $telp);
            $stmt->execute();
            header('location: ?page=5');
        }
        public function ReadById($id)
        {
           $query = ("SELECT * FROM petugas WHERE id_petugas = :id");
           $stmt = $this->connect->prepare($query);
           $stmt->bindParam(":id", $id);
           $stmt->execute();
           $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
           return $data;
        }
        public function UpdateData($id, $nama_petugas, $username, $password, $telp)
        {
            $query = ("UPDATE petugas SET 
            nama_petugas = :nama_petugas, username = :username, password = :password, 
            telp = :telp WHERE id_petugas = :id");
            $stmt = $this->connect->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nama_petugas", $nama_petugas);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":telp", $telp);
            $stmt->execute();
            header('location: ?page=5');
        }
        public function DeleteData($id)
        {
            $id = $_GET['id'];
            $query = ("DELETE FROM petugas WHERE id_petugas = :id");
            $stmt = $this->connect->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            header('location: ?page=5');
        }
    }

?>
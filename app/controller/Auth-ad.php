<?php
session_start();
require_once 'db.php';
$lib = new database();
class authAdmin extends database
{
    public function Auth($username, $password)
    {
        $query = ("SELECT * FROM petugas WHERE username = :username AND password = :password");
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        $cekData = $stmt->rowCount();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $cekLevel = $data['level'];
        $id = $data['id_petugas'];

        if ($cekData == 1 && $cekLevel == 'admin') {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header('Location: admin/?page=1');
        }elseif ($cekData == 1 && $cekLevel == 'petugas') {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header('Location: petugas/?page=1');
        }else{
            echo "<script>alert('Upss Username / Password salah').histroy.back-1</script>";
        }
    }
}

?>
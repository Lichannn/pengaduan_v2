<?php
session_start();
require_once 'db.php';
$lib = new database();
class Auth extends database
{
    public function AuthMasyarakat($username, $password)
    {
        $query = ("SELECT * FROM masyarakat WHERE username = :username AND password = :password");
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $nik = $data['nik'];
        $cekData = $stmt->rowCount();

        if ($cekData == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['nik'] = $nik;
            header('Location: masyarakat/?page=1');
        }else{
            echo "<script>alert('Upss Username / Password salah').histroy.back-1</script>";
        }
    }
    public function Register($nik, $nama, $username, $password, $telp)
    {
        $query = ("INSERT INTO masyarakat (nik, nama, username, password, telp)VALUES(:nik, :nama, :username, :password, :telp)");
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(":nik", $nik);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":telp", $telp);
        $stmt->execute();
        header('location: index.php?message=| Berhasil Register');
    }
}

?>
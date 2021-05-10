<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | <?= $_SESSION['username'] ?></title>
</head>
<body>
    
<nav>
    <a href="?page=1">Dashbaord |</a>
    <a href="?page=5">Petugas |</a>
    <a href="?page=2">Pengaduan |</a>
    <a href="?page=3">Laporan |</a>
    <a href="../app/controller/logout.php">Logout</a>
</nav>

<?php
$page =1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case '1':
            include 'dash.php';
            break;
        case '2':
            include 'pengaduan.php';
            break;
        case '3':
            require_once 'laporan.php';
            break;
        case '4':
            require_once 'tanggapan.php';
            break;
        case '5':
            require_once 'petugas.php';
            break;
        case '6':
            require_once 'insert-petugas.php';
            break;
        case '7':
            require_once 'edit-petugas.php';
            break;
        default:
            require_once 'dash.php';
            break;
    }
}

?>
</body>
</html>
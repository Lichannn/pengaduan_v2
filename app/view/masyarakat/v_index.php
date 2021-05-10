<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyarakat | <?= $_SESSION['username'] ?></title>
</head>
<body>
    <nav>
        <a href="?page=1">Dashbaord |</a>
        <a href="?page=2">Pengaduan |</a>
        <a href="../app/controller/logout.php">Logout</a>
    </nav>
    <?php
    
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case '1':
                include 'dash.php';
                break;
            case '2':
                include 'pengaduan.php';
                break;
            
            default:
                include 'dash.php';
                break;
        }
    }
    
    ?>
</body>
</html>
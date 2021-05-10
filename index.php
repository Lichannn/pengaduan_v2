<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body> 

<?php
error_reporting(0);
require_once 'app/controller/Auth.php';
$lib = new Auth();

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cek = $lib->AuthMasyarakat($username, $password);
    }

?>
    <div style="margin: auto; width: 50%; border: 3px solid; padding: 20px;">
        <center>
            <h1>Login Masyarakat</h1>
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="login"></td>
                            <td><a href="register.php">Register </a> <?= $_GET['message']; ?></td>
                        </tr>   
                    </table>
                </form>
        </center>
    </div>
</body>
</html>
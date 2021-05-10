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
require_once 'app/controller/Auth-ad.php';
$lib = new authAdmin();

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cek = $lib->Auth($username, $password);
    }

?>

<h1>Login</h1>
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
            </tr>   
        </table>
    </form>
</body>
</html>
<?php

session_start();
    if (isset($_SESSION['username'])) {
        require_once '../app/view/admin/v_ad-index.php';
    }else{
        header('Location:../login.php');
    }


?>
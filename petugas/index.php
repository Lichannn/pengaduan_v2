<?php
session_start();
if (isset($_SESSION['username'])) {
    require_once '../app/view/petugas/v_index.php';
}else{
    header("location: ../login.php");
}

?>
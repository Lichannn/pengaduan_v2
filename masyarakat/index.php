<?php
session_start();
if (isset($_SESSION['username'])) {
    require_once '../app/view/masyarakat/v_index.php';
}else{
    header("location: ../");
}

?>
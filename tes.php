<form action="" method="POST">
<input type="text" name="password">
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
    $hash = hash("sha1", $_POST['password']);
    echo $hash;
}
?>
<?php
require 'head.php';
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$qq= $_POST['qq'];
$username = $_COOKIE['username'];
//$sql="update user_inf set qq='{$qq}'  where username='{$username}'";

mysqli_query($conn,"UPDATE user_inf SET qq=$qq,email='{$email}',telephone=$telephone
WHERE username='$username'");

header('Location: user_inf.php');

?>
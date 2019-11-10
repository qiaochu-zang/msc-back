<?php

require 'head.php';
$old =$_POST['oldpwd'];
$new1 =$_POST['newpwd1'];
$new2 =$_POST['newpwd2'];
$username=$_COOKIE['username'];
if($_COOKIE['password']!=$old)
 {   echo "<script>alert('旧密码输入有误');parent.location.href='pwd_chenge.php';</script>";

}
else if($new1 != $new2)
{   echo "<script>alert('两次输入不一致');parent.location.href='pwd_chenge.php';</script>";

}
else 
{
$sql="UPDATE user SET password='$new1' WHERE username='$username'";
mysqli_query($conn,$sql);
header("Location:index.php");
}


?>
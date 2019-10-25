<?php
//ini_set("display_errors","On");
//error_reporting(E_ALL);
require("conn.php");
$username=$_POST["username"];
$password=$_POST["password"];
if($username==""||$password=="") echo "<script>alert('用户信息不完整，请点击返回上一页');history.push(-1);</script>";
//$sql="select * from user where username='{$username}';";
$result = mysqli_query($conn,"select * from user where username='{$username}'");
if($result->num_rows > 0){
    echo "<script>alert('该用户名已被注册');history.push(-1);</script>";
}
else {
    
   $sql_insert = "INSERT INTO user (username, password)
   VALUES ('$username', '$password')";
   if($conn->query($sql_insert) === TRUE)
    echo "<script>alert('插入成功,请登录');history.push(-1);</script>";
   else {
    echo "<script>alert('未知的错误');history.push(-1);</script>";
   }
}

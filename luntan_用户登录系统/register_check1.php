<?php
//ini_set("display_errors","On");
//error_reporting(E_ALL);
require("conn.php");
$username=$_POST["username"];
$password=$_POST["password"];
echo "$username"."$password";
mysqli_set_charset($conn,"utf8");
//3、操作数据库
//查询数据
$sql = "select * from user"; //这里login是你要查询的表
$obj = mysqli_query($conn,$sql); //执行查询
$new = mysqli_fetch_all($obj,MYSQLI_ASSOC); //将查询结果翻译成数组
var_dump($new);echo "<br/>"; //输出结果
<?php 
echo "<h>论坛</h>".'<br>';
require 'head.php';
$iden = $_COOKIE['identity'];
echo '<br>';
if($iden ==0)
{
    echo"<a href='login.php'>登录</a>";
    echo "  ";
    echo"<a href='register.php'>注册</a>";  echo "  ";
    echo"<a href='tiezi.php'>以游客身份看帖</a>";
}
else if($iden ==1)
{
    echo"<a href='user_inf.php'>个人信息</a>";  echo "  ";
    echo"<a href='fatie.php'>发帖</a>";  echo "  ";
    echo"<a href='view.php'>看帖</a>";
}
else if($iden ==2)
{
    echo"<a href='user_inf.php'>个人信息</a>";  echo "  ";
    echo"<a href='fatie.php'>发帖</a>";  echo "  ";
    echo"<a href='view.php'>看帖</a>";  echo "  ";
    echo"<a href='op.php'>查看用户个人信息</a>";
}
else echo "???我傻了你来干啥的";


$sql = "CREATE TABLE IF NOT EXISTS user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
identity VARCHAR(30) NOT NULL
)";
 
if ($conn->query($sql) != TRUE) 
    echo "创建数据表错误: " . $conn->error;

        
    $sql1 = "CREATE TABLE IF NOT EXISTS user_inf (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        username VARCHAR(30) ,
        email VARCHAR(30) ,
        telephone VARCHAR(30) ,
        qq VARCHAR(30) 
        )";
        $username=$_COOKIE['username']; 
        if ($conn->query($sql1) != TRUE) 
            echo "创建数据表错误: " . $conn->error;

            if($_COOKIE['identity']>0)
            echo "<br>"."<a href='quit.php'>退出登录</a>";
?>

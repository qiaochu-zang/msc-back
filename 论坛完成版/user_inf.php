<?php
require 'head.php';
$username=$_COOKIE['username'];
$sql="SELECT username,email,telephone,qq FROM user_inf";
    $result=$conn->query($sql);
    $a=0;
    if($result->num_rows > 0)
    {   
        while($row=$result->fetch_assoc())
        {
           if($row["username"] === $username)
            {
                echo "<br>"."用户名".$row["username"];
                echo "<br>"."邮箱".$row["email"];
                echo "<br>"."电话".$row["telephone"];
                echo "<br>"."qq".$row["qq"];
                $a++;
                break;
            }  
        }
        if($a==0){
            $sql_insert="INSERT INTO user_inf (username,email,qq,telephone)
            VALUES ('$username','null','null','null')";
            $result_insert =mysqli_query($conn, $sql_insert);
            header("Location:user_inf.php");
        }


    }
    
    echo "<br>"."<a href='user_inf_change.php'>修改个人信息</a>";
    echo "<br>"."<a href='pwd_change.php'>修改密码</a>";
    echo "<br>"."<a href='index.php'>返回主页面</a>";
    if($_COOKIE['identity']>0)
    echo "<br>"."<a href='quit.php'>退出登录</a>";

?>
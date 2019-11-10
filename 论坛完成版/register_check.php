<?php
$conn=mysqli_connect("localhost","luntan","luntan","luntan");
if(!$conn)
    die ("连接失败".mysqli_error());
    $username=$_POST["username"];        
    $password=$_POST["password"];      
    $sql="SELECT username FROM user WHERE username='{$username}'";
    $result=mysqli_query($conn, $sql);
    if($result->num_rows > 0)
        echo "<script>alert('该用户名已被注册');history.push(-1);</script>";
        else {
            $sql_insert="INSERT INTO user (username,password,identity)
            VALUES ('$username','$password','1')";
            $result_insert =mysqli_query($conn, $sql_insert);
            if($result_insert)
            {
            echo "<script>alert('注册成功');</script>";
            setcookie("username",$username);
            setcookie("identity",'1');
            header("location:index.php");
            }
            else 
            echo "<script>alert('未知的错误');history.push(-1);</script>";
        }




?>
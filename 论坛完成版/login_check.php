<?php
$conn=mysqli_connect("localhost","luntan","luntan","luntan");
if(!$conn)
    die ("连接失败".mysqli_error());

    $username=$_POST["username"];        
    $password=$_POST["password"];     
    if($username==""||$password=="") echo "<script>alert('用户信息不完整，请点击返回上一页');</script>"; 
    $sql="SELECT username,password,identity FROM user";
    $result=$conn->query($sql);
    if($result->num_rows > 0)
    {   
       
        while($row=$result->fetch_assoc())
    {
    if($row["username"] === $username&&$row["password"] === $password)
          {
              echo "登录成功";
              setcookie("username",$username);
              setcookie("identity",$row["identity"]);
              setcookie("password",$password);

              header('Location: index.php');
          }  
          if($row["username"] === $username&&$row["password"] != $password)
          {
            echo "<script> alert('密码错误');parent.location.href='index.php'; </script>"; 
              header('Location: index.php');
          }  
        }
    }
    echo "<script> alert('未查找到该用户');parent.location.href='index.php'; </script>"; 
   // header('Location: login.php');
?>


<?php
//ini_set("display_errors","On");
//error_reporting(E_ALL);
require("conn.php");
$username=$_POST["username"];
$password=$_POST["password"];
if($username==""||$password=="") echo "<script>alert('用户信息不完整，请点击返回上一页');history.push(-1);</script>";
$sql="select username,password from user";
$result = $conn->query($sql);
if($result->num_rows >0)
{
    $jishu = 0;
    while($row=$result->fetch_assoc())
    {
    if($row["username"] === $username&&$row["password"] === $password)
      {
          echo "登录成功";
      $jishu = 1;
      }  
    }
   if($jishu==0) echo "<script>alert('密码错误');history.push(-1);</script>";
}
else echo "<script>alert('未查到到该用户信息');history.push(-1);</script>";
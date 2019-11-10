<?php
require 'head.php';
echo "<br>";
$sql = "SELECT * FROM user_inf";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
    echo "用户名：".$row["username"].'<br>';
    echo "邮箱: ".$row["email"].'<br>';
    echo "电话: ".$row["telephone"].'<br>';
    echo "qq: ".$row["qq"].'<br>'.'<br>';
}
?>
ban用户：
<form method="post"action="op.php">
    <input type="text" name="username">
    <input type="submit" name="submit" value="ban">
</form>
<?php echo "<a href='index.php'>返回主页面</a>";
$username=$_POST['username'];
mysqli_query($conn,"delete from user where username = '$username'");
mysqli_query($conn,"delete from user_inf where username = '$username'");
if($username !="")header('Location: user_inf.php');


?>



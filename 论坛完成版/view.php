<?php
session_start();
require("head.php");
echo "<br>";
if(!$_COOKIE["username"])
echo "欢迎回来，用户".$COOKIE['username'];
$sql = "SELECT * FROM text";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
    echo "标题：".$row["title"].'<br>';
    echo "作者: ".$row["author"].'<br>';
    echo "正文: ".$row["text"].'<br>'.'<br>'.'<br>';
}
$iden=$_COOKIE['identity'];
if($iden==2)?>
删除帖子：<form method="post"action="view.php">
    <input type="text" name="title">
    <input type="submit" name="submit" value="删帖">
</form>
<?php echo "<a href='index.php'>返回主页面</a>";
$title=$_POST['title'];
mysqli_query($conn,"delete from text where title = '$title'");
if($title !="")header('Location: view.php');

?>
 

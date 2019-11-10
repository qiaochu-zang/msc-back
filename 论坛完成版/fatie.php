<?php
require 'head.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>发帖</title>
</head>
<br>
<h>编辑帖子</h>
<p>标题</p>
<form action="fatie_check.php" method="post">
<input height="20" type="text" name="title" >
<p>内容</p>
<textarea style="width:300px;height:100px;" name ="text"></textarea>
<input type="submit" name ="submit" value="光速发帖" >
</html>

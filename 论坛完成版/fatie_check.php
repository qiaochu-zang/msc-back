<?php
require("head.php");
$title =$_POST["title"];
$text =$_POST["text"];
$author =$_COOKIE['username'];
$sql_insert = "INSERT INTO text (title,text,author)
VALUES ('$title', '$text','$author')";
if($conn->query($sql_insert) === TRUE)
 echo "<script>alert('发帖成功');history.push(-1);</script>";
else 
 echo "<script>alert('未知的错误');history.push(-1);</script>";
 header('Location: index.php');

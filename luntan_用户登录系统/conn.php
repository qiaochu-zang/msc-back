


<?php 
$conn=mysqli_connect("localhost","luntan","luntan","luntan"); 
// 检查连接 
if (!$conn) 
{ 
    die("连接错误: " . mysqli_connect_error()); 
} 
else {
    {echo "成功连接mysql";}
}

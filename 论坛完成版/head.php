<?php
$conn=mysqli_connect("localhost","luntan","luntan","luntan");
if(!$conn)
    die ("连接失败".mysqli_error());
    if(!$_COOKIE['identity'])
        $_COOKIE['identity'] =0;
    if($_COOKIE['identity']==0)
        echo "您的身份是游客";
    else if($_COOKIE['identity']==1)
        echo "欢迎回来，用户".$_COOKIE['username'];
    else if($_COOKIE['identity']==2)
        echo "管理员".$_COOKIE['username'];
    else



?>
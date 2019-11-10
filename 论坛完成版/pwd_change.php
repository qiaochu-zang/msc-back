<?php
require 'head.php';

?>
<!DOCTYPE html>
<HTML>
<head>
<meta charset="utf-8">
<title>修改密码</title>
</head>
<body>
    <form action="change2_check.php" method="POST">

    输入旧密码<input type="password" name="oldpwd"><br>
        输入新密码<input type="password" name="newpwd1"><br>
        重复新密码<input type="password" name="newpwd2"><br>
        <input type="submit" name="submit" value="提交">



    </form>
</body>
</HTML>
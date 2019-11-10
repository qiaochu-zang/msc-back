<?php
require 'head.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
<body>
    <form action="change_check.php" method="POST">
修改邮箱：<input type="text" name="email"><br>
修改qq号：<input type="text" name="qq"><br>
修改电话：<input type="text" name="telephone"><br>
<input type="submit" name="submit" value="提交">
    </form>

</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<table border="1">
    <tr>
        <td>ID</td>
        <td>用户</td>
        <td>注册时间</td>
    </tr>
    <?php foreach($data as $k=>$v){ ?>
    <tr>
        <td><?php echo $v['uid'] ?></td>
        <td><?php echo $v['uname'] ?></td>
        <td><?php echo $v['addtime'] ?></td>
    </tr>
    <?php  } ?>
</table>

</body>
</html>
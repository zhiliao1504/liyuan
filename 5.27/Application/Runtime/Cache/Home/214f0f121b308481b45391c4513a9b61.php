<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="<?php echo U('index/loaninfolist');?>" method="get">
    <center>
    <table>
        <script language="javascript" type="text/javascript" src="/5.27/Public/carlender/WdatePicker.js"></script>
        <input class="Wdate" name="day" type="text" onClick="WdatePicker()">
        <input type="submit" value="搜索" />
        <tr>
            <td>编号</td>
            <td>名称</td>
            <td>标的金额</td>
            <td>类型</td>
            <td>期限</td>
            <td>时间</td>
        </tr>
        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
            <td><?php echo ($vo["bid"]); ?></td>
            <td><?php echo ($vo["b_title"]); ?></td>
            <td><?php echo ($vo["b_money"]); ?></td>
            <td><?php echo ($vo["b_type"]); ?></td>
            <td><?php echo ($vo["b_mumber"]); ?></td>
            <td><?php echo ($vo["b_time"]); ?></td>
        </tr><?php endforeach; endif; ?>
    </table>
    </center>
</form>
</body>
</html>
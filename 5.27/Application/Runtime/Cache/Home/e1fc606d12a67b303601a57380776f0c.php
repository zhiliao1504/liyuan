<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="<?php echo U('index/customerList');?>" method="post">
    <table>
        <tr>
            <script language="javascript" type="text/javascript" src="/5.27/Public/carlender/WdatePicker.js"></script>
            <input class="Wdate" name="time" type="text" onClick="WdatePicker()">

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="提交"/></td>
        </tr>
    </table>
</form>

</body>
</html>
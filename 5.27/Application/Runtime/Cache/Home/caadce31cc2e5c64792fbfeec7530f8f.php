<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="<?php echo U('index/addvip');?>" method="post">
<center>
    <h1>注册成功,您就是VIP会员了 ！</h1>
    <table>
        <tr>
            <td>
                名称：
            </td>
            <td>
                <input type="text" name="username"/>
            </td>
        </tr>
        <tr>
            <td>
                密码：
            </td>
            <td>
                <input type="password" name="pwd"/>
            </td>
        </tr>
        <tr>
            <td>
                手机号：
            </td>
            <td>
                <input type="text" name="tel"/>
            </td>
        </tr>
        <tr>
            <td>
                财富经理邀请码：
            </td>
            <td>
                <input type="text" name="code"/>
            </td>
        </tr>
        <tr>
            <td>
                选择注册方式：
                <select name="cate">
                    <option value="互联网注册">互联网注册</option>
                    <option value="业务系统注册">业务系统注册</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="注册"/>
            </td>
        </tr>
    </table>
</center>
</form>
</body>
</html>
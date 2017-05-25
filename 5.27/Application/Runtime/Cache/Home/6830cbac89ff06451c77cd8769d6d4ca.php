<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        button{
            display: inline-block;
            margin: 50px;
            background-color: cornflowerblue;
            color: #fafafa;
            width: 100px;
            height: 50px;
            border: 1px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div style="width: 800px;height: 900px;text-align: center;line-height: 100px">
    <h1 style="color: red">这是首页</h1>
    <button onclick="reg()">注册</button>
    <button onclick="login()">登录</button>
</div>
</body>
<script>
    function reg(){
        location.href="<?php echo U('User/add');?>"
    }
    function login(){
        location.href="<?php echo U('User/dl');?>"
    }
</script>
</html>
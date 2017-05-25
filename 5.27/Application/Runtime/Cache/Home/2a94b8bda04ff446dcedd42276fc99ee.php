<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        td{
            height: 50px;
            line-height: 50px;
        }
    </style>
</head>
<body>
<div style="width: 1100px;height: 900px;text-align: center;background-color: #000000" id="box">
    <div>
        <h1 style="color: red">相册</h1>
        <a href="<?php echo U('Index/add');?>">添加分类</a>
        <a href="<?php echo U('Tu/add');?>">上传图片</a>
    </div>
    <hr/>
    <?php if(is_array($re)): foreach($re as $key=>$v): ?><div style="width: 240px;float: left">
            <img src="/12.17/<?php echo ($v["fm"]); ?>" style="height: 200px" onclick="tz(<?php echo ($v["f_id"]); ?>)"/><br>
            <span style="color: yellow">相册分类：</span><font style="color: yellow"><?php echo ($v["names"]); ?></font><br>
            <span style="color: yellow">相册描述：</span><font style="color: yellow"><?php echo ($v["ms"]); ?></font><br>
            <a href="#" onclick="del(<?php echo ($v["f_id"]); ?>)"><font style="color: red">X</font></a>
        </div><?php endforeach; endif; ?>
</div>
</body>
<script>
    function del(id){
        var ajax=new XMLHttpRequest();
        ajax.open('get','/12.17/index.php/Home/Index/del?id='+id)
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                if(ajax.responseText==1){
                    location.href='./index'
                }
            }
        }
    }
    function tz(id){
        location.href="/12.17/index.php/Home/Tu/index?id="+id
    }
</script>
</html>
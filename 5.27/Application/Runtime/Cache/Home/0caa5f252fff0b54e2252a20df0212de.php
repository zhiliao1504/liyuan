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
        a{
            text-decoration: none;
            color: yellow;
        }
    </style>
</head>
<body>
<div style="width: 1100px;height: 900px;text-align: center;background-color: #000000" id="box">
    <div>
        <?php if(is_array($res)): foreach($res as $key=>$v): ?><h1 style="color: red"><?php echo ($v["names"]); ?>图库</h1>
        <a href="<?php echo U('Tu/add');?>">上传图片</a><?php endforeach; endif; ?>

    </div>
    <hr/>
    <?php if(is_array($re)): foreach($re as $key=>$v): ?><div style="width: 240px;float: left">
            <img src="/12.17/<?php echo ($v["file"]); ?>" style="height: 200px" onclick="tz(<?php echo ($v["f_id"]); ?>)"/><br>
            <a href="#" onclick="del(<?php echo ($v["id"]); ?>)">删除</a>/<a href="#" onclick="upd(<?php echo ($v["id"]); ?>)">修改</a>
        </div><?php endforeach; endif; ?>
</div>
</body>
<script>
    function del(id){
        var ajax=new XMLHttpRequest();
        ajax.open('get','/12.17/index.php/Home/Tu/del?id='+id)
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                if(ajax.responseText==1){
                    location.href='/12.17/index.php/Home/Index'
                }
            }
        }
    }
    function upd(id){
        location.href="/12.17/index.php/Home/Tu/upd?id="+id
    }
    function tz(id){
        location.href="/12.17/index.php/Home/Tu/listO?id="+id
    }
</script>
</html>
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
<div style="width: 1100px;height: 900px;color:yellow;text-align: center;background-color: #000000"
     id="box">
    <div>
        <h1 style="color: red">分类添加</h1>
        <a href="<?php echo U('Index/index');?>">返回</a>
    </div>
    <hr/>
    <form action="<?php echo U('Index/insert');?>" method="post" enctype="multipart/form-data" onsubmit="return check_all()">
        <table>
            <tr>
                <td>分类名称：</td>
                <td><input type="text" name="names" onblur="check_names(this.value)"/></td>
                <td><span id="ts_name"></span></td>
            </tr>
            <tr>
                <td>封面：</td>
                <td><input type="file" name="fm"/></td>
            </tr>
            <tr>
                <td>分类描述：</td>
                <td><textarea name="ms"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="添加"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
<script>
    function check_names(str){
        var ts_name=document.getElementById('ts_name')
        var ajax=new XMLHttpRequest();
        ajax.open('get','/12.17/index.php/Home/Index/listO?b='+str);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                if(ajax.responseText==1){
                    ts_name.innerHTML="<font style='color: green'>ok</font>"
                    return true;
                }else{
                    ts_name.innerHTML="<font style='color: red'>no</font>"
                    return false;
                }
            }
        }
    }
    function check_all(){
        if(check_names(names.value)==true){
            return true
        }else{
            return false
        }
    }
</script>
</html>
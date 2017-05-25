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
<div style="width: 800px;height: 900px;text-align: center;" id="box">
    <div><h1 style="color: red">注册</h1></div>

    <hr/>
    <form action="/12.17/index.php/Home/User/insert" method="post" style="padding-left: 200px"
          onsubmit="return check_all()">
        <table>
            <tr>
                <td>用户名:</td>
                <td><input type="text" name="uname" onblur="check_uname(this.value)"/></td>
                <td><span id="ts_uname"></span></td>
            </tr>
            <tr>
                <td>密码:</td>
                <td><input type="password" name="pwd1" id="pwd1"/></td>
                <td></td>
            </tr>
            <tr>
                <td>确认密码:</td>
                <td><input type="password" name="pwd" onblur="check_pwd(this.value)"/></td>
                <td><span id="ts_pwd"></span></td>
            </tr>
            <tr>
                <td>验证码:</td>
                <td>
                    <img src="<?php echo U('User/v');?>" onclick="v(this)"/><br>
                    <input type="text" name="yz"/>
                </td>
                <td><span id="ts_yz"></span></td>
            </tr>
            <tr>
                <td rowspan="3">
                    <input type="submit" value="提交"/>
                </td>
            </tr>
        </table>
    </form>
</div>
<script>
    function check_uname(str){
        var ts_uname=document.getElementById('ts_uname')
        var ajax=new XMLHttpRequest();
        ajax.open('get','/12.17/index.php/Home/User/listO?uname='+str);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                if(ajax.responseText==1){
                    ts_uname.innerHTML="<font style='color: green'>ok</font>"
                    return true;
                }else{
                    ts_uname.innerHTML="<font style='color: red'>no</font>"
                    return false;
                }
            }
        }
    }
    function check_pwd(str){
        var ts_pwd=document.getElementById('ts_pwd')
        var pwd1=document.getElementById('pwd1').value
        if(str==pwd1){
            ts_pwd.innerHTML="<font style='color: green'>ok</font>"
            return true;
        }else{
            ts_pwd.innerHTML="<font style='color: red'>no</font>"
            return false;
        }
    }
    function v(str) {
        str.src = "<?php echo U('User/v');?>?" + Math.random(9999)
    }
    function check_all(){
        if(check_pwd(pwd.value)&&check_uname(uname.value)){
            return true
        }else{
            return false
        }
    }

</script>
</body>
</html>
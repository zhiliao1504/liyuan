<div class="main-wrap">
    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="?r=member/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="?r=member/design">作者管理</a><span class="crumb-step">&gt;</span><span>新增作者</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="?r=member/member_add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <table class="insert-tab" width="100%">
                    <tbody><tr>
                        <th width="120"><i class="require-red">*</i>真实姓名：</th>
                        <td>
                            <input class="common-text required" id="write_name" name="write_name" size="50" value="" type="text"><span class="write_name"></span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>笔名：</th>
                        <td>
                            <input class="common-text required" id="pen_name" name="pen_name" size="50" value="" type="text"><span class="pen_name"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>密码：</th>
                        <td><input class="common-text" name="pwd" size="50"  type="password" id="pwd"><span class="pwd"></span></td>
                    </tr>
                    <tr>
                        <th>确认密码：</th>
                        <td><input class="common-text" name="author" size="50"  type="password" id="upwd"><span class="upwd"></span></td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>照片：</th>
                        <td><input name="img" id="img" type="file"><span class="img"></span></td>
                    </tr>
                    <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
                    <tr>
                        <th>性别：</th>
                        <td>
                            <input type="radio" name="sex" id="" value="男" checked>&nbsp;&nbsp;男&nbsp;<input type="radio" name="sex" id="" value="女">&nbsp;&nbsp;女
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>QQ：</th>
                        <td>
                            <input class="common-text required" id="qq" name="qq" size="50" value="" type="text"><span class="qq"></span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>作家座右铭：</th>
                        <td>
                            <input class="common-text required" id="motto" name="motto" size="50" value="" type="text"><span class="qq"></span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>住址：</th>
                        <td>
                            <input class="common-text required" id="address" name="address" size="50" value="" type="text"><span class="address"></span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>身份证：</th>
                        <td>
                            <input class="common-text required" id="id_card" name="id_card" size="50" value="" type="text"><span class="id_card"></span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>级别：</th>
                        <td>
                            <input class="common-text required" id="level" name="level" size="50" value="1" type="text"><span class="level"></span>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                            <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                        </td>
                    </tr>
                    </tbody></table>
            </form>
        </div>
    </div>

</div>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    //验证真实姓名
    $('#write_name').blur(function () {
        write_name();
    })
    //验证笔名
    $('#pen_name').blur(function () {
        pen_name();
    })
    //验证密码
    $('#pwd').blur(function () {
        pwd();
    })
    //验证确认密码
    $('#upwd').blur(function () {
        upwd();
    })
    //验证身份证
    $('#id_card').blur(function () {
        id_card();
    })
    //验证身份证
    function id_card() {
        var regular=/^[\d,w-z]{18}$/
        var id_card=$('#id_card').val();
        if(id_card==''){
            $('#id_card').css('border-color','red');
            $('.id_card').html('<span style="color: red">&nbsp;&nbsp;！不能为空</span>');
            return false;
        }else if(!regular.test(id_card)){
            $('#id_card').css('border-color','red');
            $('.id_card').html('<span style="color: red">&nbsp;&nbsp;请填写正确的身份证号</span>');
            return false;
        }else{
            $.ajax({
                type: 'get',
                url: '?r=ajax/id_card',
                data: {id_card: id_card},
                success: function (msg) {
                    if (msg == 1) {
                        $('#id_card').css('border-color', 'red');
                        $('.id_card').html('<span style="color: red">&nbsp;&nbsp;该身份证号已被注册，请重新输入</span>');
                        return false;
                    } else {
                        $('#id_card').css('border-color', '#ccc');
                        $('.id_card').html('<span style="color: green">&nbsp;&nbsp;√</span>');
                        return true;
                    }
                }
            })
        }
    }
    //验证确认密码
    function upwd() {
        var pwd = $('#pwd').val();
        var upwd = $('#upwd').val();
        if(upwd==''){
            $('#upwd').css('border-color','red');
            $('.upwd').html('<span style="color: red">&nbsp;&nbsp;！不能为空</span>');
            return false;
        }else if(upwd!=pwd){
            $('#upwd').css('border-color','red');
            $('.upwd').html('<span style="color: red">&nbsp;&nbsp;密码输入不一致，请重新输入</span>');
            return false;
        }else{
            $('#upwd').css('border-color', '#ccc');
            $('.upwd').html('<span style="color: green">&nbsp;&nbsp;√</span>');
            return true;
        }
    }
    // 验证密码
    function pwd() {
        var regular=/^[\w]{6,18}$/
        var pwd=$('#pwd').val();
        if(pwd==''){
            $('#pwd').css('border-color','red');
            $('.pwd').html('<span style="color: red">&nbsp;&nbsp;！不能为空</span>');
            return false;
        }else if(!regular.test(pwd)){
            $('#pwd').css('border-color','red');
            $('.pwd').html('<span style="color: red">&nbsp;&nbsp;密码长度必须在六到十八位之间</span>');
            return false;
        }else{
            $('#pwd').css('border-color', '#ccc');
            $('.pwd').html('<span style="color: green">&nbsp;&nbsp;√</span>');
            return true;
        }
    }
    //验证笔名
    function pen_name() {
        var regular=/^[\w,\u4e00-\u9fa5]{2,9}$/
        var pen_name=$('#pen_name').val();
        if(pen_name==''){
            $('#pen_name').css('border-color','red');
            $('.pen_name').html('<span style="color: red">&nbsp;&nbsp;！不能为空</span>');
            return false;
        }else if(!regular.test(pen_name)){
            $('#pen_name').css('border-color','red');
            $('.pen_name').html('<span style="color: red">&nbsp;&nbsp;请填写正确的笔名，支持中文</span>');
            return false;
        }else{
            $.ajax({
                type: 'get',
                url: '?r=ajax/pen_name',
                data: {pen_name: pen_name},
                success: function (msg) {
                    if (msg == 1) {
                        $('#pen_name').css('border-color', 'red');
                        $('.pen_name').html('<span style="color: red">&nbsp;&nbsp;该笔名已被注册，请重新选择</span>');
                        return false;
                    } else {
                        $('#pen_name').css('border-color', '#ccc');
                        $('.pen_name').html('<span style="color: green">&nbsp;&nbsp;√</span>');
                        return true;
                    }
                }
            })
        }
    }
    //ajax验证作者真实姓名
    function write_name() {
        var uname = /^[\u4e00-\u9fa5]{2,10}$/;
        var name = $('#write_name').val();
        if(name==''){
         $('#write_name').css('border-color','red');
         $('.write_name').html('<span style="color: red">&nbsp;&nbsp;！不能为空</span>');
         return false;
         }else if(!uname.test(name)){
         $('#write_name').css('border-color','red');
         $('.write_name').html('<span style="color: red">&nbsp;&nbsp;请填写正确的姓名，仅支持中文</span>');
         return false;
         }else{
            $.ajax({
                type: 'get',
                url: '?r=ajax/write_name',
                data: {name: name},
                success: function (msg) {
                    if (msg == 1) {
                        $('#write_name').css('border-color', 'red');
                        $('.write_name').html('<span style="color: red">&nbsp;&nbsp;该作家已注册，不可重复注册</span>');
                        return false;
                    } else {
                        $('#write_name').css('border-color', '#ccc');
                        $('.write_name').html('<span style="color: green">&nbsp;&nbsp;√</span>');
                        return true;
                    }
                }
            })
        }

    }
</script>
<div class="main-wrap">
    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="?r=member/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="?r=member/write">作者管理</a><span class="crumb-step">&gt;</span><span>修改密码</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="?r=member/update_pwd" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <table class="insert-tab" width="100%">
                    <tbody>
                    <tr>
                        <th>原始密码：</th>
                        <td><input class="common-text" size="50"  type="password" id="pas" placeholder="请输入正在使用的密码"><span class="pas"></span></td>
                        <input type="hidden" value="<?= $id?>" id="id" name="id">
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
                        <input type="hidden" name="_csrf" id="_csrf" value="<?= Yii::$app->request->csrfToken?>">
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
    $('#myform').submit(function () {
        if( pwd() && upwd()){
            return true;
        }else{
            return false;
        }
    })
    //验证密码
    $('#pwd').blur(function () {
        pwd();
    })
    //验证确认密码
    $('#upwd').blur(function () {
        upwd();
    })
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
    //ajax验证作者真实姓名
    $('#pas').blur(function () {
        //alert(1)
        pas();
    })
    //ajax验证作者真实姓名
    function pas() {
        var pwd=$('#pas').val();
        var id=$('#id').val();
            $.ajax({
                type: 'get',
                url: '?r=ajax/write_pwd',
                data: {pwd: pwd,id:id},
                success: function (msg) {
                    if (msg == 0) {
                        $('#pas').css('border-color', 'red');
                        $('.pas').html('<span style="color: red">&nbsp;&nbsp;密码不正确</span>');
                        return false;
                    } else {
                        $('#pas').css('border-color', '#ccc');
                        $('.pas').html('<span style="color: green">&nbsp;&nbsp;√</span>');
                        return true;
                    }
                }
            })
        }

</script>
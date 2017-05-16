<div class="container clearfix">
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="?r=member/u_list">会员管理</a><span class="crumb-step">&gt;</span><span>新增会员</span></div>
        </div>
        <div class="search-wrap">

        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?r=member/u_add" method="post" id="checkAll" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>用户名：</th>
                            <td>
                                <input class="common-text required" id="name" name="name" size="50" value="" type="text">
                                <span id="ts_name"></span>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>密码：</th>
                            <td>
                                <input class="common-text required" id="pwd" name="pwd" size="50" value="" type="password">
                                <span id="ts_pwd"></span>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>真实姓名：</th>
                            <td>
                                <input class="common-text required" id="username" name="username" size="50" value="" type="text">
                                <span id="ts_username"></span>
                            </td>
                        </tr>
                        <!--                       <tr>
                                                  <th><i class="require-red">*</i>缩略图：</th>
                                                  <td><input name="smallimg" id="" type="file"><input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/></td>
                                              </tr> -->

                        <tr>
                            <th><i class="require-red">*</i>身份证号：</th>
                            <td>
                                <input class="common-text required" id="rank" name="rank" size="50" value="" type="text">
                                <span id="ts_rank"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>电话：</th>
                            <td>
                                <input class="common-text required" id="tel" name="tel" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>邮箱：</th>
                            <td>
                                <input class="common-text required" id="email" name="email" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>地址：</th>
                            <td>
                                <input class="common-text required" id="address" name="address" size="50" value="" type="text">
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
    <!--/main-->
</div>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    $('#checkAll').submit(function(){
        if(name()&&pwd()&&username()&&rank()){
            return true
        }else{
            return false
        }
    })
    $('#name').blur(function(){
        name()
    })
    $('#pwd').blur(function(){
        pwd()
    })
    $('#username').blur(function(){
        username()
    })
    $('#rank').blur(function(){
        rank()
    })
    function name(){
        var reg=/^\D{1}\w{3,}$/;
        var name=$("#name").val();
        if(reg.test(name)){
            $("#name").css('border-color','#ccc')
            $("#ts_name").html('<span style="color: green;margin-left: 5px">√</span>')
            return true
        }else if(name==""){
            $("#name").css('border-color','red')
            $("#ts_name").html('<span style="color: red;margin-left: 5px">不能为空</span>')
            return false
        }else{
            $("#name").css('border-color','red')
            $("#ts_name").html('<span style="color: red;margin-left: 5px">字母数字下划线组成第一位不能是数字</span>')
            return false
        }
    }
    function pwd(){
        var reg=/^\d{6,}$/;
        var pwd=$("#pwd").val();
        if(reg.test(pwd)){
            $("#pwd").css('border-color','#ccc')
            $("#ts_pwd").html('<span style="color: green;margin-left: 5px">√</span>')
            return true
        }else if(pwd==""){
            $("#pwd").css('border-color','red')
            $("#ts_pwd").html('<span style="color: red;margin-left: 5px">不能为空</span>')
            return false
        }else{
            $("#pwd").css('border-color','red')
            $("#ts_pwd").html('<span style="color: red;margin-left: 5px">6位以上</span>')
            return false
        }
    }
    function username(){
        var reg=/^[\u4e00-\u9fa5]{2,}$/;
        var username=$("#username").val();
        if(reg.test(username)){
            $("#username").css('border-color','#ccc')
            $("#ts_username").html('<span style="color: green;margin-left: 5px">√</span>')
            return true
        }else if(username==""){
            $("#username").css('border-color','red')
            $("#ts_username").html('<span style="color: red;margin-left: 5px">不能为空</span>')
            return false
        }else{
            $("#username").css('border-color','red')
            $("#ts_username").html('<span style="color: red;margin-left: 5px">两位中文以上</span>')
            return false
        }
    }
    function rank(){
        var reg=/(^[0-9]{18}$)|(^[0-9]{17}[x]$)/;
        var rank=$("#rank").val();
        if(reg.test(rank)){
            $("#rank").css('border-color','#ccc')
            $("#ts_rank").html('<span style="color: green;margin-left: 5px">√</span>')
            return true
        }else if(rank==""){
            $("#rank").css('border-color','red')
            $("#ts_rank").html('<span style="color: red;margin-left: 5px">不能为空</span>')
            return false
        }else{
            $("#rank").css('border-color','red')
            $("#ts_rank").html('<span style="color: red;margin-left: 5px">18位或者17位</span>')
            return false
        }
    }


</script>

<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="?r=member/rooter">管理员</a><span class="crumb-step">&gt;</span><span>修改管理员</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="checkAll" method="post" action="?r=member/r_upd">
                <div class="result-content">
                    <input type="hidden" name="id" value="<?= $re['id']?>"/>
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>名称</th>
                            <td><?= $re['name']?></td>
                        </tr>
                        <tr>
                            <th>密码</th>
                            <td>
                                <input class="common-text required" id="pwd" name="pwd" size="50" value="<?= $re['pwd']?>" type="password">
                                <span id="ts_pwd"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>真实姓名</th>
                            <td><?= $re['username']?></td>
                        </tr>
                        <tr>
                            <th>电话</th>
                            <td>
                                <input class="common-text required" id="tel" name="tel" size="50" value="<?= $re['tel']?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>邮箱</th>
                            <td>
                                <input class="common-text required" id="email" name="email" size="50" value="<?= $re['email']?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>地址</th>
                            <td>
                                <input class="common-text required" id="address" name="address" size="50" value="<?= $re['address']?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>身份证号</th>
                            <td><?= $re['rank']?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    $('#checkAll').submit(function(){
        if(pwd()){
            return true
        }else{
            return false
        }
    })
    $('#pwd').blur(function(){
        pwd()
    })
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
</script>
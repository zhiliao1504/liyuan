<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="description" content="小说阅读,精彩小说尽在起点中文网. 起点中文网提供玄幻小说,武侠小说,原创小说,网游小说,都市小说,言情小说,青春小说,历史小说,军事小说,网游小说,科幻小说,恐怖小说,首发小说,最新章节免费">
    <meta name="keywords" content="小说,小说网,玄幻小说,武侠小说,都市小说,历史小说,网络小说,言情小说,青春小说,原创网络文学">
    <meta name="robots" content="all">
    <meta name="googlebot" content="all">
    <meta name="baiduspider" content="all">
    <meta http-equiv="mobile-agent" content="format=wml; url=http://m.qidian.com">
    <meta http-equiv="mobile-agent" content="format=xhtml; url=http://m.qidian.com">
    <meta http-equiv="mobile-agent" content="format=html5; url=http://h5.qidian.com/bookstore.html">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>账号注册_起点中文网_阅文集团旗下网站</title>
    <link rel="stylesheet" type="text/css" href="css/resgin/pact.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://qidian.gtimg.com/qd/favicon/qd_icon.0.2.ico">
    <link rel="Bookmark" type="image/x-icon" href="https://qidian.gtimg.com/qd/favicon/qd_icon.0.2.ico"></head>
<body>
<div class="wrap">
    <!-- start 头部 -->
    <div class="header reg-header qidian">
        <div class="box-center">
            <div class="logo cf"><a href=""><img src="images/12045.png" alt=""/></a><em></em><span class="lang">用户注册</span></div>
        </div>
    </div>
    <!-- end 头部 -->
    <!-- start 整体居中 -->
    <div class="box-center">
        <!-- start 注册模块 -->
        <div class="reg-wrap">
            <!-- start 注册进度 -->
            <div class="reg-step">
                <!-- 步进到哪一步，就给当前span上class：act -->
                <span class="lang act"><i>1</i>填写注册信息</span>
            </div>
            <div class="reg-form-wrap">
                <form action="?r=resgin/newresgin" method="post" name="resgin">
                    <div class="reg-form-list form-list">
                        <dl>
                            <dd class="top" id="phone"><em>名字</em>
                                <input class="mid" placeholder="输入名字" id="username" name="username"  type="text">
                            </dd>
                            <dd class="top" id="phone"><em>邮箱</em>

                                <input class="mid" placeholder="输入邮箱" id="email" name="email"  type="text">
                            </dd>
                            <dd id="phonepwd"><em>密码</em><input id="txtphonepwd" placeholder="6-18位大小写字母、符号或数字" type="password" name="pwd">
                                <div class="password-tip" style="display:none">
                                    <span><cite></cite></span>
                                    <p id="pwdrule1">长度为6-18个字符</p>
                                    <p id="pwdrule2">不能是9位以下的纯数字</p>
                                    <p id="pwdrule3">不能包含空格</p>
                                </div>
                                <div class="password-strong" style="display:none">
                                    <!-- 以下3个 不会重复出现，目前3个一起出现造成的换行问题请无视 -->
                                    <p style="display:none"><span class="level-1"><b></b></span>弱</p>
                                    <p style="display:none"><span class="level-2"><b></b></span>中</p>
                                    <p style="display:none"><span class="level-3"><b></b></span>强</p>
                                </div>
                            </dd>
                            <dd id="password2"><em>确认密码</em><input id="txtphonepwd2" placeholder="再次输入密码" type="password" name="pwdss" ></dd>
                        </dl>
                        <div class="deal">
                            <input id="deal" name="checkbox" checked="checked" type="checkbox">
                            <label for="deal" class="ui-checkbox"></label><label for="deal">我已阅读并同意</label><a href="https://passport.yuewen.com/pact.html?mobile=0" target="_blank">《用户服务协议》</a>
                        </div>
                        <input type="submit" class="red-btn go-reg sub" value="立即注册"/>

                    </div>
                </form>
            </div>
            <!-- end 注册进度 -->
        </div>
        <!-- end 注册模块 -->
    </div>
    <!-- end 整体居中 -->
    <script src="js/resgin/jquery-1.js"></script>
    <script src="js/resgin/Checkbox.js"></script>
    <script src="js/resgin/jquery.js"></script>
    <script src="js/resgin/yuewenauth.js"></script>
    <script src="js/resgin/phoneAreaSortNew.js"></script>
    <script src="js/resgin/register_v1.js"></script>
    <script src="js/resgin/Select.js"></script>
    <script>
        var QRegister = new QRegister({"appId":10,"areaId":1,"auto":1,"autoTime":30,"source":"","version":"1","format":"jsonp","method":"","ticket":"1","target":"iframe","backUrl":"http:\/\/www.qidian.com","tab":"","apiUrl":"https:\/\/ptlogin.qidian.com","queryString":"appid=10&areaid=1&target=iframe&ticket=1&auto=1&autotime=30&returnUrl=http%3A%2F%2Fwww.qidian.com","type":1,"from":"qidian","isNeedShowYanbaPop":false,"loginUrl":"login.html?appid=10&areaid=1&target=iframe&ticket=1&auto=1&autotime=30&returnUrl=http%3A%2F%2Fwww.qidian.com"});
        QRegister.force = 1;
        QRegister.showCaptcha();

    </script>

<script src="js/resgin/report.js"></script>
<script src="js/resgin/stat.js"></script>
<script>
    $(function () {
        Stat.init();
    });
</script>

</body></html>


<script>

    $(function(){

        //全局变量
        var check={
            "username":false,
            "email":false,
            "pwd":false,
            "pwdss":false

        };

        //验证名字
        $("input[name='username']").blur(function(){


            var obj=$(this);
            obj.next().remove();
            var username=obj.val();
            if(username==""){
                obj.css("border-color","red");
                obj.after('<span><font color="red" style="line-height: 42px">名字不能为空!</font></span>');
                check.username=false;
                return false;
            }else{
                $.ajax({
                    type:"post",
                    url:"?r=resgin/resgin_user",
                    data:{
                        "username":username
                    },
                    success:function(data){
                        if(data==1){
                            obj.css("border-color","red");
                            obj.after('<span><font color="red" style="line-height: 42px">名字已经注册,请重新填写!</font></span>');
                            check.username=false;
                            return false;
                        }else{
                            obj.css("border-color","green");
                obj.after('<span><font color="green" style="line-height: 42px">验证通过!</font></span>');
                check.username=true;
                        }
                    }

                });
            }

        })

        //验证邮箱
        $("input[name='email']").blur(function(){
            var obj=$(this);
            obj.next().remove();
            var email=obj.val();
            if(email==""){
                obj.css("border-color","red");
                obj.after('<span><font color="red" style="line-height: 42px">邮箱不能为空!</font></span>');

                check.email=false;
                return false;
            }else{
                var zz=/^[0-9a-z]{2,}\@[a-z0-9]{2,}\.[a-z]{2,}$/;
                if(zz.test(email)){
                    obj.css("border-color","green");
                    obj.after('<span><font color="green" style="line-height: 42px">验证通过!</font></span>');
                    check.email=true;
                }else{
                    obj.css("border-color","red");
                    obj.after('<span><font color="red" style="line-height: 42px">邮箱格式错误!</font></span>');

                    check.email=false;
                    return false;
                }
            }
        })
//        //验证密码
        $("input[name='pwd']").blur(function(){
            var obj=$(this);
            var pwd=obj.val();
            if(pwd==""){
                check.pwd=false;
                return false;
            }else{

                check.pwd=true;
            }

        })
        //验证两次的密码
        $("input[name='pwdss']").blur(function(){
            var obj=$(this);
            var pwdss=obj.val();
            var  pwd=$("input[name='pwd']").val();

            if(pwdss==""){

                check.pwdss=false;
                return false;
            }else{
                if(pwd==pwdss){
                    check.pwdss=true;
                }else{
                    check.pwdss=false;
                    return false;
                }

            }
        });
        //验证
        $("form[name='resgin']").submit(function(){
            $("input[name='username']").trigger("blur");
            $("input[name='pwd']").trigger("blur");
            $("input[name='pwdss']").trigger("blur");
            $("input[name='email']").trigger("blur");
            if(check.email&&check.pwd&&check.pwdss&&check.username){

                return true;
            }else{
                return false;
            }


        })

    })

</script>
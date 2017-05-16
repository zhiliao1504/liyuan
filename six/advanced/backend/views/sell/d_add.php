<div class="container clearfix">
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="?r=member/rooter">代金券管理</a><span class="crumb-step">&gt;</span><span>新增代金券</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?r=sell/d_add" method="post" id="checkAll" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>代金券名称：</th>
                            <td>
                                <input class="common-text required" id="name" name="name" size="50" value="" type="text">
                                <span id="ts_name"></span>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>代金券面额：</th>
                            <td>
                                <input class="common-text required" id="price" name="price" size="50" value="" type="text">
                                <span id="ts_price"></span>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>有效时间段：</th>
                            <td>
                                <input class="common-text required" id="stime" name="stime" size="50" value="" type="text">--
                                <input class="common-text required" id="etime" name="etime" size="50" value="" type="text">
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
        if(name()&&price()){
            return true
        }else{
            return false
        }
    })
    $('#name').blur(function(){
        name()
    })
    $('#price').blur(function(){
        price()
    })
    function name(){
        var name=$("#name").val();
        if(name==""){
            $("#name").css('border-color','red')
            $("#ts_name").html('<span style="color: red;margin-left: 5px">请填写代金券名称</span>')
            return false
        }else{
            $("#name").css('border-color','#ccc')
            $("#ts_name").html('<span style="color: green;margin-left: 5px">√</span>')
            return true
        }
    }
    function price(){
        var reg=/^\d{1,}$/;
        var price=$("#price").val();
        if(reg.test(price)){
            $("#price").css('border-color','#ccc')
            $("#ts_price").html('<span style="color: green;margin-left: 5px">√</span>')
            return true
        }else if(price==""){
            $("#price").css('border-color','red')
            $("#ts_price").html('<span style="color: red;margin-left: 5px">必须填写数字</span>')
            return false
        }else{
            $("#price").css('border-color','red')
            $("#ts_price").html('<span style="color: red;margin-left: 5px">必须填写数字</span>')
            return false
        }
    }



</script>

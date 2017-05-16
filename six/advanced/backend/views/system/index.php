<div class="container clearfix">
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="?r=member/rooter">网站管理</a><span class="crumb-step">&gt;</span><span>网站设置</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?r=system/index" method="post" id="checkAll" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120"><i class="require-red">*</i>网站名称：</th>
                            <td>
                                <input class="common-text required" id="sname" name="sname" size="50" value="<?= $data['sname']?>" type="text" placeholder="">
                                <span id="ts_sname"></span>
                            </td>
                        </tr>
                        <tr>
                            <th width="120">网站描述：</th>
                            <td>
                                <textarea class="textarea" cols="48" role="2" name="desc" placeholder="<?= $data['desc']?>"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th width="120">网址：</th>
                            <td>
                                <input class="common-text required" id="www" name="www" size="50" value="<?= $data['www']?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th width="120">客服电话：</th>
                            <td>
                                <input class="common-text required" id="tel" name="tel" size="50" value="<?= $data['tel']?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th width="120">具体地址：</th>
                            <td>
                                <input class="common-text required" id="address" name="address" size="50" value="<?= $data['address']?>" type="text">
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
        if(name()){
            return true
        }else{
            return false
        }
    })
    $('#name').blur(function(){
        name()
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




</script>

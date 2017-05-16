<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">支付管理</span><span class="crumb-step">&gt;</span><span class="crumb-name">支付方式</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">

                <table class="search-tab">
                    <tr>
                        <th width="70">方式:</th>
                        <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="keywords" type="text"></td>
                        <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?r=system/p_add"><i class="icon-font">＋</i>新增支付方式</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>编号</th>
                            <th>方式名称</th>
                            <th>方式描述</th>
                            <th>操作</th>
                        </tr>
                        <tbody id="box">
                        <?php foreach($data as $k=>$v) {?>
                            <tr>
                                <td><?= $v['tid']?></td>
                                <td><?= $v['name']?></td>
                                <td><?= $v['desc']?></td>
                                <td>
                                    <a class="link-del" href="#" data="<?= $v['tid']?>">删除</a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                    <div class="list-page"></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    $(".btn2").click(function(){
        var key=$("#keywords").val()
        //alert(key)
        $.ajax({
            url:'?r=system/p_sear',
            type:'get',
            dataType:'json',
            data:{key:key},
            success:function(smg){
                var  str="";
                $.each(smg,function(k,v){
                    str+='<tr>';
                    str+='<td>'+ v.tid+'</td>';
                    str+='<td>'+ v.name+'</td>';
                    str+='<td>'+v.desc+'</td>';
                    str+='<td>';
                    str+='<a class="link-del" href="#" data="'+v.tid+'">删除</a>';
                    str+='</td>';
                    str+='</tr>';
                })
                $("#box").html(str)
            }
        })
    })
    $(".link-del").click(function(){
        var tid=$(this).attr('data')
        var obj=$(this)
        $.ajax({
            url:'?r=system/p_del',
            type:'get',
            data:{tid:tid},
            success:function(smg){
                if(smg==1){
                    alert('删除成功')
                    obj.parent().parent().remove()
                }
            }
        })
    })
</script>

<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">代金券管理</span><span class="crumb-step">&gt;</span><span class="crumb-name">代金券列表</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">

                    <table class="search-tab">
                        <tr>
                            <th width="70">代金券:</th>
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
                        <a href="?r=sell/d_add"><i class="icon-font">＋</i>新增代金券</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>编号</th>
                            <th>代金券名称</th>
                            <th>代金券面额</th>
                            <th>开始时间</th>
                            <th>结束时间</th>
                            <th>操作</th>
                        </tr>
                        <tbody id="box">
                        <?php foreach($data as $k=>$v) {?>
                            <tr>
                                <td><?= $v['vid']?></td>
                                <td><?= $v['name']?></td>
                                <td><?= $v['price']?></td>
                                <td><?= $v['stime']?></td>
                                <td><?= $v['etime']?></td>
                                <td>
                                    <a class="link-del" href="#" data="<?= $v['vid']?>">删除</a>
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
            url:'?r=sell/d_sear',
            type:'get',
            dataType:'json',
            data:{key:key},
            success:function(smg){
                var  str="";
                $.each(smg,function(k,v){
                    str+='<tr>';
                    str+='<td>'+ v.vid+'</td>';
                    str+='<td>'+v.name+'</td>';
                    str+='<td>'+v.price+'</td>';
                    str+='<td>'+v.stime+'</td>';
                    str+='<td>'+v.etime+'</td>';
                    str+='<td>';
                    str+='<a class="link-del" href="#" data="'+ v.vid+'">删除</a>';
                    str+='</td>';
                    str+='</tr>';
                })
                $("#box").html(str)
            }
        })
    })
    $(".link-del").click(function(){
        var vid=$(this).attr('data')
        var obj=$(this)
        $.ajax({
            url:'?r=sell/d_del',
            type:'get',
            data:{vid:vid},
            success:function(smg){
                if(smg==1){
                    alert('删除成功')
                    obj.parent().parent().remove()
                }
            }
        })
    })
</script>

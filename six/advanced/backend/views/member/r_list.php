<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">管理员</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <!--<form action="" method="post">-->
                    <table class="search-tab">
                        <tr>
                            <th width="70">管理员:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="keywords" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                <!--</form>-->
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?r=member/r_add"><i class="icon-font">＋</i>新增管理员</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>名称</th>
                            <th>密码</th>
                            <th>真实姓名</th>
                            <th>电话</th>
                            <th>邮箱</th>
                            <th>地址</th>
                            <th>身份证号</th>
                            <th>操作</th>
                        </tr>
                        <tbody id="box">
                        <?php foreach($re as $v){?>
                            <tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                <td><?= $v['name']?></td>
                                <td><?= $v['pwd']?></td>
                                <td><?= $v['username']?></td>
                                <td><?= $v['tel']?></td>
                                <td><?= $v['email']?></td>
                                <td><?= $v['address']?></td>
                                <td><?= $v['rank']?></td>
                                <td>
                                    <a class="link-update" href="?r=member/r_upd&id=<?= $v['id']?>">修改</a>
                                    <a class="link-del" href="#" data="<?= $v['id']?>">删除</a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
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
            url:'?r=member/r_sear',
            type:'get',
            dataType:'json',
            data:{key:key},
            success:function(smg){
                var  str="";
                $.each(smg,function(k,v){
                    str+='<tr>';
                    str+='<td class="tc"><input name="id[]" value="59" type="checkbox"></td>';
                    str+='<td>'+ v.name+'</td>';
                    str+='<td>'+v.pwd+'</td>';
                    str+='<td>'+ v.username +'</td>';
                    str+='<td>'+ v.tel+'</td>';
                    str+='<td>'+ v.email+'</td>';
                    str+='<td>'+ v.address+'</td>';
                    str+='<td>'+ v.rank+'</td>';
                    str+='<td>';
                    str+='<a class="link-update" href="?r=member/r_upd&id='+ v.id+'">修改</a>';
                    str+='<a class="link-del" href="#" data="'+ v.id+'">删除</a>';
                    str+='</td>';
                    str+='</tr>';
                })
                $("#box").html(str)
            }
        })
    })
    $(".link-del").click(function(){
        var id=$(this).attr('data')
        var obj=$(this)
        $.ajax({
            url:'?r=member/r_del',
            type:'get',
            data:{id:id},
            success:function(smg){
                if(smg==1){
                    alert('删除成功')
                    obj.parent().parent().remove()
                }
            }
        })
    })
</script>
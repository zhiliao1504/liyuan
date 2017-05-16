<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="?r=member/index">首页</a><span class="crumb-step">&gt;</span><span class="?r=member/write">作家列表</span></div>
    </div>
    <div class="search-wrap">
        <div class="search-content">
                <table class="search-tab">
                    <tr>
                        <th width="70">账号:</th>
                        <td><input class="common-text" placeholder="账号" name="name" value="" id="pen_name" type="text"></td>
                        <td><input class="btn btn-primary btn2" name="sub" value="查询" type="button" id="but"></td>
                    </tr>
                </table>
        </div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th class="tc" width="10%"><input class="allChoose" name="" type="checkbox"></th>
                        <th>ID</th>
                        <th>账号</th>
                        <th>密码</th>
                        <th>座右铭</th>
                        <th>操作</th>
                    </tr>
                    <tbody class="box">
                    <?php foreach ($data as $v){ ?>
                    <tr>
                        <td class="tc"><input name="id[]" value="<?= $v['id']?>" type="checkbox"></td>
                        <td><?= $v['id']?></td>
                        <td><?= $v['pen_name']?></td>
                        <td><?= $v['pwd']?></td>
                        <td><?= $v['motto']?></td>
                        <td>
                            <a class="link-update" href="?r=member/write_pwd&id=<?= $v['id']?>">修改密码</a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="list-page"></div>
            </div>
        </form>
    </div>
</div>
<!--/main-->
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    $('#but').click(function () {
        var pen_name=$('#pen_name').val();
        //alert(pen_name)
        $.ajax({
            type:'get',
            url:"?r=ajax/penname",
            data:{pen_name:pen_name},
            dataType:'json',
            success:function (msg) {
                var str='';
                $.each(msg,function (k,v) {
                   str+='<tr>';
                   str+='<td class="tc"><input name="id[]" value="'+v.id+'" type="checkbox"></td>';
                    str+='<td>'+v.id+'</td>';
                    str+='<td>'+v.pen_name+'</td>';
                    str+='<td>'+v.pwd+'</td>';
                    str+='<td>'+v.motto+'</td>';
                    str+='<td>';
                    str+='<a class="link-update" href="?r=member/write_pwd&id='+v.id+'">修改密码</a>';
                    str+='</td>';
                    str+='</tr>';
                })
                //alert(str)
                $('.box').html(str)
            }
        })
    })
</script>
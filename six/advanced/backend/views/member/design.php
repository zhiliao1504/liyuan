<link rel="stylesheet" type="text/css" href="css/common.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<script type="text/javascript" src="js/libs/modernizr.min.js"></script>
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="?r=member/index">首页</a><span class="crumb-step">&gt;</span><span class="?r=member/design">作家信息</span></div>
    </div>
    <div class="search-wrap">
        <div class="search-content">
                <table class="search-tab">
                    <tr>
                        <th width="120">姓名:</th>
                        <td><input class="common-text" placeholder="关键字" name="" value="" id="write_name" type="text"></td>
                        <th width="70">地址:</th>
                        <td><input class="common-text" placeholder="关键字" name="" value="" id="address" type="text"></td>
                        <td><input class="btn btn-primary btn2" name="sub" value="查询" type="button" id="but"></td>
                    </tr>
                </table>
        </div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a href="?r=member/insert"><i class="icon-font"><b style="font-size: 20px;">+</b></i>新增作家</a>
                    <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>QQ</th>
                        <th>性别</th>
                        <th>照片</th>
                        <th>身份证</th>
                        <th>写作级别</th>
                        <th>地址</th>
                        <th>注册时间</th>
                        <th>操作</th>
                    </tr>
                    <tbody id="box">
                    <?php foreach ($data as $v) { ?>
                    <tr>
                        <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                        <td><?= $v['id']?></td>
                        <td><?= $v['write_name']?></td>
                        <td><?= $v['qq']?></td>
                        <td><?= $v['sex']?></td>
                        <td><img src="<?= $v['img']?>" alt="" width="60px"></td>
                        <td><?= $v['id_card']?></td>
                        <td><?= $v['level']?></td>
                        <td><?= $v['address']?></td>
                        <td><?= $v['add_time']?></td>
                        <td>
                            <a class="link-update" href="#">修改</a>
                            &nbsp;&nbsp;<a class="link-del" href="#">删除</a>
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
        var write_name=$('#write_name').val();
        var address=$('#address').val();
        //alert(pen_name)
        $.ajax({
            type:'get',
            url:"?r=ajax/writename",
            data:{write_name:write_name,address:address},
            dataType:'json',
            success:function (msg) {
                var str='';
                $.each(msg,function (k,v) {
                    str+='<tr>';
                    str+='<td class="tc"><input name="id[]" value="'+v.id+'" type="checkbox"></td>';
                    str+='<td>'+v.id+'</td>';
                    str+='<td>'+v.write_name+'</td>';
                    str+='<td>'+v.qq+'</td>';
                    str+='<td>'+v.sex+'</td>';
                    str+='<td><img src="'+v.img+'" alt="" width="60px"></td>';
                    str+='<td>'+v.id_card+'</td>';
                    str+='<td>'+v.level+'</td>';
                    str+='<td>'+v.address+'</td>';
                    str+='<td>'+v.add_time+'</td>';
                    str+='<td>';
                    str+='<a class="link-update" href="#">修改</a>';
                    str+='&nbsp;&nbsp;<a class="link-del" href="#">删除</a>';
                    str+='</td>';
                    str+='</tr>';
                })
                //alert(str)
                $('#box').html(str)
            }
        })
    })
</script>
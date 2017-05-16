<link rel="stylesheet" type="text/css" href="css/common.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<script type="text/javascript" src="js/libs/modernizr.min.js"></script>
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="?r=member/index">首页</a><span class="crumb-step">&gt;</span><span class="?r=member/comment">用户评论</span></div>
    </div>
    <div class="search-wrap">
        <div class="search-content">
            <table class="search-tab">
                <tr>
                    <th width="120">小说名称:</th>
                    <td><input class="common-text" placeholder="关键字" name="" value="" id="book" type="text"></td>
                    <th width="70">评论内容:</th>
                    <td><input class="common-text" placeholder="关键字" name="" value="" id="content" type="text"></td>
                    <td><input class="btn btn-primary btn2" name="sub" value="查询" type="button" id="but"></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-title">
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>小说名称</th>
                        <th>评价时间</th>
                        <th>评论点赞数</th>
                        <th>评论内容</th>
                        <th>操作</th>
                    </tr>
                    <tbody id="box">
                    <?php foreach ($data as $v) { ?>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td><?= $v['id']?></td>
                            <td><?= $v['username']?></td>
                            <td><?= $v['name']?></td>
                            <td><?= $v['ctime']?></td>
                            <td><?= $v['num']?></td>
                            <td><?= $v['content']?></td>
                            <td>
                                &nbsp;&nbsp;<a class="link-del" href="?r=member/commentdel&id=<?= $v['id']?>">删除</a>
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
        var book=$('#book').val();
        var content=$('#content').val();
        //alert(pen_name)
        $.ajax({
            type:'get',
            url:"?r=ajax/book",
            data:{book:book,content:content},
            dataType:'json',
            success:function (msg) {
                //alert(msg)
                var str='';
                $.each(msg,function (k,v) {
                    str+='<tr>';
                    str+='<td class="tc"><input name="id[]" value="'+v.id+'" type="checkbox"></td>';
                    str+='<td>'+v.id+'</td>';
                    str+='<td>'+v.username+'</td>';
                    str+='<td>'+v.name+'</td>';
                    str+='<td>'+v.ctime+'</td>';
                    str+='<td>'+v.num+'</td>';
                    str+='<td>'+v.content+'</td>';
                    str+='<td>';
                    str+='<a class="link-del" href="?r=member/commentdel&id='+v.id+'">删除</a>';
                    str+='</td>';
                    str+='</tr>';
                })
                //alert(str)
                $('#box').html(str)
            }
        })
    })
</script>
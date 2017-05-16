<style>
    .sort{
        width: 25px;
        height: 25px;
        display: none;
    }
</style>
<div class="main-wrap" >

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="?r=book/indexbook">首页</a><span class="crumb-step">&gt;</span><span class="?r=book/keyword_show">关键词列表</span></div>
    </div>
    <div class="search-wrap">
        <div class="search-content">
            <table class="search-tab">
                <tr>
                    <th width="70">关键词:</th>
                    <td><input class="common-text" placeholder="热词" name="name" value="" id="word" type="text"></td>
                    <td><input class="btn btn-primary btn2" name="sub" value="查询" type="button" id="but"></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="result-wrap" style="text-align: center">
        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a href="?r=book/k_insert"><i class="icon-font"><b style="font-size: 20px;">+</b></i>关键词添加</a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <td>ID</td>
                        <td>热词</td>
                        <td>数量</td>
                        <td>是否热门</td>
                        <td>排序</td>
                        <td>操作</td>
                    </tr>
                    <tbody class="box">
                    <?php foreach ($data as $v){ ?>
                        <tr>
                            <td><?= $v['kid']?></td>
                            <td><?= $v['word']?></td>
                            <td><?= $v['num']?></td>
                            <td><?= $v['hot']?></td>
                            <td class="td"><span class="order"><?= $v['order']?></span><input type="text" value="<?= $v['order']?>" class="sort" data-attr="<?= $v['kid']?>"></td>
                            <td>
                                <a class="link-update" href="?r=book/keyword_del&id=<?= $v['kid']?>">删除</a>
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
    //搜索关键词
    $('#but').click(function () {
        var word=$('#word').val();
        //alert(pen_name)
        $.ajax({
            type:'get',
            url:"?r=ajax/book_word",
            data:{word:word},
            dataType:'json',
            success:function (msg) {
                var str='';
                $.each(msg,function (k,v) {
                    str+='<tr>';
                    str+='<td>'+v.kid+'</td>';
                    str+='<td>'+v.word+'</td>';
                    str+='<td>'+v.num+'</td>';
                    str+='<td>'+v.hot+'</td>';
                    str+='<td class="td"><span class="order">'+v.order+'</span><input type="text" value="'+v.order+'" class="sort" data-attr="'+v.kid+'"></td>';
                    str+='<td>';
                    str+='<a class="link-update" href="?r=book/keyword_del&id='+v.kid+'">删除</a>';
                    str+='</td>';
                    str+='</tr>';
                })
                //alert(str)
                $('.box').html(str)
            }
        })
    })
    //将隐藏的input框显示出来
    $('.box').delegate('.order','click',function () {
            $(this).next().show();
            $(this).hide();
        })
    //即点即改
    $('.box').delegate('.sort','blur',function () {
        var sort=$(this).val();
        var id=$(this).attr('data-attr');
        //alert(sort)
        $.ajax({
             type:'get',
             url:'?r=ajax/upd_word',
             data:{sort:sort,id:id},
             dataType:'json',
             success:function (msg) {
                 var str='';
                 $.each(msg,function (k,v) {
                     str+='<tr>';
                     str+='<td>'+v.kid+'</td>';
                     str+='<td>'+v.word+'</td>';
                     str+='<td>'+v.num+'</td>';
                     str+='<td>'+v.hot+'</td>';
                     str+='<td class="td"><span class="order">'+v.order+'</span><input type="text" value="'+v.order+'" class="sort" data-attr="'+v.kid+'"></td>';
                     str+='<td>';
                     str+='<a class="link-update" href="?r=book/keyword_del&id='+v.kid+'">删除</a>';
                     str+='</td>';
                     str+='</tr>';
                })
                $('.box').html(str)
            }
         })
    })
</script>




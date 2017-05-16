<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="?r=member/index">首页</a><span class="crumb-step">&gt;</span><span class="?r=member/write">提现管理</span></div>
    </div>
    <div class="search-wrap">
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th class="tc" width="10%"><input class="allChoose" name="" type="checkbox"></th>
                        <th>ID</th>
                        <th>作者</th>
                        <th>时间</th>
                        <th>金额</th>
                        <th>收款账号</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    <tbody class="box">
                    <?php foreach ($data as $v){ ?>
                        <tr>
                            <td class="tc"><input name="id[]" value="<?= $v['id']?>" type="checkbox"></td>
                            <td><?= $v['cid']?></td>
                            <td><?= $v['pen_name']?></td>
                            <td><?= $v['time']?></td>
                            <td><?= $v['price']?></td>
                            <td><?= $v['acount']?></td>
                            <td><?php if($v['status'] == 0){
                                    echo "失败";
                                }elseif($v['status']== 2){
                                    echo "审核中";
                                }else{
                                    echo "成功";
                                } ?></td>
                            <td>
                                <a class="link-update" href="javascript:void(0)" id = <?php echo $v['cid'] ?>>通过</a>
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
    //通过
    $('.link-update').click(function(){
        var cid = $(this).attr('id');
        var obj = $(this);
        $.ajax({
            type:'post',
            url:'?r=member/do_cash',
            data:{cid:cid},
            success:function(msg){
                if(msg == 1){
                    obj.parent().parent().remove();
                }else{
                    alert('通过失败');
                }
            }
        })
    })


</script>
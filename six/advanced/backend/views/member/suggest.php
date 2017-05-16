<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="#">信息管理</a><span class="crumb-step">&gt;</span><span class="crumb-name">建议管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">

            </div>
        </div>
        <div class="result-content">
            <table class="result-tab" width="100%">
                <tr>
                    <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>

                    <th>ID</th>
                    <th>用户</th>
                    <th>建议内容</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                <tbody id="box">
                <?php foreach($data as $k=>$v){  ?>
                    <tr>
                        <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                        <td><?php echo $v['sid'] ?></td>
                        <td><?php echo $v['username'] ?></td>
                        <td><?php echo $v['content'] ?></td>
                        <td>
                            <?php if($v['status'] == 0){
                                echo "未处理";
                            } ?>
                        </td>
                        <td><?php echo $v['addtime'] ?></td>
                        <td>
                            <a class="link-del" href="javascript:void(0)" id="<?php echo $v['sid'] ?>">处理</a>
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
</div>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    //处理建议
    $('.link-del').click(function(){
        var sid = $(this).attr('id');
        var obj = $(this);
        $.ajax({
            type:'post',
            url:'?r=member/do_suggest',
            data:{sid:sid},
            success:function(msg){
                if(msg ==1){
                    obj.parent().parent().remove();
                }
            }
        })
    })
</script>


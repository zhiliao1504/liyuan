<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?/r=site/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">限时抢购</span></div>
        </div>


        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?r=sell/add_limit_book">新增抢购图书</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>

                            <th>ID</th>
                            <th>活动名称</th>
                            <th>书名</th>
                            <th>图片</th>
                            <th>原价</th>
                            <th>促销价格</th>
                            <th>开始时间</th>
                            <th>结束时间</th>
                            <th>描述</th>
                            <th>操作</th>
                        </tr>
                        <tbody id="box">
                        <?php foreach($data  as $k=>$v){  ?>
                            <tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                <td><?php echo $v['sid'] ?></td>
                                <td><?php echo $v['sname'] ?></td>
                                <td><?php echo $v['name'] ?></td>
                                <td><img src="<?php echo $v['img'] ?>" style="height: 100px" alt=""/></td>
                                <td><?php echo $v['price'] ?></td>
                                <td><?php echo $v['sprice'] ?></td>
                                <td><?php echo $v['stime'] ?></td>
                                <td><?php echo $v['etime'] ?></td>
                                <td><?php echo $v['sdesc'] ?></td>
                                <td>
                                    <a class="link-del" href="#">删除</a>
                                </td>
                            </tr>
                        <?php  }  ?>
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

</script>


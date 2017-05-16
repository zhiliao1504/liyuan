<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">会员管理</span><span class="crumb-step">&gt;</span><span class="crumb-name">会员列表</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="70">会员:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">

                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>编号</th>
                            <th>用户名</th>
                            <th>邮箱</th>
                            <th>注册日期</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach($data as $k=>$v) {?>
                            <tr>
                                <td><?= $v['uid']?></td>
                                <td><?= $v['username']?></td>
                                <td><?= $v['email']?></td>
                                <td><?= $v['creat_time']?></td>
                                <td>
                                    <a class="link-update" href="?r=member/">修改</a>
                                    <a class="link-del" href="#">删除</a>
                                </td>
                            </tr>
                        <?php }?>
                    </table>
                    <div class="list-page"></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
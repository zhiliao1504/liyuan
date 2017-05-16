<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>

<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/"></a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">权限管理</a><span class="crumb-step">&gt;</span><span>用户添加角色</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?r=system/dour" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th>选择用户：</th>

                            <td>
                                <?php foreach($user as $v){?>
                                    <input type="radio" name="user" value="<?php echo $v['id']?>"> <?php echo $v['username']?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th>选择角色：</th>

                            <td>
                                <?php foreach($role as $v){?>
                                    <input type="checkbox" name="role[]" value="<?php echo $v['name']?>"> <?php echo $v['name']?>
                                <?php }?>
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
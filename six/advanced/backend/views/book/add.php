<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『有主机上线』后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>

<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="?r=book/index">图书分类</a><span class="crumb-step">&gt;</span><span>图书分类添加</span></div>
        </div>
        <div class="result-wrap">
            <form action="?r=book/add" method="post" id="myform" name="myform">
                <div class="config-items">
                    <div class="config-title">
                        <h1>书籍分类添加</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tr>
                                <th width="15%"><i class="require-red">*</i>书籍分类名称：</th>
                                <td><input type="text" id=""  size="85" name="book_name" class="common-text"></td>
                            </tr>
                            <tr>
                                <th width="15%"><i class="require-red">*</i>分类描述：</th>
                                <td><textarea  class="common-textarea" name="book_desc" id="content" cols="30" style="width: 98%;" rows="3"></textarea></td>
                            </tr>

                            <tr>
                                <th></th>
                                <td>
                                    <input type="hidden" value="siteConf.inc.php" name="file">
                                    <input type="submit" value="提交" class="btn btn-primary btn6 mr10">
                                    <input type="button" value="返回" onclick="history.go(-1)" class="btn btn6">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
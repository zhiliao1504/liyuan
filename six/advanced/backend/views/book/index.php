<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/cssmain.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="container clearfix">

    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">图书分类</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
<!--                            <th width="120">选择分类:</th>-->
<!--                            <td>-->
<!--                                <select name="search-sort" id="">-->
<!--                                    <option value="">请选择</option>-->
<!--                                    --><?php //foreach($data as $k=>$v){ ?>
<!--                                    <option value="">--><?php //echo $v['f_name']?><!--</option>-->
<!--                                    --><?php //}?>
<!--                                </select>-->
<!--                            </td>-->
<!--                            <th width="70">标题:</th>-->
<!--                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>-->



<!--                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>-->
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
<!--                        <a href="insert.html"><i class="icon-font"></i>新增作品</a>-->
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
<!--                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序< /a>-->
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" onclick="check_all()" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>分类名字</th>
                            <th>分类介绍</th>

                            <th>操作</th>
                        </tr>
                        <?php foreach($data as $k=>$v){?>
                        <tr>
                            <td class="tc"><input name="all"   type="checkbox"></td>
                            <td><?php echo $v['f_id']?></td>
                            <td ><a target="_blank" href="#" ><?php echo $v['f_name']?></a>
                            </td>

                            <td style="width: 650px"><?php echo $v['f_desc']?></td>
                            <td>
<!--                                <a class="link-update" href="#">修改</a>-->
                                <a class="link-del" title="<?php echo $v['f_id']?>" href="javascript:void (0);">删除</a>
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
</body>
</html>
<script src="js/jquery-1.10.1.js"></script>
<script>
    //全选反选
  var  all= document.getElementsByName('all');
    function check_all(){
        for(var i=0;i<=all.length;i++){
            all[i].checked=!all[i].checked;
        }
    }



    $(function(){
            //删除
        $(".link-del").click(function(){
                var obj=$(this);
            var id=obj.attr('title');
            $.ajax({
                type:"post",
                url:"?r=book/del",
                data:{
                    id:id
                },
                success:function(data){
                        if(data==1){
                            obj.parent().parent().remove();
                        }

                }

            })

        })

    })


</script>
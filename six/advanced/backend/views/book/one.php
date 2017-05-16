<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?/r=site/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">图书管理</span></div>
        </div>

        <div class="search-wrap">
            <div class="search-content">

                <form action="/jscss/admin/design/index" method="post">

                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="sel">
                                    <option value="">请选择</option>
                                    <?php foreach($res as $k=>$v){  ?>
                                        <option value="<?php echo $v['f_id'] ?>"><?php echo $v['f_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <th width="70">标题:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>

                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="button"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?r=book/b_add">新增图书</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>

                            <th>ID</th>
                            <th>书名</th>
                            <th>分类</th>
                            <th>作者</th>
                            <th>描述</th>
                            <th>图书封面</th>
                            <th>审核状态</th>
                            <th>价格</th>
                            <th>是否畅销</th>
                            <th>是否完结</th>
                            <th>是否免费</th>
                            <th>操作</th>
                        </tr>
                        <tbody id="box">
                        <?php foreach($data  as $k=>$v){  ?>
                            <tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                <td><?php echo $v['b_id'] ?></td>
                                <td><?php echo $v['name'] ?></td>
                                <td><?php echo $v['f_name'] ?></td>
                                <td><?php echo $v['pen_name'] ?></td>
                                <td><?php echo $v['desc'] ?></td>
                                <td><img src="<?php echo $v['img'] ?>" style="height: 100px" alt=""/></td>
                                <td><?php if($v['examine'] == 0){
                                        echo "审核中";
                                    }else{
                                        echo "通过";
                                    } ?></td>
                                <td><?php echo $v['price']  ?></td>
                                <td><?php if($v['sell_well'] == 0){
                                        echo "不畅销";
                                    }else{
                                        echo "畅销";
                                    } ?></td>
                                <td><?php if($v['end'] == 0){
                                        echo "连载";
                                    }else{
                                        echo "完结";
                                    } ?></td>
                                <td><?php if($v['is_free'] == 0){
                                        echo "收费";
                                    }else{
                                        echo "免费";
                                    } ?></td>
                                <td>
                                    <a class="link-update" href="?r=book/up&id=<?php echo $v['b_id'] ?>">修改</a>
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
    $(".btn2").click(function(){
        var title =$(".common-text").val();
        var f_id = $('#sel').val();
        $.ajax({
            url:'?r=book/search',
            type:'post',
            dataType:'json',
            data:{title:title,f_id:f_id},
            success:function(smg){
                var  str="";
                var is_free = '';
                var end = "";
                var sell_well = "";
                var examine ='';
                $.each(smg,function(k,v){
                    if(v.is_free == 0){
                        is_free = "收费";
                    }else{
                        is_free = "免费";
                    }
                    if(v.examine == 0){
                        examine = "审核中";
                    }else{
                        examine = "通过";
                    }
                    if(v.end == 0){
                        end = "连载";
                    }else{
                        end = "完结";
                    }
                    if(v.sell_well == 0){
                        sell_well = "不畅销";
                    }else{
                        sell_well = "畅销";
                    }

                    str+='<tr>';
                    str+='<td class="tc"><input name="id[]" value="59" type="checkbox"></td>';
                    str+='<td>'+ v.b_id+'</td>';
                    str+='<td>'+v.name+'</td>';
                    str+='<td>'+ v.f_name +'</td>';
                    str+='<td>'+ v.pen_name+'</td>';
                    str+='<td>'+ v.desc+'</td>';
                    str+='<td><img src="'+ v.img+'" style="height: 100px" alt=""/></td>';
                    str+='<td>'+examine+'</td>';
                    str+='<td>'+ v.price+'</td>';
                    str+='<td>'+sell_well+'</td>';
                    str+='<td>'+end+'</td>';
                    str+='<td>'+is_free+'</td>';
                    str+='<td>';
                    str+='<a class="link-update" href="?r=book/up&id='+ v.b_id+'">修改</a>';
                    str+='<a class="link-del" href="#" data="'+ v.b_id+'">删除</a>';
                    str+='</td>';
                    str+='</tr>';
                })
                $("#box").html(str);
            }
        })
    })

</script>


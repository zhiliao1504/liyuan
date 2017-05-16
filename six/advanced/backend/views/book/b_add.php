<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">
<div class="crumb-wrap">
    <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><a href="?r=book/one">图书管理</a><span class="crumb-step">&gt;</span><span class="crumb-name">图书添加</span></div>
</div>

<div class="search-wrap">
    <div class="search-content">
        <h3 style="margin-left: 70px" >图书添加</h3>
        <form action="?r=book/b_add" method="post" enctype="multipart/form-data">
            <table class="search-tab">
                <tr>
                    <th width="120">选择作者:</th>
                    <td>
                        <select name="a_id" id="">
                            <option value="">请选择</option>
                            <?php foreach($str as $k=>$v){ ?>
                                <option value="<?php echo $v['id'] ?>"><?php echo $v['pen_name'] ?></option>
                            <?php  }  ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select name="f_id" id="">
                            <option value="">请选择</option>
                            <?php foreach($data as $k=>$v){ ?>
                            <option value="<?php echo $v['f_id'] ?>"><?php echo $v['f_name'] ?></option>
                            <?php  }  ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th width="70">书籍名称:</th>
                    <td><input class="common-text"  name="name" value="" id="name" type="text">
                        <span id="sname"></span>
                    </td>
                </tr>
                    <tr>
                    <th width="70">图书封面:</th>
                    <td>
                        <input type="file" name="img"/>
                    </td>
                </tr>
                <tr>
                    <th width="70">价格:</th>

                    <td><input class="common-text"  name="price" value="" id="" type="text"></td>

                </tr>
                <tr>
                    <th width="120">简介:</th>
                    <td>
                        <textarea name="desc" id="" cols="30" rows="2"></textarea>
                    </td>
                </tr>
                <tr>
                    <th width="70">是否免费:</th>
                    <td>
                        <input  type="radio" name="is_free" value="1"/>是
                        <input type="radio" name="is_free" value="0"/>否
                    </td>
                </tr>
                <tr>
                    <th width="70">是否完结:</th>
                    <td>
                        <input type="radio" name="end" value="1"/>是
                        <input type="radio" name="end" value="0"/>否
                    </td>
                </tr>
                <tr>
                    <th width="70"><input type="hidden" name="_csrf" id="_csrf" value="<?= yii::$app->request->csrfToken?>"/></th>
                    <td ><input class="btn btn-primary btn2" name="sub" value="提交" type="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</div>


        </div>
    </form>
</div>
</div>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    var flag = '';
    //验证书名的唯一性
    $('#name').blur(function(){
        var name = $(this).val();
        $.ajax({
            type:'post',
            url:"?r=book/getname",
            data:{name:name},
            success:function(msg){
                if(msg == 1){
                    $('#sname').html('<font color="green">√</font>');
                    flag = true;
                }else if(msg==0){
                    $('#sname').html('<font color="red">该名称已存在</font>');
                    flag = false;
                }
            }
        })

    })

    $("form").submit( function () {
        if(flag){
            return true;
        }else{
            return false;
        }

    } );
</script>

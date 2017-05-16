<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="#">图书</a><span class="crumb-step">&gt;</span><span class="crumb-name">图书修改</span></div>
        </div>

        <div class="search-wrap">
            <div class="search-content">
                <h3 style="margin-left: 70px" >图书修改</h3>
                <form action="?r=book/update" method="post" enctype="multipart/form-data">
                    <table class="search-tab">
                        <tr>
                            <th width="120">分类:</th>
                            <td>
                                <select name="f_id" id="">
                                    <?php foreach($res as $k=>$v){ ?>
                                        <option <?php if($v['f_id'] == $data['f_id']) ?> selected  value="<?php echo $v['f_id'] ?>"><?php echo $v['f_name'] ?></option>
                                    <?php  }  ?>
                                </select>
                            </td>
                        <tr>
                        <tr>
                            <th width="70">书籍名称:</th>
                            <td><input class="common-text"  name="name" value="<?php echo $data['name'] ?>" id="name" type="text">
                                <span id="sname"></span>
                            </td>
                        <tr>
                        <tr>
                            <th width="70">图书封面:</th>
                            <td>
                                <img src="<?php echo $data['img'] ?>" style="height: 100px" alt=""/>
                                <input type="file" name="img"/>
                            </td>
                        </tr>
                        <tr>
                            <th width="70">价格:</th>

                            <td><input class="common-text"  name="price" value="<?php echo $data['price'] ?>" id="" type="text"></td>

                        </tr>
                        <tr>
                            <th width="120">简介:</th>
                            <td>
                                <textarea name="desc" id="" cols="30" rows="2"><?php echo $data['desc'] ?></textarea>
                            </td>
                        <tr>
                        <tr>
                            <th width="70">是否免费:</th>
                            <td>
                                <?php if($data['is_free'] == 0){ ?>
                                    <input  type="radio" name="is_free" value="1"/>是
                                <input type="radio" name="is_free" value="0" checked/>否
                                <?php  }else{ ?>
                                    <input  type="radio" name="is_free" value="1" checked/>是
                                    <input type="radio" name="is_free" value="0" />否
                               <?php  } ?>

                            </td>
                        </tr>
                        <tr>
                            <th width="70">是否完结:</th>
                            <td>
                                <?php if($data['end'] == 0){ ?>
                                <input type="radio" name="end" value="1"/>是
                                <input type="radio" name="end" value="0" checked/>否
                                <?php }else{ ?>
                                    <input type="radio" name="end" value="1" checked/>是
                                    <input type="radio" name="end" value="0" />否
                                <?php  } ?>
                            </td>
                        </tr>
                        <tr>
                            <th width="70"><input type="hidden" name="b_id"  value="<?= $data['b_id']?>"/></th>
                            <td ><input class="btn btn-primary btn2" name="sub" value="修改" type="submit"></td>
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

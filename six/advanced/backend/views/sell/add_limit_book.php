<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><a href="?r=book/one">促销活动</a><span class="crumb-step">&gt;</span><span class="crumb-name">促销图书添加</span></div>
        </div>

        <div class="search-wrap">
            <div class="search-content">
                <h3 style="margin-left: 70px" >图书添加</h3>
                <form action="?r=sell/add_limit_book" method="post" >
                    <table class="search-tab">

                        <tr>
                            <th width="70">活动名称:</th>
                            <td><input class="common-text"  name="sname" value="" id="name" type="text">
                            </td>
                        <tr>
                        <tr>
                            <th width="120">选择图书:</th>
                            <td>

                                <select name="f_id" class="sel">
                                    <option value="">请选择</option>
                                    <?php foreach($data as $k=>$v){ ?>
                                        <option value="<?php echo $v['f_id'] ?>"><?php echo $v['f_name'] ?></option>
                                    <?php  }  ?>
                                </select>
                                    <span class="bo">
                                    <select name="b_id" class="book" id="">
                                        <option value="">请选择</option>
                                    </select>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <th width="70">价格:</th>

                            <td><input class="common-text"  name="sprice" value="" id="" type="text"></td>

                        </tr>

                        <tr>
                            <th width="70px">限购时间</th>
                            <td>
                                <input type="text" class="common-text" name="stime" placeholder=" 开始 年-月-日 时:分:秒"/>-
                                <input type="text" class="common-text" name="etime" placeholder="结束 年-月-日 时:分:秒"/>
                            </td>
                        </tr>
                        <tr>
                            <th width="120">活动简介:</th>
                            <td>
                                <textarea name="sdesc" id="" cols="30" rows="2"></textarea>
                            </td>
                        <tr>
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
    $('.sel').change(function(){
        var f_id = $(this).val();
        var obj = $(this);
        $.ajax({
            type:'post',
            url:'?r=sell/book_brand',
            data:{f_id:f_id},
            dataType:'json',
            success:function(msg){
                var str = '';
                if(msg !=0){
                    $.each(msg,function(k,v){
                        str +='<option name="'+v.b_id+'" value="'+v.b_id+'">'+ v.name+'</option>';

                    })
                    var p=obj.next().children('select').html(str);

                }
            }
        })
    })
</script>

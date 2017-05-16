<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">基础数据统计</span><span class="crumb-step">&gt;</span><span class="crumb-name">会员注册统计</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                    <table class="search-tab">
                        <tr>
                            <th width="70">时间:</th>
                            <td>
                                <input class="common-text" placeholder="开始时间" name="s_time" value="" id="s_time" type="text">——
                                <input class="common-text" placeholder="结束时间" name="e_time" value="" id="e_time" type="text">
                            </td>
                            <td><input class="btn btn-primary btn2" id="sub" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">

                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>编号</th>
                            <th>日期</th>
                            <th>注册人数</th>
                        </tr>
                        <tbody id="box">
                        <?php foreach($data as $v){?>
                            <tr>
                                <td><?= $v['uid']?></td>
                                <td><?= $v['days']?></td>
                                <td><?= $v['count']?></td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                    <div class="list-page"></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    $("#sub").click(function(){

        var start = $('#s_time').val();
        var end   = $('#e_time').val();
        $.ajax({
            url:'?r=market/ss',
            type:'get',
            data:{s:start,e:end},
            dataType:'json',
            success:function(smg){
                if(smg==0){
                    alert('时间选择错误')
                }
                var str="";
                $.each(smg,function(k,v){
                    str+='<tr>';
                    str+='<td>'+ v.uid+'</td>';
                    str+='<td>'+ v.days+'</td>';
                    str+='<td>'+ v.count+'</td>';
                    str+='</tr>';
                })
                $("#box").html(str)
            }
        })
    })
</script>
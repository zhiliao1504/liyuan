<div class="container clearfix">
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><a href="?r=site/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="?r=book/keyword_show">搜索</a><span class="crumb-step">&gt;</span><span>关键词添加</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?r=book/k_insert" method="post" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>关键词：</th>
                            <td>
                                <input class="common-text required" name="word" size="50" value="" type="text">
                                <span id="ts_name">搜索和查询商品信息的依据，必须节选自商品的名称中，可以填写多个词，以“，” 分隔</span>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>是否为热门词：</th>
                            <td>
                                <input class="common-text required" name="hot" size="50" value="1" type="radio">是
                                <input class="common-text required" name="hot" size="50" value="0" type="radio">否
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>排序：</th>
                            <td>
                                <input class="common-text required" name="order" size="50" value="" type="text">
                                <span id="ts_username">数值越小，排名越靠前</span>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>

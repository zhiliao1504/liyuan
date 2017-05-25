<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        td{
            height: 50px;
            line-height: 50px;
            color: yellow;
        }
        a{
            text-decoration: none;
            color: yellow;
        }
    </style>
</head>
<body>
<div style="width: 1100px;height: 900px;text-align: center;background-color: #000000" id="box">
    <div>
            <h1 style="color: red">修改</h1>
            <a href="<?php echo U('Tu/index');?>">返回</a>
    </div>
    <hr/>
    <form action="/12.17/index.php/Home/Tu/xg/id/<?php echo ($re["id"]); ?>" method="post" enctype="multipart/form-data">
        <table border="1" width="400px">
            <tr>
                <td>标题：</td>
                <td><input type="text" name="title" value="<?php echo ($re["title"]); ?>"/></td>
            </tr>
            <tr>
                <td>添加人：</td>
                <td><input type="text" name="uname" value="<?php echo ($re["uname"]); ?>"/></td>
            </tr>
            <tr>
                <td>分类：</td>
                <td>
                    <select name="f_id">
                        <?php if(is_array($res)): foreach($res as $key=>$v): ?><option value="<?php echo ($v["f_id"]); ?>"><?php echo ($v["names"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>图片：</td>
                <td>
                    <img src="/12.17/<?php echo ($re["file"]); ?>" style="height: 150px"/>
                    <input type="file" name="file"/>
                </td>
            </tr>
            <tr>
                <td>内容：</td>
                <td><textarea name="conten" placeholder="<?php echo ($re["conten"]); ?>"></textarea></td>
            </tr>
            <tr>
                <td>是否公开：</td>
                <td>
                    <input type="radio" name="sy" value="0" checked/>不公开
                    <input type="radio" name="sy" value="1" />公开
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="修改"/></td>
            </tr>
        </table>

    </form>

</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><form action="<?php echo U('index/test');?>" method="post">
    <table border="1" width="300px">
        <tr>
            <td>vip：</td>
            <td>
                <input type="text" name="uname"/>
            </td>
        </tr>
        <tr>
            <td>佣金金额：</td>
            <td>
                <input type="text" name="money"/>
            </td>
        </tr>
        <tr>
            <td>描述：</td>
            <td>
                <textarea name="desc"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="提交"/>
            </td>
        </tr>
    </table>
</form>
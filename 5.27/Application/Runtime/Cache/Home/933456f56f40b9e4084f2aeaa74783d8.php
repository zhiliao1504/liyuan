<?php if (!defined('THINK_PATH')) exit();?><table border="1" width="500px">
    <tr>
        <td>投资编号</td>
        <td>投资时间</td>
        <td>客户编号</td>
        <td>投资金额</td>
    </tr>
    <tr>
        <td><?= $info['iid']?></td>
        <td><?= $info['i_time']?></td>
        <td><?= $info['i_uid']?></td>
        <td><?= $info['i_money']?></td>
    </tr>
</table>
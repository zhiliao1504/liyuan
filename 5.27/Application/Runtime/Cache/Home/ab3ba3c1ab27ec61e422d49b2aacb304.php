<?php if (!defined('THINK_PATH')) exit();?><table border="1" width="1100px">
    <tr>
        <td>编号</td>
        <td>姓名</td>
        <td>手机号</td>
        <td>注册时间</td>
        <td>本人邀请码</td>
        <td>所属财富经理邀请码</td>
        <td>注册渠道</td>
        <td>是否开通支付渠道账户</td>
    </tr>
    <tr>
        <td><?= $info['uid']?></td>
        <td><?= $info['uname']?></td>
        <td><?= $info['tel']?></td>
        <td><?= $info['addtime']?></td>
        <td><?= $info['ucode']?></td>
        <td><?= $info['num']?></td>
        <td>
            <?php if($info['reg']==1){?>
                业务系统注册
            <?php }else{ ?>
                互联网注册
            <?php }?>
        </td>
        <td>
            <?php if($info['open']==1){?>
                未开通
            <?php }else{ ?>
                已开通
            <?php }?>
        </td>
    </tr>
</table>
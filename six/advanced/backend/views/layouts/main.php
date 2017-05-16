<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

use yii\db;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" type="text/css" href="css/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    $db=Yii::$app->db;
    $sql="select * from book_sname";
    $data=$db->createCommand($sql)->queryOne();
    NavBar::begin([
        'brandLabel' => $data['sname'],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '会员', 'url' => ['/member/index']],
        ['label' => '图书', 'url' => ['/book/one']],
        ['label' => '订单', 'url' => ['/order/index']],
        ['label' => '统计', 'url' => ['/market/index']],
        ['label' => '营销', 'url' => ['/sell/index']],
        ['label' => '系统', 'url' => ['/system/index']],
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();?>
    <div class="container clearfix">
        <div class="sidebar-wrap" style="float: left">
            <!--<div class="sidebar-title">
                <h1>菜单</h1>
            </div>-->
            <div class="sidebar-content">
                <?php if(Yii::$app->controller->id=='member'){?>
                    <ul class="sidebar-list">
                        <li>
                            <a href="#"><i class="icon-font"></i>会员管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=member/index"><i class="icon-font"></i>会员列表</a></li>
                                <li><a href=""><i class="icon-font"></i>会员信息</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>作家管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=member/write"><i class="icon-font"></i>作家列表</a></li>
                                <li><a href="?r=member/design"><i class="icon-font"></i>作家信息</a></li>
                                <li><a href="?r=member/cash"><i class="icon-font"></i>提现管理</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>管理员</a>
                            <ul class="sub-menu">
                                <li><a href="?r=member/rooter"><i class="icon-font"></i>管理员列表</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>信息处理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=member/comment"><i class="icon-font"></i>评价管理</a></li>
                                <li><a href="?r=member/suggest"><i class="icon-font"></i>建议管理</a></li>
                                <li><a href="design.html"><i class="icon-font"></i>邮件订阅</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php }?>
                <?php if(Yii::$app->controller->id=='book'){?>
                    <ul class="sidebar-list">
                        <li>
                            <a href="#"><i class="icon-font"></i>图书管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=book/one"><i class="icon-font"></i>图书列表</a></li>
                                <li><a href="?r=book/b_add"><i class="icon-font"></i>添加图书</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>图书分类</a>
                            <ul class="sub-menu">
                                <li><a href="?r=book/index"><i class="icon-font"></i>分类列表</a></li>
                                <li><a href="?r=book/add"><i class="icon-font"></i>添加分类</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>搜索</a>
                            <ul class="sub-menu">
                                <li><a href="?r=book/keyword_show"><i class="icon-font"></i>关键词列表</a></li>
                                <li><a href="?r=book/add"><i class="icon-font"></i>搜索统计</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php }?>
                <?php if(Yii::$app->controller->id=='order'){?>
                    <ul class="sidebar-list">
                        <li>
                            <a href="#"><i class="icon-font"></i>订单管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=order/index"><i class="icon-font"></i>订单列表</a></li>
                                <li><a href="design.html"><i class="icon-font"></i>添加订单</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php }?>
                <?php if(Yii::$app->controller->id=='market'){?>
                    <ul class="sidebar-list">
                        <li>
                            <a href="#"><i class="icon-font"></i>基础数据统计</a>
                            <ul class="sub-menu">
                                <li><a href="?r=market/index"><i class="icon-font"></i>会员注册统计</a></li>
                                <li><a href="design.html"><i class="icon-font"></i>会员消费统计</a></li>
                                <li><a href="design.html"><i class="icon-font"></i>销售金额统计</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>作家销售统计</a>
                            <ul class="sub-menu">
                                <li><a href="?r=market/a_zhuce"><i class="icon-font"></i>作家注册统计</a></li>
                                <li><a href="design.html"><i class="icon-font"></i>作家收入统计</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php }?>
                <?php if(Yii::$app->controller->id=='sell'){?>
                    <ul class="sidebar-list">
                        <li>
                            <a href="#"><i class="icon-font"></i>促销活动</a>
                            <ul class="sub-menu">
                                <li><a href="?r=sell/index"><i class="icon-font"></i>限时购书</a></li>
                                <li><a href="design.html"><i class="icon-font"></i>秒杀</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>代金券管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=sell/d_list"><i class="icon-font"></i>代金券列表</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php }?>
                <?php if(Yii::$app->controller->id=='system'){?>
                    <ul class="sidebar-list">
                        <li>
                            <a href="#"><i class="icon-font"></i>网站管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=system/index"><i class="icon-font"></i>网站设置</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>权限管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=system/creatpower"><i class="icon-font"></i>权限添加</a></li>
                                <li><a href="?r=system/creatrole"><i class="icon-font"></i>角色添加</a></li>
                                <li><a href="?r=system/rp"><i class="icon-font"></i>角色添加权限</a></li>
                                <li><a href="?r=system/ur"><i class="icon-font"></i>用户添加角色</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>支付管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=system/p_type"><i class="icon-font"></i>支付方式</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>关于我们</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>广告管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=book/add"><i class="icon-font"></i>广告位列表</a></li>
                                <li><a href="?r=book/add"><i class="icon-font"></i>广告列表</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php }?>
                <?php if(Yii::$app->controller->id=='site'){?>
                    <ul class="sidebar-list">
                        <li>
                            <a href="#"><i class="icon-font"></i>网站管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=book/add"><i class="icon-font"></i>网站设置</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>权限管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=system/creatpower"><i class="icon-font"></i>权限添加</a></li>
                                <li><a href="?r=system/creatrole"><i class="icon-font"></i>角色添加</a></li>
                                <li><a href="?r=system/rp"><i class="icon-font"></i>角色添加权限</a></li>
                                <li><a href="?r=system/ur"><i class="icon-font"></i>用户添加角色</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>支付管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=book/add"><i class="icon-font"></i>支付方式</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>关于我们</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font"></i>广告管理</a>
                            <ul class="sub-menu">
                                <li><a href="?r=book/add"><i class="icon-font"></i>广告位列表</a></li>
                                <li><a href="?r=book/add"><i class="icon-font"></i>广告列表</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php }?>
            </div>

        </div>
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;Love Reading | 爱·阅读<?= date('Y') ?></p>

        <p class="pull-right"><?/*= Yii::powered() */?>
            <span style="color: #ff0000">六组吐血出品</span>
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

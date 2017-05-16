<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$this->context->layout = false; //不使用布局,或者改为自己所需要使用的布局
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <p style="color: #ff0000"> 亲！！你有错了！！！</p>
    <p>   Web服务器正在处理您的请求时发生上述错误。     </p>
    <p>   如果你认为这是一个服务器错误,请联系我们，谢谢您. </p>

</div>

<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 20:03
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\db;
class TheendController extends Controller{
    //完本的页面
    public function actionTheend(){

        return $this->renderPartial('theend');

    }


}
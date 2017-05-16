<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 20:14
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\db;

class NomoneyController extends Controller{
    //免费的页面
    public function actionNomoney(){

        return $this->renderPartial('nomoney');
    }

}
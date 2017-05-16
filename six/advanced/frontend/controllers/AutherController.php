<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 20:29
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\db;

class AutherController extends Controller{
    //作者
    public function actionAuther(){

        return $this->renderPartial('auther');
    }

}
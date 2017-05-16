<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/16
 * Time: 8:18
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\db;

class LoginController extends Controller{

    public function actionLogin(){

        return $this->renderPartial('login');

    }

}
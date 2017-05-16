<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/16
 * Time: 8:53
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\db;
class BookController extends Controller{
    //单本书的详情页面
    public function actionBook(){

        return $this->renderPartial('book');
    }

}
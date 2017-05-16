<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/12
 * Time: 10:00
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\db;

class WholeController extends Controller{


    //全部作品的页面
    public function  actionWhole(){
        return $this->renderPartial('whole');
    }


}
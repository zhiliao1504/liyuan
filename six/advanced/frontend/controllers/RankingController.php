<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 16:25
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\db;

class RankingController extends Controller{
        //排行页面

    public function actionRanking(){
        return $this->renderPartial('ranking');
    }



}
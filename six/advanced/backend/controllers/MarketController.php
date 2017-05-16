<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class MarketController extends Controller
{
    //权限
    public function beforeAction($action)
    {
        $action = Yii::$app->controller->action->id;
        if(\Yii::$app->user->can($action)){
            return true;
        }else{
            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
        }
    }
    //会员注册统计
    public function actionIndex(){
        $db=yii::$app->db;
        $sql="select uid,count(uid) count,DATE_FORMAT(creat_time,'%Y-%m-%d') days from book_user group by days";
        $data=$db->createCommand($sql)->queryAll();
        //print_r($data);die;
        return $this->render('index',['data'=>$data]);
    }
    //会员注册统计搜索
    public function actionSs(){
        $s=yii::$app->request->get('s');
        $e=yii::$app->request->get('e');
        if($s>$e){
            echo 0;
            exit;
        }
        $db=yii::$app->db;
        $sql="select uid,count(uid) count,DATE_FORMAT(creat_time,'%Y-%m-%d') days from book_user WHERE  creat_time between '".$s."' and '".$e." 23:59:59' group by days ";
        $data=$db->createCommand($sql)->queryAll();
        exit(json_encode($data));
    }
    //作家注册统计
    public function actionA_zhuce(){
        $db=yii::$app->db;
        $sql="select id,count(id) count,DATE_FORMAT(add_time,'%Y-%m-%d') days from book_authorinfo group by days";
        $data=$db->createCommand($sql)->queryAll();
        //print_r($data);die;
        return $this->render('a_zhuce',['data'=>$data]);
    }
    //作家注册统计搜索
    public function actionZ_ss(){
        $s=yii::$app->request->get('s');
        $e=yii::$app->request->get('e');
        if($s>$e){
            echo 0;
            exit;
        }
        $db=yii::$app->db;
        $sql="select id,count(id) count,DATE_FORMAT(add_time,'%Y-%m-%d') days from book_authorinfo WHERE  add_time between '".$s."' and '".$e." 23:59:59' group by days ";
        $data=$db->createCommand($sql)->queryAll();
        exit(json_encode($data));
    }
}
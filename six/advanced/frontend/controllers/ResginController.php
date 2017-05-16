<?php
namespace frontend\controllers;

use Yii;

use yii\web\Controller;
use Yii\db;

/**
 * Site controller
 */
class ResginController extends Controller
{

    //设置csrf验证局部方法设置$accessactions里面写方法
    public function beforeAction($action) {
        $currentaction = $action->id;
        $accessactions = ['resgin','addresgin'];
        if(in_array($currentaction,$accessactions)) {
            $action->controller->enableCsrfValidation = false;
        }
        parent::beforeAction($action);
        return true;
    }


    public function actionNewresgin(){
        if($data=Yii::$app->request->post()){



        }else{
            return $this->renderPartial('newresgin');
        }
    }


    public function actionAddresgin(){
        $aa=Yii::$app->request->post();
        print_r($aa);



    }


    //验证唯一性
    public function actionResgin_user(){
        $name=Yii::$app->request->post();
       if($name){
           $user=$name['username'];

           $db=Yii::$app->db;
           $sql="select * from book_user WHERE  username='$user'";
            $username=$db->createCommand($sql)->queryAll();
           if($username){
               echo 1;
           }else{
               echo 0;
           }
       }

    }




}

?>
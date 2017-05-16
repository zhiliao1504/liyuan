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
class SellController extends Controller
{
    public $enableCsrfValidation=false;
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
    //限时购书
    public function actionIndex(){
        $time = date("Y-m-d H:i:s",time());
        $sql = "select * from book_sell left join book_books on book_sell.bid = book_books.b_id where stime <= '$time' and '$time' <= etime";
        $data = yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('index',['data'=>$data]);
    }
    //代金券列表
    public function actionD_list()
    {
        $time=date('Y-m-d H:i:s',time());
        $db=yii::$app->db;
        $sql="select * from book_voucher where stime>='$time'";
        $data=$db->createCommand($sql)->queryAll();
        return $this->render('d_list',['data'=>$data]);
    }
    //代金券添加
    public function actionD_add()
    {
        if($data=yii::$app->request->post()){
            //print_r($data);die;
            $db=Yii::$app->db;
            $re=$db->createCommand()->insert('book_voucher',$data)->execute();
            if($re){
                echo "<script>alert('添加成功');location.href='?r=sell/d_list'</script>";
            }
        }else{
            return $this->render('d_add');
        }
    }
    //代金券删除
    public function actionD_del(){
        $vid=yii::$app->request->get('vid');
        $db=Yii::$app->db;
        $re=$db->createCommand()->delete('book_voucher',array('vid'=>$vid))->execute();
        if($re){
            echo 1;
        }
    }
    //代金券搜索
    public function actionD_sear(){
        $key=yii::$app->request->get('key');
        $db=Yii::$app->db;
        $sql="select * from book_voucher WHERE `name` LIKE '%$key%'";
        $re=$db->createCommand($sql)->queryAll();
        echo json_encode($re);
        exit;
    }


    //限购图书添加
    public function actionAdd_limit_book(){
        if( yii::$app->request->post()){
            $post = yii::$app->request->post();
            $stime = $post['stime'];
            $etime = $post['etime'];
            $sname = $post['sname'];
            $bid = $post['b_id'];
            $sdesc = $post['sdesc'];
            $sprice = $post['sprice'];
            $sql = "insert into book_sell(`stime`,`etime`,`sname`,`bid`,`sdesc`,`sprice`) VALUE ('$stime','$etime','$sname','$bid','$sdesc','$sprice')";
            $res = yii::$app->db->createCommand($sql)->execute();
            if($res){
                echo "<script>alert('添加成功');location.href='?r=sell/index';</script>";
            }else{
                echo "<script>alert('添加失败');location.href='?r=sell/add_limit_book';</script>";

            }
            print_r($post);
        }else{
            $sql = "select * from book_brand";
            $data = yii::$app->db->createCommand($sql)->queryAll();

            return $this->render('add_limit_book',['data'=>$data]);
        }

    }

    //根据分类添加图示
    public function actionBook_brand(){
        $f_id = yii::$app->request->post('f_id');
        $sql = "select name,b_id from book_books where f_id = $f_id";
        $res = yii::$app->db->createCommand($sql)->queryAll();
        if($res){
            echo json_encode($res);
        }else{
            echo 0;
        }

    }
}
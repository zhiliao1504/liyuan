<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\RbacForm;
/**
 * Site controller
 */
class SystemController extends Controller
{
    public $enableCsrfValidation=false;

    //设置csrf验证局部方法设置$accessactions里面写方法


    //权限文本框
    public function actionCreatpower(){


        return $this->render('creatpower');
    }

    //权限添加
    public function actionAddpower(){

        $data=Yii::$app->request->post();
//            print_r($data);die;
        $power=$data['power'];
        $auth = Yii::$app->authManager;
        $createPost = $auth->createPermission($power);
        $createPost->description = '创建了 ' . $power . ' 权限';
        $re=$auth->add($createPost);
        if($re){
            echo "<script>alert('添加成功');location.href='?r=system/creatpower</script>";
        }
    }

    //角色文本框
    public function actionCreatrole(){

        return $this->render('creatrole');
    }

    //添加角色
    public function actionAddrole(){
        $data=Yii::$app->request->post();

        $power=$data['role'];
        $auth = Yii::$app->authManager;
        $role = $auth->createRole($power);
        $role->description = '创建了 ' . $power . ' 角色';
        $re=$auth->add($role);
        if($re){
            echo "<script>alert('添加成功');location.href='?r=system/creatrole</script>";
        }
    }


    //查询所有的角色和的权限
    public function actionRp(){

        $power=RbacForm::getpower();
        $role=RbacForm::getrole();
        return $this->render('rp',['power'=>$power,'role'=>$role]);
    }

    //添加角色的权限
    public function actionDorp()
    {
        $data = Yii::$app->request->post();
//        print_r($data);die;
        $roles = $data['role'];
        $powers = $data['power'];

        foreach ($powers as $power) {
            $auth = Yii::$app->authManager;
            $parent = $auth->createRole($roles);
            $child = $auth->createPermission($power);
            $auth->addChild($parent, $child);
        }
    }

    //查找所有的用户和角色
    public function actionUr(){
        $users = RbacForm::getuser();
        $role = RbacForm::getrole();
//        print_r($role);die;
        return $this->render('ur',['role'=>$role,'user'=>$users]);
    }


    //添加用户的角色
    public function actionDour(){
        $data = Yii::$app->request->post();
        $roles = $data['role'];
        $user = $data['user'];
        foreach($roles as $value){
            $auth = Yii::$app->authManager;
            $reader = $auth->createRole($value);
            $auth->assign($reader,$user);
        }
    }

    public function Actionadd(){

        echo "1";

    }

///权限
    public function beforeAction($action)
    {
        $action = Yii::$app->controller->action->id;
        if(\Yii::$app->user->can($action)){
            return true;
        }else{
            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
        }
    }
    public function actionIndex(){
        if($data=yii::$app->request->post()){
            $sname=$data['sname'];
            $www=$data['www'];
            $desc=$data['desc'];
            $tel=$data['tel'];
            $address=$data['address'];
            $db=Yii::$app->db;
            $sql="update book_sname set sname='$sname',www='$www',`desc`='$desc',tel='$tel',address='$address' WHERE sid='1'";
            $re=$db->createCommand($sql)->execute();
            if($re){
                echo "<script>alert('修改成功');location.href='?r=system/index'</script>";
            }
        }else{
            $db=Yii::$app->db;
            $sql="select * from book_sname";
            $data=$db->createCommand($sql)->queryOne();
            //print_r($data);die;
            return $this->render('index',['data'=>$data]);
        }
    }
    //支付方式列表
    public function actionP_type(){
        $db=yii::$app->db;
        $sql="select * from book_type";
        $data=$db->createCommand($sql)->queryAll();
        return $this->render('p_type',['data'=>$data]);
    }
    //支付添加
    public function actionP_add()
    {
        if($data=yii::$app->request->post()){
            //print_r($data);die;
            $db=Yii::$app->db;
            $re=$db->createCommand()->insert('book_type',$data)->execute();
            if($re){
                echo "<script>alert('添加成功');location.href='?r=system/p_type'</script>";
            }
        }else{
            return $this->render('p_add');
        }
    }
    //支付删除
    public function actionP_del(){
        $tid=yii::$app->request->get('tid');
        $db=Yii::$app->db;
        $re=$db->createCommand()->delete('book_type',array('tid'=>$tid))->execute();
        if($re){
            echo 1;
        }
    }
    //支付搜索
    public function actionP_sear(){
        $key=yii::$app->request->get('key');
        $db=Yii::$app->db;
        $sql="select * from book_type WHERE `name` LIKE '%$key%'";
        $re=$db->createCommand($sql)->queryAll();
        echo json_encode($re);
        exit;
    }

    //网站设置
    public function actionW_she(){

    }


}
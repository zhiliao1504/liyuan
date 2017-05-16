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
class AjaxController extends Controller
{
    public function actionShow()
    {
        $get=Yii::$app->request->get();
        $name=$get['uname'];
        $pwd=$get['pwd'];
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_admin where name='$name' and pwd='$pwd'")->queryOne();
        //print_r($sql);die;
        if($sql){
            Yii::$app->session['id']=$sql['id'];
            return 1;
        }else{
            return 0;
        }
    }
    //作者添加页面，验证真实姓名是否已存在
    public function actionWrite_name()
    {
        $name=Yii::$app->request->get('name');
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_authorinfo where write_name='$name'")->queryOne();
        if($sql){
            echo 1;
        }else{
            echo 0;
        }
    }
    //作者添加页面，验证笔名是否已被人使用
    public function actionPen_name()
    {
        $pen_name=Yii::$app->request->get('pen_name');
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_author where pen_name='$pen_name'")->queryOne();
        if($sql){
            echo 1;
        }else{
            echo 0;
        }
    }
    //验证身份证是否重复
    public function actionId_card()
    {
        $id_card=Yii::$app->request->get('id_card');
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_authorinfo where id_card='$id_card'")->queryOne();
        if($sql){
            echo 1;
        }else{
            echo 0;
        }
    }
    //验证修改是密码是否正确
    public function actionWrite_pwd()
    {
        $pwd=Yii::$app->request->get('pwd');
        $id=Yii::$app->request->get('id');
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_author where id=$id and pwd='$pwd'")->queryOne();
        if($sql){
            echo 1;
        }else{
            echo 0;
        }
    }
    //ajax搜索作家账号
    public function actionPenname()
    {
        $pen_name=Yii::$app->request->get('pen_name');
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_author where pen_name like '%$pen_name%'")->queryAll();
        if($sql){
            return json_encode($sql);
        }else{
            return 0;
        }
    }
    //ajax搜索作者姓名和住址
    public function actionWritename()
    {
        $write_name=Yii::$app->request->get('write_name');
        $address=Yii::$app->request->get('address');
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_authorinfo where write_name like '%$write_name%' and address like '%$address%'")->queryAll();
        if($sql){
            return json_encode($sql);
        }else{
            return 0;
        }
    }
    //搜索小说名称和评论内容
    public function actionBook()
    {
        $book=Yii::$app->request->get('book');
        $content=Yii::$app->request->get('content');
        $db=Yii::$app->db;
        if($book){
            $sql=$db->createCommand("select b_id,`name` from book_books where `name` like '%$book%' ")->queryAll();
            //print_r($sql);die;
            foreach ($sql as $k=>$v){
                $id=$v['b_id'];
                $arr=$db->createCommand("select * from book_comment where b_id='$id' and content like '%$content%'")->queryAll();
                foreach ($arr as $kk=>$vv){
                    $id=$vv['u_id'];
                    $name[$kk]=$db->createCommand("select username from user where id='$id'")->queryOne();
                    $arr[$kk]['username']=$name[$kk]['username'];
                    $arr[$kk]['name']=$sql[$k]['name'];
                }


                //print_r($arr);die;
            }
            if($arr){
                return json_encode($arr);
            }else{
                return 0;
            }
        }elseif ($content){
            $sql=$db->createCommand("select * from book_comment where content like '%$content%' ")->queryAll();
            foreach ($sql as $k=>$v){
                $id=$v['u_id'];
                $sql[$k]['username']=$db->createCommand("select username from user where id='$id'")->queryOne();
                $id=$v['b_id'];
                $sql[$k]['name']=$db->createCommand("select `name` from book_books where b_id='$id'")->queryOne();
                $sql[$k]['username']=$sql[$k]['username']['username'];
                $sql[$k]['name']=$sql[$k]['name']['name'];
            }
            if($sql){
                return json_encode($sql);
            }else{
                return 0;
            }
        }else{
            $db=Yii::$app->db;
            $sql=$db->createCommand("select * from book_comment")->queryAll();
            foreach ($sql as $k=>$v){
                $id=$v['u_id'];
                $sql[$k]['username']=$db->createCommand("select username from user where id='$id'")->queryOne();
                $id=$v['b_id'];
                $sql[$k]['name']=$db->createCommand("select `name` from book_books where id='$id'")->queryOne();
                $sql[$k]['username']=$sql[$k]['username']['username'];
                $sql[$k]['name']=$sql[$k]['name']['name'];

            }
            if($sql){
                return json_encode($sql);
            }else{
                return 0;
            }
        }
    }

    //Book页面搜索关键词
    public function actionBook_word()
    {
        $word=Yii::$app->request->get('word');
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_key_word where word like '%$word%'")->queryAll();
        if($sql){
            return json_encode($sql);
        }else{
            return 0;
        }
    }
    //Book页面搜索关键词即点即改
    public function actionUpd_word()
    {
        $sort=Yii::$app->request->get('sort');
        $id=Yii::$app->request->get('id');
        $db=Yii::$app->db;
        $sql=$db->createCommand()->update('book_key_word',['order'=>$sort],"kid=$id")->execute();
        if($sql){
            $sql=$db->createCommand("select * from book_key_word order by `order` asc")->queryAll();
            return json_encode($sql);
        }else{
            return 0;
        }
    }

}
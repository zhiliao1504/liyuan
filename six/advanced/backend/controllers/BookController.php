<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\db;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class BookController extends Controller
{


    //设置csrf验证局部方法设置$accessactions里面写方法
    public $enableCsrfValidation=false;

    public function beforeAction($action) {
        $action = Yii::$app->controller->action->id;
        if(\Yii::$app->user->can($action)){
            return true;
        }else{
            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
        }
        $currentaction = $action->id;
        $accessactions = ['add'];
        if(in_array($currentaction,$accessactions)) {
            $action->controller->enableCsrfValidation = false;
        }
        parent::beforeAction($action);
        return true;
    }

    //图书列表
    public function actionOne(){
        $db = yii::$app->db;
        //分类
        $sql1 = "select * from book_brand";
        $res = $db->createCommand($sql1)->queryAll();
        //展示
        $sql = "select * from book_books left join book_brand on book_books.f_id = book_brand.f_id left join book_author on book_books.a_id = book_author.id";
        $data = $db->createCommand($sql)->queryAll();
        //print_r($data);die;
        return $this->render('one',['data'=>$data,'res'=>$res]);
    }

    //图书的添加
    public function actionB_add(){
        $session = yii::$app->session;
        $session->open();
        $a_id = $session->get('id');
        if(yii::$app->request->post()){
            $tmp_file=$_FILES['img']['tmp_name'];
            $ext=substr($_FILES['img']['name'],strrpos($_FILES['img']['name'],'.'));
            $filename=time().mt_rand().$ext;
            $f_id = yii::$app->request->post('f_id');
            $name = yii::$app->request->post('name');
            $desc = yii::$app->request->post('desc');
            $img = yii::$app->request->post('img');
            $is_free = yii::$app->request->post('is_free');
            $price = yii::$app->request->post('price');
            $sell_well = yii::$app->request->post('sell_well');
            $end = yii::$app->request->post('end');
            if(move_uploaded_file($tmp_file,"$filename")){

                $db = yii::$app->db;
                $sql = "insert into book_books(f_id,`name`,a_id,`desc`,img,is_free,price,sell_well,end) VALUE ('$f_id','$name','$a_id','$desc','$filename','$is_free','$price','$sell_well','$end')";
                $res = $db->createCommand($sql)->execute();
                if($res){
                    echo "<script>alert('添加成功');location.href='?r=book/one';</script>";
                }else{
                    echo "<script>alert('添加失败');location.href='?r=book/one';</script>";
                }
            }else{
                echo "上传失败";
            }
        }else{
            $db    = yii::$app->db;
            $sql   = "select * from book_brand";
            $data  = $db->createCommand($sql)->query();
            $sql   ="select * from book_author";
            $str   = $db->createCommand($sql)->query();
            return $this->render('b_add',['data'=>$data,'str'=>$str]);
        }
    }

    //图书名称验证唯一性
    public function actionGetname(){
        $name = yii::$app->request->post('name');
        $db = yii::$app->db;
        $sql = "select `name`,f_id from book_books where name='$name'";
        $res = $db->createCommand($sql)->queryOne();
        if(empty($res)){
            echo 1;
        }else{
            echo 0;
        }
    }

    //搜索
    public function actionSearch(){
        $f_id = yii::$app->request->post('f_id');
        $name = yii::$app->request->post('title');
        $db = yii::$app->db;
        $where =  array("1=1");
        if(!empty($f_id)){
            $where[] = "book_books.f_id = $f_id";
        }
        if(!empty($name)){
            $where[] = 'book_books.name like "%'.$name.'%"';
        }
        $where = implode(' and ',$where);
        $sql = "select * from book_books left join book_brand on book_books.f_id = book_brand.f_id left join book_author on book_books.a_id = book_author.a_id where $where";
        $sel = $db->createCommand($sql)->queryAll();
        //echo $db->find()->createCommand()->getRawSql();die;
        echo json_encode($sel);
    }
    //修改查询
    public function actionUp(){
        $id = yii::$app->request->get('id');
        $db = yii::$app->db;
        $sql1 = "select * from book_brand";
        $res = $db->createCommand($sql1)->queryAll();
        $sql = "select * from book_books left join book_brand on book_books.f_id = book_brand.f_id where book_books.b_id = $id";
        $data = $db->createCommand($sql)->queryOne();
        //print_r($data);die;
        return $this->render('b_update',['data'=>$data,'res'=>$res]);
    }
    //修改
    public function actionUpdate(){
        //$data=yii::$app->request->post();
        //print_r($data);die;
        $id = yii::$app->request->post('b_id');
       // echo $id;die;
        $db = yii::$app->db;
        $name = yii::$app->request->post('name');
        $f_id = yii::$app->request->post('f_id');
        $price = yii::$app->request->post('price');
        $is_free = yii::$app->request->post('is_free');
        $end = yii::$app->request->post('end');
        $desc = yii::$app->request->post('desc');
        if(!empty($_FILES)){
            $tmp_file=$_FILES['img']['tmp_name'];
            $ext=substr($_FILES['img']['name'],strrpos($_FILES['img']['name'],'.'));
            $filename=time().mt_rand().$ext;
            if(move_uploaded_file($tmp_file,"$filename")){
                $sql = "update book_books set `name`='$name',f_id='$f_id',img='$filename',price ='$price',is_free=$is_free,end='$end',`desc`='$desc' where b_id=$id";
            }else{
                $sql = "update book_books set `name`='$name',f_id='$f_id',price='$price',is_free=$is_free,end='$end',`desc`='$desc' where b_id=$id";
            }
            $res = $db->createCommand($sql)->execute();
            if($res){
                echo "<script>alert('修改成功');location.href='?r=book/one';</script>";
            }
        }
    }

    //首页展示分类
    public function actionIndex(){

        $sql='select * from book_brand';
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('index',['data'=>$data]);
    }

    //添加分类
    public function actionAdd(){
        $zhi=Yii::$app->request;
        if($zhi->post()){
                $data=$zhi->post();
            $add= Yii::$app->db->createCommand()->insert('book_brand',
                ['f_id' =>'', 'f_name' =>$data['book_name'],'f_desc'=>$data['book_desc'] ])->execute();
            if($add){
                echo "<script>alert('添加成功!');location.href='?r=book/index';</script>";
            }
        }else{

            return $this->render('add');
        }

    }

    //删除分类
    public function actionDel(){
        $id=Yii::$app->request->post('id');
        if($id){
            $db=Yii::$app->db;
            $del=$db->createCommand()->delete('book_brand', 'f_id='.$id)->execute();
            if($del){
                echo 1;
            }
        }

    }
    //关键词添加
    public function actionK_insert(){
        if($data=yii::$app->request->post()){
            $db=yii::$app->db;
            $re=$db->createCommand()->insert('book_key_word',$data)->execute();
            if($re){
                echo "<script>alert('添加成功');location.href='?r=book/keyword_show'</script>";
            }
        }else{
            return $this->render('k_insert');
        }
    }
    //渲染关键词展示页面
    public function actionKeyword_show()
    {
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_key_word order by `order` asc")->queryAll();
        return $this->render('keyword_show',['data'=>$sql]);
    }
    //关键词删除页面
    public function actionKeyword_del()
    {
        $id=Yii::$app->request->get('id');
        $db=Yii::$app->db;
        $sql=$db->createCommand("delete  from book_key_word where kid=$id")->execute();
        if($sql){
            echo "<script>alert('删除成功');location.href='?r=book/keyword_show'</script>";
        }
    }

}
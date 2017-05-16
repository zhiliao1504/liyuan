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
class MemberController extends Controller
{

    /**
     * @inheritdoc
     */


    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

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


    public $enableCsrfValidation=false;
    //会员列表
    public function actionIndex(){
        $db=Yii::$app->db;
        $sql="select * from book_user";
        $data=$db->createCommand($sql)->queryAll();
        //print_r($data);die;
        return $this->render('index',['data'=>$data]);
    }
    //添加会员
    public function actionU_add()
    {
        if($data=yii::$app->request->post()){
            //print_r($data);die;
            $data['id']="null";
            $db=Yii::$app->db;
            $re=$db->createCommand()->insert('book_adminuser',$data)->execute();
            if($re){
                echo "<script>alert('添加成功');location.href='?r=member/u_list'</script>";
            }
        }else{
            return $this->render('u_add');
        }
    }
    //管理员展示列表
    public function actionRooter(){
        $db=yii::$app->db;
        $sql="select * from book_admin";
        $re=$db->createCommand($sql)->queryAll();
        return $this->render('r_list',['re'=>$re]);
    }
    //管理员添加
    public function actionR_add(){
        if($data=yii::$app->request->post()){
            //print_r($data);die;
            $data['id']="null";
            $db=Yii::$app->db;
            $re=$db->createCommand()->insert('book_admin',$data)->execute();
            if($re){
                echo "<script>alert('添加成功');location.href='?r=member/rooter'</script>";
            }
        }else{
            return $this->render('r_add');
        }
    }
    //管理员身份证号验证
/*    public function actionR_rank(){
        $rank=yii::$app->request->get('rank');
        $db=Yii::$app->db;
        $sql="select * from book_admin where rank='$rank'";
        $re=$db->createCommand($sql)->queryOne();
        //print_r($re);die;
        if($re){
            echo 0;
        }else{
            echo 1;
        }
    }*/

    //管理员删除
    public function actionR_del(){
        $id=yii::$app->request->get('id');
        $db=Yii::$app->db;
        $re=$db->createCommand()->delete('book_admin',array('id'=>$id))->execute();
        if($re){
            echo 1;
        }
    }

    //管理员修改
    public function actionR_upd(){
        if($id=yii::$app->request->get('id')){
            $db=Yii::$app->db;
            $sql="select * from book_admin WHERE id=$id";
            $re=$db->createCommand($sql)->queryOne();
            return $this->render('r_upd',['re'=>$re]);
        }else{

            $data=yii::$app->request->post();
            //print_r($data);
            $id=$data['id'];
            $pwd=$data['pwd'];
            $tel=$data['tel'];
            $email=$data['email'];
            $address=$data['address'];
            $db=Yii::$app->db;
            $sql="update book_admin set pwd='$pwd',tel='$tel',email='$email',address='$address' WHERE id=$id";
            $re=$db->createCommand($sql)->execute();
            if($re){
                echo "<script>alert('修改成功');location.href='?r=member/rooter'</script>";
            }
        }

    }

    //管理员搜索
    public function actionR_sear(){
        $key=yii::$app->request->get('key');
        $db=Yii::$app->db;
        $sql="select * from book_admin WHERE `name` LIKE '%$key%'";
        $re=$db->createCommand($sql)->queryAll();
        echo json_encode($re);
        exit;
    }

    //渲染修改密码页面
    public function actionWrite_pwd()
    {
        if($post=Yii::$app->request->post()){

        }else{
            $id=Yii::$app->request->get('id');
            return $this->render('write_pwd',['id'=>$id]);
        }


    }

    //渲染作家列表页面
    public function actionWrite()
    {
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_author")->queryAll();
        return $this->render('write',['data'=>$sql]);
    }

    //渲染作家信息页面
    public function actionDesign()
    {
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_authorinfo")->queryAll();
        return $this->render('design',['data'=>$sql]);
    }

    //渲染添加作家信息页面
    public function actionInsert()
    {
        return $this->render('insert');
    }

    //添加作家信息
    public function actionMember_add()
    {
        //echo 1;
        $post=Yii::$app->request->post();
        //print_r($_FILES);
        $tmp_file=$_FILES['img']['tmp_name'];
        $ext=substr($_FILES['img']['name'],strrpos($_FILES['img']['name'],'.'));
        $filename=time().mt_rand().$ext;
        if(move_uploaded_file($tmp_file,"images/img/$filename")){
            $data=[
                'pen_name'=>$post['pen_name'],
                'pwd'=>$post['pwd'],
                'motto'=>$post['motto'],
            ];

            $db=Yii::$app->db;
            $sql=$db->createCommand()->insert('book_author',$data)->execute();
            $arr=[
                'write_name'=>$post['write_name'],
                'a_id'=>$sql,
                'qq'=>$post['qq'],
                'address'=>$post['address'],
                'sex'=>$post['sex'],
                'id_card'=>$post['id_card'],
                'img'=>"images/img/$filename",
                'level'=>$post['level'],
                'add_time'=>date('Y-m-d H:i:s'),
            ];
            $sql=$db->createCommand()->insert('book_authorinfo',$arr)->execute();
            if($sql){
                echo "<script>alert('注册成功');location.href='?r=member/design'</script>";
            }
        }else{
            echo "上传失败";
        }
    }

    //作家密码修改
    public function actionUpdate_pwd()
    {
        $post=Yii::$app->request->post();
        $id=$post['id'];
        $pwd=$post['pwd'];
        $db=Yii::$app->db;
        $sql=$db->createCommand()->update('book_author',['pwd'=>$pwd],"id=$id")->execute();
        if($sql){
            echo "<script>alert('修改成功');location.href='?r=member/write'</script>";
        }
    }
    //评论管理
    public function actionComment()
    {
        $db=Yii::$app->db;
        $sql=$db->createCommand("select * from book_comment")->queryAll();

        foreach ($sql as $k=>$v){
            $id=$v['u_id'];
            $sql[$k]['username']=$db->createCommand("select `username` from `book_user` where uid='$id'")->queryOne();
            $id=$v['b_id'];
            $sql[$k]['name']=$db->createCommand("select `name` from book_books where b_id='$id'")->queryOne();
            $sql[$k]['username']=$sql[$k]['username']['username'];
            $sql[$k]['name']=$sql[$k]['name']['name'];
        }
        return $this->render('comment',['data'=>$sql]);
    }
    //删除评论
    public function actionCommentdel()
    {
        $id=Yii::$app->request->get('id');
        $db=Yii::$app->db;
        $sql=$db->createCommand()->delete('book_comment',['id'=>$id])->execute();
        if($sql){
            echo "<script>alert('删除成功');location.href='?r=member/comment'</script>";
        }
    }
    //建议管理
    public function actionSuggest(){
        $db = yii::$app->db;
        $sql = "select * from book_suggest left join `book_user` on book_suggest.uid = `book_user`.uid where book_suggest.status =0";
        $data = $db->createCommand($sql)->queryAll();
        return $this->render('suggest',['data'=>$data]);
    }
    //处理建议
    public function actionDo_suggest(){
        $sid = yii::$app->request->post('sid');
        $sql = "update book_suggest set status = 1 where sid = $sid";
        $res = yii::$app->db->createCommand($sql)->execute();
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    //提现管理
    public function actionCash(){
        $sql = "select * from book_cash left join book_author on book_cash.aid = book_author.id where status != 1 ";
        $data = yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('cash',['data'=>$data]);
    }

    //提现 ajax操作
    public function actionDo_cash(){
        $cid = yii::$app->request->post('cid');
        $sql = "update book_cash set status = 1 where cid = $cid";
        $res = yii::$app->db->createCommand($sql)->execute();
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}
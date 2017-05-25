<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/3/30
 * Time: 12:23
 */
header("content-type:text/html;charset=utf-8");
file_put_contents('curl.txt',print_r($_POST,true));

$addvipdo=md5("addvip.do".md5(date("YYYY-MMM-DD")));

if($_POST['token']==$addvipdo){
    if($_POST['tel']==""&&$_POST['username']==""&&$_POST['code']==""&&$_POST['pwd']==""){
        $data=array(
            'status'=>'0',
            'msg'=>urlencode('资料必选填写，不能为空!'),
            'result'=>'',
            'result.customerId'=>'&&&'
        );
        echo urldecode(json_encode($data));exit;

    }else{

        $username=$_POST['username'];
        $pwd=$_POST['pwd'];
        $code=$_POST['code'];
        $tel=$_POST['tel'];
        $vip=1;
        $type=$_POST['cate'];
        $time=date('Y-m-d H:i:s',time());
        $pdo=new PDO("mysql:host=127.0.0.1;dbname=vip","root","root");
        $sql = "insert into username values ('','$tel','$pwd','$time','$type','$code','$vip','$username','','')";

        $add=$pdo->exec($sql);
        $id=$pdo->lastInsertId();
        if($add){
            $data=array(
                'status'=>'1',
                'msg'=>urlencode('正确已经升级为vip！'),
                'result'=>'',
                'result.customerId'=>rand(100,999).$id
            );
            echo urldecode(json_encode($data));exit;
        }else{
            $data=array(
                'status'=>'0',
                'msg'=>urlencode('升级vip失败！'),
                'result'=>'',
                'result.customerId'=>""
            );
            echo urldecode(json_encode($data));exit;
        }

    }
//    else{
//        if(count($_POST['tel'])<11){
//            $data=array(
//                'status'=>'0',
//                'msg'=>urlencode('请填写正确的电话'),
//                'result'=>'',
//                'result.customerId'=>'&&&'
//            );
//            echo urldecode(json_encode($data));exit;
//        }
//
//    }



}else{
    $data=array(
        'status'=>'0',
        'msg'=>urlencode('没有权限，非法操作!')
    );
    echo urldecode(json_encode($data));exit;

}











?>









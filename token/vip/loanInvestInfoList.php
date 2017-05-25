<?php
header("content-type:text/html;charset=utf-8");
$id=isset($_POST['id'])?$_POST['id']:'';
$token=isset($_POST['token'])?$_POST['token']:'';
$token1=md5('upgrageCustomer'.md5(date('Y-m-d')));
$db = new PDO('mysql:host=127.0.0.1;dbname=vip','root','root');
$db->query('set names utf8');
if($token){
    if($token!=$token1){
        $row=array(
            'code'=>1,
            'error'=>'token值不一致'
        );
        echo json_encode($row);exit();
    }
    $sql=$db->query("select * from inv where iid=$id");
    $arr=$sql->fetch(PDO::FETCH_ASSOC);

    if($arr){
        $row=array(
            'code'=>0,
            'result'=>$arr,
        );

        echo json_encode($row);exit();
    }else{
        $row=array(
            'code'=>1,
            'error'=>'id不存在'
        );
        echo json_encode($row);exit();
    }
}

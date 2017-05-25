<?php
header("content-type:text/html;charset=utf-8");
$tel=isset($_POST['tel'])?$_POST['tel']:'';
$num=isset($_POST['num'])?$_POST['num']:'';
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
    $sql=$db->query("select * from username where tel='$tel' and vip='1'");
    $arr=$sql->fetch(PDO::FETCH_ASSOC);

    if($arr){
        $row=array(
            'code'=>1,
            'error'=>'您已成为vip，不可重复升级'
        );

        echo json_encode($row);exit();
    }
}

$sql="update username set vip=1 where tel=$tel";
$res=$db->exec($sql);
if($res){
    $row=array(
        'code'=>0,
        'error'=>'升级vip成功',
    );
    echo json_encode($row);exit();

}else{
    $row=array(
        'code'=>1,
        'error'=>'升级vip失败'
    );
    echo json_encode($row);exit();
}
<?php
header("content-type:text/html;charset=utf-8");
file_put_contents('test.txt',print_r($_POST,true));
$uname=$_POST['uname'];
$money=$_POST['money'];
$desc=$_POST['desc'];
$token=md5('disBrokerage'.md5(time()));
if($_POST){
    if($_POST['token']!=$token){
        $row=array(
            'code'=>0,
            'message'=>'非法请求'
        );
        exit(json_encode($row));
    }
}else{
    $row=array(
        'code'=>0,
        'message'=>'非法请求'
    );
    exit(json_encode($row));
}
$db = new PDO('mysql:host=127.0.0.1;dbname=vip','root','root');
$db->query('set names utf8');
$re = $db->query("select * from username WHERE uname='$uname'");
$r = $re->fetch(PDO::FETCH_ASSOC);
$uid=$r['uid'];
$open=$r['open'];
if(empty($r)){
    $row=array(
        'code'=>1,
        'message'=>'没注册'
    );
    exit(json_encode($row));
}
if($open==2){
    $row=array(
        'code'=>2,
        'message'=>'没开通支付渠道账户'
    );
    exit(json_encode($row));
}
$data="(null,'$uid','$money','$desc')";
$sql="insert into `grant` VALUES $data";
$info=$db->exec($sql);
if($info){
    $row=array(
        'code'=>3,
        'message'=>'发放成功'
    );
    exit(json_encode($row));
}else{
    $row=array(
        'code'=>4,
        'message'=>'发放失败'
    );
    exit(json_encode($row));
}




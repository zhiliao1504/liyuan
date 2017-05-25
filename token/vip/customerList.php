<?php

file_put_contents('demo.txt',print_r($_POST,true));
date_default_timezone_set('Asia/Shanghai');
//$time = date('Y-m-d',time());
$token=md5('disBrokerage'.md5(time()));
$time=$_POST['time'];
if($_POST['token'] == $token){
    $time= $_POST['time'];
    $pdo = new PDO('mysql:host=localhost;dbname=vip','root','root');
    $sql = "select * from username where addtime like'$time%'";
    $res = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC );
    if($res){
        $data = array(
            'code'=>0,
            'message'=>'成功',
            'result'=>$res,

        );
    }else{
        $data = array(
            'code'=>1,
            'message'=>'失败',
            'result'=>''
        );
    }

}else{
    $data = array(
        'code'=>1,
        'message'=>'失败',
        'result'=>'sss'
    );
}


echo  json_encode($data);
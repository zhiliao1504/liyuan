<?php


file_put_contents('demo.txt',print_r($_POST,true));
date_default_timezone_set('Asia/Shanghai');
$time = date('Y-m-d',time());
$sel = md5('getCustomerInfo'.md5($time));

if($_POST['token'] == $sel){
    $tel = $_POST['tel'];
    $pdo = new PDO('mysql:host=localhost;dbname=vip','root','root');
    $sql = "select * from `username` where tel = '$tel'";
    $res = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC );
    if($res){
        $data = array(
            'code'=>'0',
            'success'=>'成功',
            'result'=>$res,

        );
    }else{
        $data = array(
            'code'=>1,
            'message'=>'失败',
            'result'=>'该用户未注册'
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
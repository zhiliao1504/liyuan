<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/25
 * Time: 14:42
 */
header("content-type:text/html;charset=utf-8");
file_put_contents('loaninfolist.txt',print_r($_POST,true));


$token=md5("loaninfolist.do".md5(date("YYYY-MMM-DD")));

if($_POST['token']==$token){
    $day=$_POST['day'];
    $pdo=new PDO("mysql:host=127.0.0.1;dbname=vip","root","root");
    $rs = $pdo->query("SELECT * FROM loun WHERE b_time like '$day%'");
    $result_arr = $rs->fetchAll(PDO::FETCH_ASSOC);
    if($result_arr){
        $data=array(
            'status'=>'1',
            'msg'=>urlencode('数据返回，正确!'),
            'result'=>$result_arr
        );
        echo urldecode(json_encode($data));exit;
    }else{
        $data=array(
            'status'=>'2',
            'msg'=>urlencode('没有此项数据!'),
            'result'=>''
        );
        echo urldecode(json_encode($data));exit;
    }



}else{

    $data=array(
        'status'=>'0',
        'msg'=>urlencode('没有权限，非法操作!')
    );
    echo urldecode(json_encode($data));exit;

}

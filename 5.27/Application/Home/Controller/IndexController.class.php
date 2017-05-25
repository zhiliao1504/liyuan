<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function disBrokerage(){
        if(IS_POST){
            $data= I('post.');
            include '/public/function.php';
            $token=md5('disBrokerage'.md5(time()));
            $url='http://www.token.com/vip/disBrokerage.php';
            $data=array(
                'uname'=>$data['uname'],
                'money'=>$data['money'],
                'desc'=>$data['desc'],
                'token'=>$token
            );
            $re=curlRequest($url,$data,true);
            $a=json_decode($re,true);
            $message=$a['message'];
            if($a){
                $this->success("$message",U('Index/disBrokerage'));
            }
        }
        if(IS_GET){
            $this->display('disBrokerage');
        }
    }
    //升级Vip
    public function upgrageCustomer()
    {
        if(IS_POST){
            include './Public/function.php';
            $data=I('post.');
            //print_r($data);die;
            $data['token']=md5('upgrageCustomer'.md5(date('Y-m-d')));
            //echo $data['token'];die;
            $url="http://www.token.com/vip/upgrageCustomer.php";
            $arr=curlRequest($url,$data,true);
            $a=json_decode($arr,true);
            $error=$a['error'];
            if($a){
                $this->success("$error",U('Index/upgrageCustomer'));
            }
        }else{
            $this->display();
        }
    }
    public function getCustomerInfo(){
        if(I('post.')){
            $tel = I('post.tel');
            include"./Public/function.php";
            $url = 'http://www.token.com/vip/getCustomerInfo.php';
            $time = date('Y-m-d',time());
            $res = array(
                'token'=>md5('getCustomerInfo'.md5($time)),
                'tel'=>$tel,
            );
            $data = curlRequest($url,$res,true);
            $a=json_decode($data,true);
            $code=$a['code'];
            $message=$a['message'];
            $info=$a['result'];
            if($code==1){
                $this->success("$message",U('Index/getCustomerInfo'));
            }else{
                $this->assign('info',$info);
                $this->display('getCustomerInfo');
            }
        }else{
            $this->display('get');
        }

    }
    //根据标的id查询投资明细
    public function loanInvestInfoList()
    {
        if(IS_POST){
            include './Public/function.php';
            $data=I('post.');
            //print_r($data);die;
            $data['token']=md5('upgrageCustomer'.md5(date('Y-m-d')));
            //echo $data['token'];die;
            $url="http://www.token.com/vip/loanInvestInfoList.php";
            $arr=curlRequest($url,$data,true);
            //echo $arr;   //返回json
            $a=json_decode($arr,true);
            $error=$a['error'];
            $info=$a['result'];

            if($error){
                $this->success("$error",U('Index/loanInvestInfoList'));
            }else{
                $this->assign('info',$info);
                $this->display('loanInvestInfo');
            }
        }else{
            $this->display();
        }
    }
    public function customerList(){
        if(I('post.')){
            $time = I('post.time');
            include"./Public/function.php";
            $url = 'http://www.token.com/vip/customerList.php';
            $token=md5('disBrokerage'.md5(time()));
            $res=array(
                'time'=>$time,
                'token'=>$token
            );
            $data = curlRequest($url,$res,true);
            $a=json_decode($data,true);
            $code=$a['code'];
            $message=$a['message'];
            $info=$a['result'];
//print_r($info);die;
            if($code == 1){
                $this->success("$message",U('Index/customerList'));

            }else{
                $this->assign('data',$info);
                $this->display('show');

            }

            //print_r(json_decode($data,true));
        }else{
            $this->display('customerList');
        }

    }
    public function addvip(){
        if(IS_POST){
            include '/public/function.php';
            $data=I("post.");
            $token=md5("addvip.do".md5(date("YYYY-MMM-DD")));
            $url='http://www.token.com/vip/addvip.php?token='.$token;
            $arr=array(
                'token'=>$token,
                'username'=>$data['username'],
                'pwd'=>$data['pwd'],
                'code'=>$data['code'],
                'tel'=>$data['tel'],
                'cate'=>$data['cate']
            );
            $html= curlRequest($url,$arr,true);
            $a=json_decode($html,true);
            $msg=$a['msg'];
            $status=$a['status'];
            if($status){
                $this->success("$msg",U('Index/addvip'));
            }
        }else{

            $this->display('addvip');
        }
    }

    public function loaninfolist(){

//            $this->display('loaninfolist');
        IF(IS_GET){
            include '/public/function.php';
            $data=I("get.");
            $token=md5("loaninfolist.do".md5(date("YYYY-MMM-DD")));
            $url='http://www.token.com/vip/loaninfolist.php?token='.$token;
            $arr=array(
                'day'=>$data['day'],
                'token'=>$token
            );
            $html=curlRequest($url,$arr,true);
            $json= json_decode($html,true);

            $status=$json['status'];
//            print_r($status);die;
            $shuju=$json['result'];
            if($status==1){
                $this->assign('data',$shuju);
            }else{
                print_r($html);
            }

            $this->display('loaninfolist');
        }



    }


}
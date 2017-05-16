<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/12
 * Time: 15:07
 */

namespace backend\models;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\base\Model;

class RbacForm extends Model{

    public $power;
    public $role;
    public $user;


    public function rules(){

        return [];
    }
    //查询角色
    static public function getrole(){
        $sql = 'select name from auth_item where type=1';
        $role = Yii::$app->db->createCommand($sql)->queryAll();
        return $role;
    }

    //查询权限
    static public function getpower(){
        $sql = 'select name from auth_item where type=2';
        $power = Yii::$app->db->createCommand($sql)->queryAll();
        return $power;
    }

    //处理权限
    static public function arrtostr($data){
        $arr = array();
        foreach($data as $value){
            $arr[$value['name']] = $value['name'];
        }
        return $arr;
    }

    //查询用户
    static public function getuser(){
        $sql = 'select username,id from user';
        $user = Yii::$app->db->createCommand($sql)->queryAll();
        return $user;
    }
    //  用户的展示
    static public function arrtouser($data){
        $arr = array();
        foreach($data as $value){
            $arr[$value['id']] = $value['username'];
        }
        return $arr;
    }
    //




}
?>
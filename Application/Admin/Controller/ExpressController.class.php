<?php
namespace Admin\Controller;
use Think\Controller;
class ExpressController extends Controller {
    // 后台登录页
    public function index(){
        if(isset($_SESSION['admin'])){

 
            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

     public function expressAdd($number,$jperson,$jaddress,$jphone,$sperson,$saddress,$sphone,$weight,$state,$price){

        $express = D('express');

        $data['number'] = $number;
        $data['jperson'] = $jperson;
        $data['jaddress'] = $jaddress;
        $data['jphone'] = $jphone;
        $data['sperson'] = $sperson;
        $data['saddress'] = $saddress;
        $data['sphone'] = $sphone;
        $data['weight'] = $weight;
        $data['price'] = $price;
        $data['state'] = $state;
        $data['create_at'] = date('Y-m-d H:i:s');
        $data['update_at'] = $data['create_at'];

        if($express->create($data)){
            $id = $express->add();
            if($id){
                $express_template = $express->where("id='$id'")->find();
                $result = array(
                    'code' => '0',
                    'ext' => 'success',
                    'obj' => $express_template
                );
                //echo json_encode($result,JSON_UNESCAPED_UNICODE);
                echo json_encode($result);
            }
        }
    }


  //退出
    public function doLogout(){
        $_SESSION = array();
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(),'',time()-1,'/');
        }
        session_destroy();
        $this->redirect('Index/index');
    }
     
}

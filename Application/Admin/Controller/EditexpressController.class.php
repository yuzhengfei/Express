<?php
namespace Admin\Controller;
use Think\Controller;
class EditexpressController extends Controller {
    // 后台登录页
    public function index($id){
        if(isset($_SESSION['admin'])){

            $express = D('express');
            $expressArr = $express->where(" id = '$id' ")->select();
            $this->assign('expressArr',$expressArr); 

            $user = D('user');
            $userArr = $user->select();
            $this->assign('userArr',$userArr); 
 
            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

  public function expressEdit($id,$username){
       
        $express = D("express");
        
        if($id){
        	$express->where(" id = '$id' ") ->setField('username',$username);
            $result = array(
                'code'=> '0',
                'ext'=> 'success',
            );
            echo json_encode($result);
        }else {
            $result = array(
                'code'=> '1',
                'ext'=> 'fail'
            );
            echo json_encode($result);
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

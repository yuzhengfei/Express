<?php
namespace Admin\Controller;
use Think\Controller;
class SearchController extends Controller {
    // 后台登录页
    public function index(){
        if(isset($_SESSION['admin'])){

        	$search = $_GET[search];

        	$expressnumber = $search;
        	$express = D('express');
        	$expressArr = $express ->where(" number = '$expressnumber' ")->select();
        	$this->assign('expressArr',$expressArr);
        	$this->assign('search',$search);
    
            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

     public function search($expressnumber){

         $express = D('express');
         $expressArr = $express->where(" number = '$expressnumber' ")->select();
         $id = $expressArr[0]['id'];
         if($id){
                $result = array(
                    'code' => '0',
                    'ext' => 'success',
                    'obj' => $expressnumber
                );
                //echo json_encode($result,JSON_UNESCAPED_UNICODE);
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

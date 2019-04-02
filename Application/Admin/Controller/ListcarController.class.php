<?php
namespace Admin\Controller;
use Think\Controller;
class ListcarController extends Controller {
    public function index(){
        if(isset($_SESSION['admin'])){

            $car = D('car');
            $carArr = $car ->select();
            $this-> assign('carArr',$carArr);
  
            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
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

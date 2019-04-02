<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
  // 后台登录页
    public function index(){
        if(isset($_SESSION['admin'])){
            $url = 'http://localhost/express/index.php/Admin/Listexpress/index';
            header("location: $url");
        }else{
            $this->display();
        }
    }

    public function login($name, $password){
       
        $admin = M('admin');
        $data = $admin->where("name='$name' AND password='$password'")->find();
        if($data){
            $_SESSION['admin']=$name;
            $result = array(
                'code' => '0',
                'ext' => '登录成功',
                'adminName' => $_SESSION['admin']
            );
            echo json_encode($result);
        }else{
            $result = array(
                'code' => '1',
                'ext' => '用户名或密码错误'
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
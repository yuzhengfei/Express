<?php
namespace Admin\Controller;
use Think\Controller;
class PersonController extends Controller {
    // 后台登录页
    public function index(){
        if(isset($_SESSION['admin'])){

           $position = D('position');
           $positionArr = $position -> select();
           $this->assign('positionArr',$positionArr);

            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

      public function personAdd($name,$sex,$position,$username,$password,$phone){

	        $user = D('user');
	        $data['name'] = $name;
	        $data['sex'] = $sex;
	        $data['position'] = $position;
	        $data['username'] = $username;
	        $data['password'] = $password;
	        $data['phone'] = $phone;
	        if($user->create($data)){
	            $id = $user->add();
	            if($id){
	                $user_template = $user->where("id='$id'")->find();
	                $result = array(
	                    'code' => '0',
	                    'ext' => 'success',
	                    'obj' => $user_template
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

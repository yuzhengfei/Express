<?php
namespace Admin\Controller;
use Think\Controller;
class EditcarController extends Controller {
    // 后台登录页
    public function index($id){
        if(isset($_SESSION['admin'])){

            $car = D('car');
            $carArr = $car ->where("id='$id'")->select();

            $carid = $id;
            $this->assign('carid',$carid);

            $carnumber = $carArr[0]['carnumber'];
            $this->assign('carnumber',$carnumber);

            $caruser = $carArr[0]['caruser'];
            $this->assign('caruser',$caruser);

            $user = D('user');
            $userArr = $user ->select();
            $this->assign('userArr',$userArr);
        

            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

    public function carEdit($id,$carnumber,$caruser){
        if($id == null ||$caruser == null || $carnumber  == null){
            $result = array(
                'code'=> '1',
                'ext'=> 'error'
            );
            echo json_encode($result);
            return;
        }        
        $car = M("car");
        $data['id'] = $id;
        $data['carnumber'] = $carnumber;
        $data['caruser'] = $caruser;

        $success = $car->save($data);
        if($success){
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

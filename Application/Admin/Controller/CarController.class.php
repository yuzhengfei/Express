<?php
namespace Admin\Controller;
use Think\Controller;
class CarController extends Controller {
    // 后台登录页
    public function index(){
        if(isset($_SESSION['admin'])){

            $user = D('user');
            $userArr = $user ->select();
            $this->assign('userArr',$userArr);

            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

      public function carAdd($carnumber,$caruser){

        if(!$carnumber || !$caruser ){
            $result = array(
                'code'=> '1',
                'ext'=> '缺少参数'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            return;
        }
        $car = D('car');
        $data['carnumber'] = $carnumber;
        $data['caruser'] = $caruser;
        $data['create_at'] = date('Y-m-d H:i:s');
        $data['update_at'] = $data['create_at'];
        if($car->create($data)){
            $id = $car->add();
            if($id){
                $car_template = $car->where("id='$id'")->find();
                $result = array(
                    'code' => '0',
                    'ext' => 'success',
                    'obj' => $car_template
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

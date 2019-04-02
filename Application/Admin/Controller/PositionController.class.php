<?php
namespace Admin\Controller;
use Think\Controller;
class PositionController extends Controller {
    // 后台登录页
    public function index(){
        if(isset($_SESSION['admin'])){

          

            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

      public function positionAdd($name,$info){

        if(!$name || !$info ){
            $result = array(
                'code'=> '1',
                'ext'=> '缺少参数'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            return;
        }
        $position = D('position');
        $data['name'] = $name;
        $data['info'] = $info;
        if($position->create($data)){
            $id = $position->add();
            if($id){
                $position_template = $position->where("id='$id'")->find();
                $result = array(
                    'code' => '0',
                    'ext' => 'success',
                    'obj' => $position_template
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

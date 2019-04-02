<?php
namespace Admin\Controller;
use Think\Controller;
class ListpositionController extends Controller {
    public function index(){
        if(isset($_SESSION['admin'])){

          	$position = D('position');
            $positionArr = $position ->select();
            $this-> assign('positionArr',$positionArr);
 
            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

    //删除
    public function positionDetele($id){
        $position = D('position');
        $success = $position->where("id='$id'")->delete();
        if($success){
            $result = array(
                'code'=> '0',
                'ext'=> 'success'
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

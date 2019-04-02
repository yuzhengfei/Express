<?php
namespace Admin\Controller;
use Think\Controller;
class NoticeController extends Controller {
    // 后台登录页
    public function index(){
        if(isset($_SESSION['admin'])){

          
            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

      public function noticeAdd($title,$notice){

        if(!$title || !$notice ){
            $result = array(
                'code'=> '1',
                'ext'=> '缺少参数'
            );
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            return;
        }

        $author = $_SESSION['admin']; 

        $notices = D('notice');
        $data['title'] = $title;
        $data['notice'] = $notice;
        $data['author'] = $author;
        $data['create_at'] = date('Y-m-d H:i:s');
        $data['update_at'] = $data['create_at'];
        if($notices->create($data)){
            $id = $notices->add();
            if($id){
                $notices_template = $notices->where("id='$id'")->find();
                $result = array(
                    'code' => '0',
                    'ext' => 'success',
                    'obj' => $notices_template
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

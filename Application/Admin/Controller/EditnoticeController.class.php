<?php
namespace Admin\Controller;
use Think\Controller;
class EditnoticeController extends Controller {
    // 后台登录页
    public function index($id){
        if(isset($_SESSION['admin'])){

            $notice = D('notice');
            $noticeArr = $notice ->where("id='$id'")->select();

            $noticeId = $id;
            $this->assign('noticeId',$noticeId);

            $noticeTitle = $noticeArr[0]['title'];
            $this->assign('noticeTitle',$noticeTitle);

            $noticeAuthor = $noticeArr[0]['author'];
            $this->assign('noticeAuthor',$noticeAuthor);

            $noticeNotice = $noticeArr[0]['notice'];
            $this->assign('noticeNotice',$noticeNotice);
        

            $this->display();
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }

    public function noticeEdit($id,$title,$notice){
        if($id == null ||$title == null || $notice  == null){
            $result = array(
                'code'=> '1',
                'ext'=> 'error'
            );
            echo json_encode($result);
            return;
        }        
        $notices = M("notice");
        $data['id'] = $id;
        $data['title'] = $title;
        $data['notice'] = $notice;

        $success = $notices->save($data);
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

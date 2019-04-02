<?php
namespace Admin\Controller;
use Think\Controller;
class ListnoticeController extends Controller {
    // 后台登录页
    public function index(){
        if(isset($_SESSION['admin'])){

        	$notice = D('notice');
        	$noticeArr = $notice -> select();
        	$this->assign('noticeArr',$noticeArr);

            $this->display();
            
        }else{
            $url = 'http://localhost/express/index.php/Admin/Index/index';
            header("location: $url");
        }
    }
 
 
//刷列表
    public function orderList(){
        $order = D('order');
        $resultArr = $order->select();
        //echo json_encode($resultArr,JSON_UNESCAPED_UNICODE);
        echo json_encode($result);
    }

}

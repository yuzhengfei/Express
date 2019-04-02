<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>编辑车辆信息</title>
<meta name="Copyright" content="Douco Design." />
<link href="/express/Public/css/public.css" rel="stylesheet" type="text/css">
<link href="/express/Public/libs/layer/skin/layer.css" rel="stylesheet">
<script type="text/javascript" src="/express/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/express/Public/js/global.js"></script>
<script type="text/javascript" src="/express/Public/js/jquery.autotextarea.js"></script>
<script type="text/javascript" src="/express/Public/js/car.js"></script>
<script src="/express/Public/libs/layer/layer.js"></script>
</head>
<body>
<div id="dcWrap">
 <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><!-- <img src="/express/Public/img/dclogo.gif" alt="logo"> --><h1 style="    font-size: 25px;
    color: #fff;
    text-align: center;">智慧物流</h1></a></div>

  <div class="nav">
   <ul>
    <li><a href=""></a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">管理员：<?php echo (session('admin')); ?>，欢迎登录 </a>
    </li>
    <li class="noRight"><a href="/express/index.php/Admin/Editcar/doLogout">退出</a></li>
   </ul>
  </div>
  
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="index.html"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
   </ul>

   </ul>
 <ul>
  <li class="cur"><a href="#"><i class="productCat"></i><em>公告</em></a></li>
  <li ><a href="/express/index.php/Admin/Notice"><i class="product"></i><em>发表公告</em></a></li>
  <li ><a href="/express/index.php/Admin/Listnotice"><i class="product"></i><em>公告管理</em></a></li>
 </ul>

 <ul>
  <li class="cur"><a href="#"><i class="product"></i><em>智慧收发</em></a></li>
  <li ><a href="/express/index.php/Admin/Express"><i class="theme"></i><em>信息录入</em></a></li>
  <li ><a href="/express/index.php/Admin/Listexpress?type=all"><i class="productCat"></i><em>快件管理</em></a></li>  
 </ul>

 <ul>
  <li class="cur"><a href="#"><i class="product"></i><em>快件跟踪</em></a></li>
  <li ><a href="/express/index.php/Admin/Search"><i class="theme"></i><em>查询</em></a></li>
 </ul>

 <ul>
  <li class="cur"><a href="#"><i class="product"></i><em>车辆</em></a></li>
  <li ><a href="/express/index.php/Admin/Car"><i class="productCat"></i><em>车辆添加</em></a></li>
  <li ><a href="/express/index.php/Admin/Listcar"><i class="productCat"></i><em>车辆管理</em></a></li> 
 </ul>

 <ul>
  <li class="cur"><a href="#"><i class="product"></i><em>信息维护</em></a></li>
  <li ><a href="/express/index.php/Admin/Position"><i class="productCat"></i><em>职位添加</em></a></li>
  <li ><a href="/express/index.php/Admin/Listposition"><i class="productCat"></i><em>职位管理</em></a></li> 
  <li ><a href="/express/index.php/Admin/Person"><i class="manager"></i><em>员工添加</em></a></li> 
  <li ><a href="/express/index.php/Admin/Listperson"><i class="manager"></i><em>员工管理</em></a></li> 
 </ul>

</div></div>
<div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">公告：<strong>欢迎您来到校园智慧物流网站！如有问题请拨打24小时咨询电话：13888888888。</strong> </div>   
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">

    <h3>修改车辆信息</h3>
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      
      <tr>
       <td width="90" align="right">车牌号：</td>
       <td>
        <div name = "carid" hidden>
         <input type="text" name="id" id="id" value="<?php echo ($carid); ?>" />
        </div>
        <div  name="noticeTitle">
        <input type="text" name="carnumber" id="carnumber" value="<?php echo ($carnumber); ?>" size="80" class="inpMain" />
        </div>
       </td>
      </tr> 

      <tr>
       <td width="90" align="right">使用者：</td>
        <td>
        <select class="inpMain" id="caruser">
          <?php if(is_array($userArr)): foreach($userArr as $key=>$item): ?><option value="<?php echo ($item["name"]); ?>"><?php echo ($item["name"]); ?></option><?php endforeach; endif; ?>  
        </select>
       </td>
      </tr> 

      <tr>
       <td></td>
       <td>
        <input name="submit" class="btn" type="submit" id="editcar" value="提交" />
       </td>
      </tr>

     </table>
    </div>
    <div class="clear"></div>
    </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
 </div>
 </div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>

</body>
</html>
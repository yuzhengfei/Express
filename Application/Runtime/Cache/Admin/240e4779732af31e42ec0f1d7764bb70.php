<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>智慧收发</title>
<meta name="Copyright" content="Douco Design." />
<link href="/express/Public/css/public.css" rel="stylesheet" type="text/css">
<link href="/express/Public/libs/layer/skin/layer.css" rel="stylesheet">
<script type="text/javascript" src="/express/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/express/Public/js/global.js"></script>
<script type="text/javascript" src="/express/Public/js/jquery.autotextarea.js"></script>
<script type="text/javascript" src="/express/Public/js/express.js"></script>
<script src="/express/Public/libs/art-template/dist/template.js"></script>
<script src="/express/Public/libs/layer/layer.js"></script>
</head>
<body>
<div id="dcWrap">
 <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><!-- <img src="/express/Public/img/dclogo.gif" alt="logo"> --><h1 style="    font-size: 25px;
    color: #fff;
    position: absolute;
    top: 1px;
    left: 3%;">智慧物流</h1></a></div>

  <div class="nav">
   <ul>
    <li><a href=""></a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">管理员：<?php echo (session('admin')); ?>，欢迎登录 </a>
    </li>
    <li class="noRight"><a href="/express/index.php/Admin/Express/doLogout">退出</a></li>
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

    <h3>揽件信息录入</h3>
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">

      <tr>
       <td width="90" align="right">* 运单号：</td>
       <td>
        <input type="text" name="name" id="number" value="" size="80" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td width="90" align="right">* 寄件人：</td>
       <td>
        <input type="text" name="name" id="jperson" value="" size="80" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td width="90" align="right">* 寄件地址：</td>
       <td>
        <input type="text" name="name" id="jaddress" value="" size="80" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td width="100" align="right">* 寄件联系方式：</td>
       <td>
        <input type="text" name="name" id="jphone" value="" size="80" class="inpMain" />
       </td>
      </tr>

      <tr height="1" style="background:yellow">
       <td width="90" align="right"></td>
       <td>
       </td>
      </tr>
     
      <tr>
       <td width="90" align="right">* 收件人：</td>
       <td>
        <input type="text" name="name" id="sperson" value="" size="80" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td width="90" align="right">* 收件地址：</td>
       <td>
        <input type="text" name="name" id="saddress" value="" size="80" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td width="90" align="right">* 收件联系方式：</td>
       <td>
        <input type="text" name="name" id="sphone" value="" size="80" class="inpMain" />
       </td>
      </tr>

      <tr height="1" style="background:yellow">
       <td width="90" align="right"></td>
       <td>
       </td>
      </tr>

      <tr>
       <td width="90" align="right">* 重量（Kg）：</td>
       <td>
        <input type="text" name="name" id="weight" value="" size="80" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td width="90" align="right">* 价格（元）：</td>
       <td>
        <input type="text" name="name" id="price" value="" size="80" class="inpMain" />
       </td>
      </tr>
     
      <tr>
       <td width="90" align="right">* 快件状态：</td>
       <td>
        <select class="inpMain" id="state">
          <option value="运送中">运送中</option>
          <option value="正在派件">正在派件</option> 
          <option value="已签收">已签收</option>   
        </select>
       </td>       
      </tr>

      <tr>
       <td width="90" align="right"></td>
       <td>
        <input name="submit" class="btn addexpress" type="submit" id="" value="录入" />
       </td>       
      </tr> 

     </table>    
   </div>
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
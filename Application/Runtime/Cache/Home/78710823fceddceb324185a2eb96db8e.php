<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>物资管理系统</title>
<meta name="Copyright" content="Douco Design." />
<link href="/goods/Public/css/public.css" rel="stylesheet" type="text/css">
<link href="/goods/Public/libs/layer/skin/layer.css" rel="stylesheet">
<script type="text/javascript" src="/goods/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/goods/Public/js/global.js"></script>
<script type="text/javascript" src="/goods/Public/js/jquery.autotextarea.js"></script>
<script type="text/javascript" src="/goods/Public/js/addgoods.js"></script>
<script type="text/javascript" src="/goods/Public/js/outorder.js"></script>
<script src="/goods/Public/libs/art-template/dist/template.js"></script>
<script src="/goods/Public/libs/layer/layer.js"></script>
</head>
<body>
<div id="dcWrap">
 <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="/goods/Public/img/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li><a href="/goods/index.php/Home/Outorder/doLogout">清除缓存</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
    </li>
    <li class="noRight"><a href="log/goods/index.php/Home/Outorder/doLogout">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="index.html"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
   <ul>
  <li><a href="/goods/index.php/Home/Addgoods"><i class="productCat"></i><em>添加物资</em></a></li>
  <li class="cur"><a href="/goods/index.php/Home/Index"><i class="product"></i><em>物资列表</em></a></li>

 </ul>
  <ul>
  <li><a href="/goods/index.php/Home/Listorder"><i class="product"></i><em>单据列表</em></a></li>
  <li><a href="/goods/index.php/Home/Inorder"><i class="productCat"></i><em>添加入库单</em></a></li>
  <li><a href="/goods/index.php/Home/Outorder"><i class="productCat"></i><em>添加出库单</em></a></li>  
 </ul>

 <ul>
  <li><a href="/goods/index.php/Home/Listprovider"><i class="theme"></i><em>供货商列表</em></a></li>
  <li><a href="/goods/index.php/Home/Addprovider"><i class="manager"></i><em>添加供货商</em></a></li>  
 </ul>

</div></div>
<div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">物资管理系统<b>></b><strong>物资列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/goods/index.php/Home/Listorder" class="actionBtn">物资列表</a>添加出库单</h3>
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">单据编号</td>
       <td>
        <input type="text" name="name" id="order_number" value="" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">经办人选择</td>
       <td>
        <select class="inpMain" id="user_id">
          <?php if(is_array($arr)): foreach($arr as $key=>$user): ?><option value="<?php echo ($user["id"]); ?>"><?php echo ($user["name"]); ?></option><?php endforeach; endif; ?>  
        </select>
       </td>
      </tr>
      <tr>
       <td width="90" align="right">物品选择</td>
       <td>
        <select class="inpMain" id="goods_id">
          <?php if(is_array($arrG)): foreach($arrG as $key=>$goods): ?><option value="<?php echo ($goods["id"]); ?>"><?php echo ($goods["name"]); ?></option><?php endforeach; endif; ?>  
        </select>
       </td>
      </tr>
      <tr>
       <td width="90" align="right">物品价格</td>
       <td>
        <input type="text" name="name" id="money" value="" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">物品数量</td>
       <td>
        <input type="text" name="name" id="count" value="" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">供应商选择</td>
       <td>
        <select class="inpMain" id="provider_id">
          <?php if(is_array($arrP)): foreach($arrP as $key=>$provider): ?><option value="<?php echo ($provider["id"]); ?>"><?php echo ($provider["name"]); ?></option><?php endforeach; endif; ?>  
        </select>
        <input name="submit" class="btn" type="submit" id="addgoods" value="添加" />
       </td>       
      </tr>  
      <tr>
      <td></td>
      </tr>                       
     </table>    
     </volist>

     <table id="goodsdetail" width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">     
       <tr>
         <th width="80" align="center">物品名称</th>
         <th width="80" align="center">数量</th>
         <th width="80" align="center">物品单价</th>
         <th width="80" align="center">价格小计</th>
         <th width="80" align="center">操作</th>
       </tr>
      <volist name='goodsArr' id="item">
       <tr data-id="<?php echo ($item["id"]); ?>">
        <td align="center"><?php echo ($item["goodsname"]); ?></td>
        <td align="center"><?php echo ($item["count"]); ?></td>
        <td align="center"><?php echo ($item["unitprice"]); ?></td>
        <td align="center"><?php echo ($item["price"]); ?></td> 
        <td align="center"><a href="javascript:void;" class="inner_btn">删除</a></td> 
      </tr>      
      
          
     </table>


</div>
     <script id="item-template" type="text/html">
        <tr data-id="{{item.id}}">
        <td align="center">{{item.goodsname}}</a></td>
        <td align="center">{{item.count}}</td>
        <td align="center">{{item.unitprice}}</td>
        <td align="center">{{item.price}}</td>
        <td align="center"><a href="javascript:void;" class="inner_btn">删除</a></td>   
        </tr>   
     </script>    



    <table class="clear">
      <tr>
        <td>
          <input name="submit" class="btn" type="submit" id="addorder" value="提交" />
        </td>
      </tr>
    </table>
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
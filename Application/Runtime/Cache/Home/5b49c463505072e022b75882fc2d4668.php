<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>物资管理系统</title>
<meta name="Copyright" content="Douco Design." />
<link href="/goods/Public/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/goods/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/goods/Public/js/global.js"></script>
<link href="/goods/Public/libs/layer/skin/layer.css" rel="stylesheet">
<script type="text/javascript" src="/goods/Public/js/jquery.autotextarea.js"></script>
<script type="text/javascript" src="/goods/Public/js/index.js"></script>
<script src="/goods/Public/libs/layer/layer.js"></script>
</head>
<body>
<div id="dcWrap">
 <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="/goods/Public/img/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li><a href="/goods/index.php/Home/Index/doLogout">清除缓存</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
    </li>
    <li class="noRight"><a href="/goods/index.php/Home/Index/doLogout">退出</a></li>
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
<div id="urHere">DouPHP 管理中心<b>></b><strong>物资列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="/goods/index.php/Home/Addgoods" class="actionBtn add">添加物品</a>物品列表</h3>
        <div id="list">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th width="40" align="center">编号</th>
        <th align="left" width="40">物品名称</th>
        <th width="150" align="center">简介</th>
        <th width="80" align="center">数量</th>
        <th width="80" align="center">价格</th>
        <th width="80" align="center">供应商</th>
        <th width="80" align="center">入库时间</th>
        <th width="80" align="center">操作</th>
      </tr>
      <?php if(is_array($goodsArr)): $i = 0; $__LIST__ = $goodsArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr data-id="<?php echo ($item["id"]); ?>">
        <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo ($item["id"]); ?>" /></td>
        <td align="center"><?php echo ($item["id"]); ?></td>
        <td><a href="#"><?php echo ($item["name"]); ?></a></td>
        <td align="center"><?php echo ($item["info"]); ?></td>
        <td align="center"><?php echo ($item["count"]); ?></td>
        <td align="center"><?php echo ($item["price"]); ?></td>
        <td align="center"><?php echo ($item["providername"]); ?></td>
        <td align="center"><?php echo ($item["create_at"]); ?></td>
        <td align="center">
                  <a href="/goods/index.php/Home/Editgoods?id=<?php echo ($item["id"]); ?>">编辑</a> | <a href="javascript:void;" class="delete_btn">删除</a>
                 </td>
      </tr>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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
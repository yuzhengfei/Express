<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>管理系统登录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="/express/Public/css/reset.css">
        <link rel="stylesheet" href="/express/Public/css/supersized.css">
        <link rel="stylesheet" href="/express/Public/css/style.css">


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>物资管理系统登录</h1>
            <form>
                <input type="text" name="username" class="name" placeholder="用户名">
                <input type="password" name="password" class="password" placeholder="密    码">
                <button type="submit" class="submit_btn">登录</button>
                <div class="error"><span>+</span></div>
            </form>
            
        </div>
       
        <!-- Javascript -->
        <script type="text/javascript" src="/express/Public/js/jquery.js"></script>
        <script src="/express/Public/js/jquery-1.8.2.min.js"></script>
        <script src="/express/Public/js/supersized.3.2.7.min.js"></script>
        <script src="/express/Public/js/supersized-init.js"></script>
        <script src="/express/Public/js/scripts.js"></script>
        <script src="/express/Public/js/index.js"></script>
        <script src="/express/Public/libs/layer/layer.js"></script>

    </body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta property="wb:webmaster" content="14cdfd3e64378753" />
    <meta property="qc:admins" content="55316143621610034374526375" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/app/webroot//ico/favicon.png">

    <title>码字 - 码农专用CMS</title>

    <!-- Bootstrap core CSS -->
    <link href="/app/webroot/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/app/webroot/css/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="/app/webroot/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h2 class="text-muted">码字

        </h2>
        <ul class="nav nav-justified">
          <li class="active"><a href="#">首页</a></li>
          <li><a href="<?php echo $this->html->url(array('controller'=>'main', 'action'=>'feature')); ?>">特性</a></li>
          <li><a href="<?php echo $this->html->url(array('controller'=>'main', 'action'=>'service')); ?>">服务</a></li>
          <li><a href="<?php echo $this->html->url(array('controller'=>'main', 'action'=>'install')); ?>">自部署</a></li>
          <li><a href="#">重要理念</a></li>
          <li><a href="#">CMS革命</a></li>
          <li><a href="#">专业版</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>码农专用CMS</h1>
        <p class="lead">只面向Geek, Programmer, Hacker, 不面向对象</p>
        <p>
            <a class="btn btn-lg btn-success" href="<?php echo $this->html->url(array('controller'=>'Main', 'action'=>'register'))?>" role="button">立即注册, 永久免费!</a>
            <p class="text-muted"><a href="<?php echo $this->html->url(array('controller'=>'Main', 'action'=>'login'))?>">登录</a></p>
        </p>

      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Markdown-贴心书写工具</h2>
          <p>全面支持Markdown书写，可视化编辑。将所见即所得进行到底。</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
       </div>
       <div class="col-lg-4">
          <h2>Sync-多平台同步</h2>
          <p>一键同步博文到国内主流码农社区，包括CSDN，博客园等。一键发布代码至主流开源社区，如Github。</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Dashboard-码农看板</h2>
          <p>包含比特币看板，Github看板，技能看板等常用工具。个人技术优势和短板，一看便知！</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>GTD-内置番茄钟</h2>
          <p>打卡上番茄种，记录你的专家之路！全球首个GTD理念和一万小时天才理论的联合加持的CMS系统。</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Sale！-干货电商</h2>
          <p>大家书写的干货，应该为大家创造更多的价值！</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Branding-支持自媒体</h2>
          <p>一键同步内容到微信公众账号，建立你的业界品牌！</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>

      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; apps4coder 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
?>

<?php $this->beginPage() ?>
<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">

	<title>软件工程</title>


  
	<?=Html::cssFile('@web/newcss/css/bootstrap.min.css')?>
	<?=Html::cssFile('@web/newcss/owl-carousel/owl.carousel.css')?>
	<?=Html::cssFile('@web/newcss/css/style.css')?>
	<?=Html::cssFile('@web/newcss/font-awesome-4.4.0/css/font-awesome.min.css')?>

	<?=Html::cssFile('@web/frontassets/css/animation.css')?>
	<?=Html::cssFile('@web/frontassets/css/lrtk.css')?>
	<?=Html::cssFile('@web/frontassets/css/styles.css')?>
	<?=Html::cssFile('@web/frontassets/css/view.css')?>
	
	
	
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>

 <body class="index-page">
<?php $this->beginBody() ?>
	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">第一个博客</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.php?r=page/index">首页</a>
                    </li>
					<li>
                        <a class="page-scroll" href="archive.html">时间轴</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?r=page/picture">相册</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../backend/web/index.php?r=login/login">后台</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->
	

	<!-- CAROUSEL -->
	<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel" data-interval="4000">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="../web/newcss/images/banner1.jpg" >
				<div class="container">
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>这是一个集合了科技与时间轴的博客</h1>
						<hr>
						<p>Nunc eu velit metus. Donec in massa libero. Donec bibendum orci a lorem scelerisque luctus. Aliquam et ante quis erat semper pretium.</p>
						<a href="#lf" name="1F" class="btn btn-primary btn-xl page-scroll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

					</div>
				</div><!-- /header-text -->
				</div>
			</div>
			<div class="item">
				<img src="../web/newcss/images/banner2.jpg" >
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>黑色主题</h1>
						<hr>
						<p>Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa pellentesque accumsan eu id nibh. Donec accumsan ut mi.</p>
						<div class="nu">
						<a href="#lf"  class="btn btn-primary btn-xl page-scroll" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
					</div>
				</div><!-- /header-text -->
			</div>
			
		</div>
		<a href="#pic" class="myscroll"><p style="font-size: 20px;color:#fff">文章浏览</p></a>
		<div id="pic" ></div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>

	</div> <!-- Carousel -->
	

	<!-- /////////////////////////////////////////Content -->
	
	
	<div id="lf" class="container" name="lf">
		<?= $content ?>
	</div>
  
  
  
  
  
  
  
	<?=Html::jsFile('@web/newcss/js/jquery-2.1.1.js')?>
	<?=Html::jsFile('@web/newcss/js/bootstrap.min.js')?>
	<?=Html::jsFile('@web/newcss/js/agency.js')?>
	<?=Html::jsFile('@web/newcss/js/jquery.easing.min.js')?>
	<?=Html::jsFile('@web/newcss/js/classie.js')?>
	<?=Html::jsFile('@web/newcss/js/cbpAnimatedHeader.js')?>


	<?=Html::jsFile('@web/frontassets/js/jquery.js')?>
	<?=Html::jsFile('@web/frontassets/js/js.js')?>
	<?=Html::jsFile('@web/frontassets/js/modernizr.js')?>
	<?=Html::jsFile('@web/frontassets/js/silder.js')?>>
  
  <?php $this->endBody() ?>
	
</body>
</html>

<?php $this->endPage() ?>
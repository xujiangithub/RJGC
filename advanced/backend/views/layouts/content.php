<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    
    <!-- Bootstrap core CSS     -->
    <?=Html::cssFile('@web/admincss/css/bootstrap.min.css')?>

    <!-- Animation library for notifications   -->
    <?=Html::cssFile('@web/admincss/css/animate.min.css')?>
    
    <!--  Light Bootstrap Table core CSS    -->
    <?=Html::cssFile('@web/admincss/css/light-bootstrap-dashboard.css')?>
    
    
    <?=Html::cssFile('@web/admincss/css/demo.cs')?>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    
        
    <!--     Fonts and icons     -->
    <?=Html::cssFile('@web/admincss/css/pe-icon-7-stroke.css')?>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body> 

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">  
    
    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
    
    
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    博客后台管理
                </a>
            </div>
                       
            <ul class="nav">
                <li>
                    <a href="index.php?r=articles/index">
                        <i class="pe-7s-graph"></i> 
                        <p>文章管理</p>
                    </a>            
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-user"></i> 
                        <p>用户管理</p>
                    </a>
                </li> 
            </ul> 
    	</div>
    </div>
    
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="collapse navbar-collapse">       
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
                     
              <div class="container">
		<?= $content ?>
	</div>       

        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <!-- <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul> -->
                </nav>
               <!--  <p class="copyright pull-right">
                    &copy; 2015 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p> -->
            </div>
        </footer>
        
        
    </div>   
</div>


</body>

    <!--   Core JS Files   -->
    <?=Html::jsFile('@web/admincss/js/jquery-1.10.2.js')?>
   <?=Html::jsFile('@web/admincss/js/bootstrap.min.js')?>
	
	<!--  Checkbox, Radio & Switch Plugins -->
	<?=Html::jsFile('@web/admincss/js/bootstrap-checkbox-radio-switch.js')?>
	
	<!--  Charts Plugin -->
	<?=Html::jsFile('@web/admincss/js/chartist.min.js')?>

    <!--  Notifications Plugin    -->
    <?=Html::jsFile('@web/admincss/js/bootstrap-notify.js')?>
    
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <?=Html::jsFile('@web/admincss/js/light-bootstrap-dashboard.js')?>
	
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<?=Html::jsFile('@web/admincss/js/demo.js')?>

	
</html>
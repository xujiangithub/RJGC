<!DOCTYPE HTML>

<?php
use yii\helpers\Html;
?>

<html>
<head>
<title>Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
       --> <?=Html::cssFile('@web/css_assets/css/style.css')?>
</head>
<body>
<header>

<!--start header_btm -->
<div class="content_bg">
<div class="wrap">
<div class="wrapper">
	<div class="content">	
<div class="main">
	<div class="contact">
		<div class="section group">				
				<div class="col span_1_of_2">
					<div class="contact_info">
			    	 	<h2>反馈信息区域</h2>
			    	 		<div class="map">
					   			
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h2>Now Address </h2>
						<p>浙江农林大学东湖校区</p>
						<p>B3寝室楼420寝室</p>
						<p>China</p>
				   		<p>Phone:17826875951</p>
				   		<p>Age: 23</p>
				 	 	<p>Email: <span>1413921497@qq.com</span></p>
				   		<p>Create By: <span>XuJian</span>, <span>WuXudong</span>, <span>HuangMeige</span></p>
				   </div>
				   <div class="clear"></div>
				</div>				
				<div class="col span_2_of_4">
				  <div class="contact-form">
				  	<h2 class="style">Contact Us</h2>
					       <form method="post" action="contact-post.html">
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input id="email" name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>CONTENT</label></span>
						    	<span><textarea id="content" name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<div class="button"><span><a id="sub" href="#">Submit Us</a></span></div>
						  </div>
					    </form>
				    </div>
  				</div>		
  			<div class="clear"></div>
		  </div>
	</div>
	</div>
</div>
</div>
</div>
</div>

<script>

var email = document.getElementById('email');
var content = document.getElementById('content');
var sub = document.getElementById('sub');

sub.onclick=function(){

	if (email.value == ""){
		alert("邮箱必填哦，这是我们联系你的保证");
		return false;
	}
	if (content.value == ""){
		alert("您还没有合输入您的反馈内容哦");
	}

    $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://localhost/myblog/frontend/web/index.php?r=display/fankui",    //请求发送到
         data : {email:email.value, content:content.value},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
            if (result.status){
                alert("我们已经收到您的反馈，会尽快处理并联系您，谢谢！！！");
                email.value="";
                content.value="";

            }
            else{
                alert("呀，您的反馈有问题呢，请先查看您的输入再重新提交一次把，谢谢哦");
            }
         },
         error:function(){
            alert("系统错误");
         }
     });
}

</script>


</body>
</html>
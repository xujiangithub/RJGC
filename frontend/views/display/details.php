<!DOCTYPE HTML>

<?php
use yii\helpers\Html;
use  yii\web\Session;
use yii\bootstrap\ActiveForm;
?>

<html>
<head>
<title>Details`</title>
<style>
#pinglun{
border:0px solid green;
margin:20px;
float:right;
/*margin:20px auto;*/
}


.idcss{
    font-size: 25px;
    color:#ffff00;
}
.namecss{
    margin-left: 20px;
    width:550px;
}

.messagecss{
    margin-left: 20px;
    width:550px;
}

</style>

<style> 
body{background: -webkit-radial-gradient(center center,circle,#666,#000); margin: 0;} 
div{margin: 0; padding: 0;} 
.box{padding-top: 50px; width:410px; margin: 0 auto;} 
.clock{position: relative; width:400px; height: 400px; border: 5px solid #fff; border-radius: 200px; background:-webkit-radial-gradient(center center,circle,#fff,#bbb); box-shadow: 1px 1px 30px rgba(0, 0, 0, 0.8); } 
.clock .clock-xin{position: absolute; top: 50%; left: 50%; width:30px; height: 30px; border-radius: 15px; background: #eee;margin:-15px 0 0 -15px;} 
.clock .clock-xin2{position: absolute; top: 50%; left: 50%; width:12px; height: 12px; border-radius: 6px; background: #f00; z-index: 100; margin:-6px 0 0 -6px;} 
.clock .date{position: absolute; z-index: 3; top: 245px; left: 130px; font-size: 20px; color: #000; text-shadow: 1px 1px white; } 
.clock .hour{position: absolute; z-index: 3; top: 50%; left: 50%; width:160px; height: 6px; border-radius:5px; background: #000; -webkit-transform-origin: 10px 50%; margin:-3px 0 0 -10px;} 
.clock .min{position: absolute; z-index: 4;top: 50%; left: 50%; width:180px; height: 4px; border-radius:5px; background: #333; -webkit-transform-origin: 10px 50%; margin:-2px 0 0 -10px;} 
.clock .sec{position: absolute; z-index: 5; top: 50%; left: 50%; width:210px; height: 2px; background: #f00; -webkit-transform-origin: 30px 50%; margin:-1px 0 0 -30px;} 
.clock em{display: block; width: 2px; height: 5px; background: #000; position: absolute; top: 0; left: 0; -webkit-transform-origin: 50% 0; margin-left: -1px;} 
.clock em.ishour{width: 6px; height: 10px; margin-left: -3px;} 
.clock em.ishour i{font-size: 25px; color: #000; position: absolute; top: 12px; left: -7px;text-shadow: 1px 1px white; } 
</style> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
   --> <?=Html::cssFile('@web/css_assets/css/style.css')?>
       <?=Html::cssFile('@web/pl/pl.css')?>
</head>
<body>
<header>

<!--start header_btm -->
<div class="content_bg">
<div class="wrap">
<div class="wrapper">
<div class="content">	
<div class="main" >


        <!--  文章显示 -->
		          
        <div class="details">
		    <h2><?php echo $article_data['title']; ?></h2>
	            <div class="det-para">
	                <pre style="white-space: pre-wrap; background: #333333">
                        <span style="font-size:25px;color:#EEEED1"><?php echo $article_data['content']; ?></span>
                    </pre>
		        </div>
		</div>
	    <div class="clear"></div>

        <!-- end -->





        <!-- 评论列表显示模块  -->

        <div class="col-md-8" >

        <div id="pinglun" style="width:95%;border-left:#C1FFC1 solid 20px;">

        <?php foreach($comment_data as $v){; ?>

        <li style="border-right:#C1FFC1 dashed 5px;border-top-right-radius:80px;border-bottom-right-radius:80px;border-top:#C1FFC1 dashed 5px;border-bottom:#C1FFC1 dashed 5px;background:  #4F4F4F">
            <div  style="margin-bottom:20px;margin-left:20px;margin-right:20px;">
                <p style="height:40px;background: #4F4F4F;color:#EEAD0E;font-size: 25px;text-align:left|center;margin-bottom: 10px;margin-left:20px;"><strong><?php echo $v['name']; ?>:</strong></p>
                <pre style="white-space: pre-wrap;background:#4F4F4F;margin-left: 40px;margin-right:50px;color: #C0FF3E;font-size: 20px"><?php echo $v['content']; ?></pre>
                <p style="color: #EEE685;margin-top: 15px;margin-left:15px;"><?php echo $v['comment_time']; ?></p>
            </div>
        </li>
        <div style="width:100%;height:0;margin-bottom: 25px;"></div>

        <?php }?>
		</div>

        <!-- end -->


        <div style="height:60px"></div>

        </div>


         <!-- 用户评论-表单  -->


<!--
    <form class="dark-matter">
      
        <a href="" style="width:80px;float:right;font-size: 25px;color: #ffff00">[登录]</a>
        <div class="idcss" >评论区</div>

        <div style="height:0px;overflow-y: hidden"><textarea id="article_id"><?php echo $model->article_id ?></textarea></div>
        <textarea type="text" id="content"></textarea>
        <input type="button" value="Send" id="sendbtn" />


    </form>-->
<div class="col-md-4">
<div id="plpl" style="overflow-y: hidden;">
    <form action="" method="post" class="dark-matter">
<a id="loggin" style="width:80px;float:right;font-size: 25px;color: #ffff00">去登录</a>
<a id="signin" style="width:80px;float:right;font-size: 25px;color: #ffff00">去注册</a>
        <div class="idcss" >评论区</div>
<div style="height:0px;overflow-y: hidden"><textarea id="article_id"><?php echo $model->article_id ?></textarea></div>
<label style="margin-top:20px">
<span>Message</span>
<textarea  id="content" name="message" placeholder="Your Message to Us"></textarea>
</label>
<label>
<span>&nbsp;</span>
<input type="button" class="button" value="Send" id="sendbtn"/>
</label>
</form>
</div>


<div id="qudenglu" style="height:0px;overflow-y: hidden;">
<form action="" method="post" class="dark-matter">
<a id="qupinglun" style="width:80px;float:right;font-size: 25px;color: #ffff00">去评论</a>
        <div class="idcss" >登录</div>
<label style="margin-top:50px">
<span>Your Name</span>
<input id="dengluname" type="text" name="name" placeholder="Your Full Name" />
</label>
<label>
<span>Your Email</span>
<input id="dengluemail" type="email" name="email" placeholder="Valid Email Address" />
</label>
<label>
<span>&nbsp;</span>
<input type="button" class="button" value="log in" id="loglog"/>
</label>
</form>

</div>


<div id="quzhuce" style="height:0px;overflow-y: hidden;">
<form action="" method="post" class="dark-matter">
<a id="qupinglunba" style="width:80px;float:right;font-size: 25px;color: #ffff00">去评论</a>
        <div class="idcss" >注册</div>
<label style="margin-top:50px">
<span>Your Name</span>
<input id="zhucename" type="text" name="name" placeholder="Your Full Name" />
</label>
<label>
<span>Your Email</span>
<input id="zhuceemail" type="email" name="email" placeholder="Valid Email Address" />
</label>
<label>
<span>&nbsp;</span>
<input type="button" class="button" value="sign up" id="signsign"/>
</label>
</form>
</div>

    <!--  Clock  -->
<div class="box"> 
<div class="clock" id="clock"> 
<div class="clock-xin"></div> 
<div class="clock-xin2"></div> 
<div id="date" class="date"></div> 
<div id="hour" class="hour"></div> 
<div id="min" class="min"></div> 
<div id="sec" class="sec"></div> 
</div> 
</div> 
<script> 
window.onload = function() { 
var winHeight = document.documentElement.clientHeight; 
document.getElementsByTagName('body')[0].style.height = winHeight+'px'; 
var $clock = document.getElementById('clock'), 
$date = document.getElementById('date'), 
$hour = document.getElementById('hour'), 
$min = document.getElementById('min'), 
$sec = document.getElementById('sec'), 
oSecs = document.createElement('em'); 
for (var i = 1; i < 61; i++) { 
var tempSecs = oSecs.cloneNode(), 
pos = getSecPos(i); 
if(i%5==0){ 
tempSecs.className = 'ishour'; 
tempSecs.innerHTML = '<i style="-webkit-transform:rotate('+(-i*6)+'deg);">'+(i/5)+'</i>'; 
} 
tempSecs.style.cssText='left:'+pos.x+'px; top:'+pos.y+'px; -webkit-transform:rotate('+i*6+'deg);'; 
$clock.appendChild(tempSecs); 
} 
// 圆弧上的坐标换算 
function getSecPos(dep) { 
var hudu = (2*Math.PI/360)*6*dep, 
r = 200; //半径大小 
return { 
x: Math.floor(r + Math.sin(hudu)*r), 
y: Math.floor(r - Math.cos(hudu)*r), 
} 
} 
;(function() { 
// 当前时间 
var _now = new Date(), 
_h = _now.getHours(), 
_m = _now.getMinutes(), 
_s = _now.getSeconds(); 
var _day = _now.getDay(); 
_day = (_day==0)?7:_day; 
if(_day==1){ 
_day = "一"; 
}else if(_day==2){ 
_day = "二"; 
}else if(_day==3){ 
_day = "三"; 
}else if(_day==4){ 
_day = "四"; 
}else if(_day==5){ 
_day = "五"; 
}else if(_day==6){ 
_day = "六"; 
}else if(_day==7){ 
_day = "日"; 
} 
$date.innerHTML = _now.getFullYear()+'-'+(_now.getMonth()+1)+'-'+_now.getDate()+' 星期'+_day; 
//绘制时钟 
var gotime = function(){ 
var _h_dep = 0; 
_s++; 
if(_s>59){ 
_s=0; 
_m++; 
} 
if(_m>59){ 
_m=0; 
_h++; 
} 
if(_h>12){ 
_h = _h-12; 
} 
//时针偏移距离 
_h_dep = Math.floor(_m/12)*6; 
$hour.style.cssText = '-webkit-transform:rotate('+(_h*30-90+_h_dep)+'deg);'; 
$min.style.cssText = '-webkit-transform:rotate('+(_m*6-90)+'deg);'; 
$sec.style.cssText = '-webkit-transform:rotate('+(_s*6-90)+'deg);'; 
}; 
gotime(); 
setInterval(gotime, 1000); 
})(); 
}; 
</script> 

   <!-- Clock end  -->


</div>
        <!-- end  -->
   
<!--  表单切换js代码   -->
<script>
    
var plpl = document.getElementById('plpl');
var quzhuce = document.getElementById('quzhuce');
var log = document.getElementById('loggin');
var qudenglu = document.getElementById('qudenglu');
var qupinglun = document.getElementById('qupinglun');
var sign = document.getElementById('signin');

log.onclick=function(){
    var total_height =  qudenglu.scrollHeight;//文章总高度
  
    qudenglu.style.height = total_height + 'px';
    plpl.style.height = 0 + 'px';    
}

qupinglun.onclick=function(){
    var total_height =  plpl.scrollHeight;//文章总高度
  
    plpl.style.height = total_height + 'px';
    qudenglu.style.height = 0 + 'px';    
}

qupinglunba.onclick=function(){
    var total_height =  plpl.scrollHeight;//文章总高度
  
    plpl.style.height = total_height + 'px';
    quzhuce.style.height = 0 + 'px';    
}


signin.onclick=function(){
    
    var total_height =  quzhuce.scrollHeight;//文章总高度
  
    quzhuce.style.height = total_height + 'px';
    plpl.style.height = 0 + 'px';
}
</script>


<!--  登录表单js代码  -->
<script>

var loglog = document.getElementById('loglog');
var dengluname = document.getElementById('dengluname');
var dengluemail = document.getElementById('dengluemail');

loglog.onclick=function(){
    alert(1111);
    alert(dengluname.value);
    alert(dengluemail.value);

    $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://localhost/myblog/frontend/web/index.php?r=display/youkelogin",    //请求发送到
         data : {dengluname:dengluname.value, dengluemail:dengluemail.value},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
            if (result.status == "true"){
                alert("登录成功");

            }
            else{
                alert("用户名或者密码错误");
            }
         },
         error:function(){
            alert("系统错误");
         }
     });
    alert(333);
}

</script>


<!--  注册表单js代码  -->
<script>
    
var signsign = document.getElementById('signsign');
var zhucename = document.getElementById('zhucename');
var zhuceemail = document.getElementById('zhuceemail');
var plpl = document.getElementById('plpl');
var quzhuce = document.getElementById('quzhuce');

signsign.onclick=function(){

    $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://localhost/myblog/frontend/web/index.php?r=display/youkezhuce",    //请求发送到
         data : {zhucename:zhucename.value, zhuceemail:zhuceemail.value},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
            if (result.status == true){
                alert("注册成功");
                var total_height =  plpl.scrollHeight;//文章总高度
  
                plpl.style.height = total_height + 'px';
                quzhuce.style.height = 0 + 'px';   
            }
            else if (result.status == "hasname"){
                alert("该昵称已经被注册");
            }
            else if (result.status == "hasemail"){
                alert("该邮箱已经被使用");
            }
         },
         error:function(){
            alert("系统错误");
         }
     });
}

</script>


<script>
    
//alert(111111);
var btn = document.getElementById('sendbtn');
var content = document.getElementById("content");
var arid = document.getElementById('article_id');


var pinglun = document.getElementById('pinglun');


//此处点击按钮提交数据的jquery
btn.onclick = function(){
        if (content.value == ""){
            alert("评论内容不能为空");
        }
        else{
            $.ajax({
         type : "GET",  
         async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
         url : "http://localhost/myblog/frontend/web/index.php?r=display/youkepinglun",    //请求发送到
         data : {content:content.value, arid:arid.value},
         dataType : "json",        //返回数据形式为json
         success : function(result) {
             //请求成功时执行该函数内容，result即为服务器返回的json对象

               // if (result.status)
                    alert("评论成功");

                $.ajax({
                type : "GET",  
                async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
                url : "http://localhost/myblog/frontend/web/index.php?r=display/commentlist",    //请求发送到
                data : {arid:arid.value},
                dataType : "json",        //返回数据形式为json
                success : function(res) {
                    //请求成功时执行该函数内容，result即为服务器返回的json对象

                   //     alert("cgcg");
                  //      alert(result.length);
                        $('#pinglun').innerHTML="";
                  var con=[];
                    if (res){
                        for(var i=0;i<res.length&&i<5;i++){     

                            con +="<li style='border-right:#C1FFC1 dashed 5px;border-top-right-radius:80px;border-bottom-right-radius:80px;border-top:#C1FFC1 dashed 5px;border-bottom:#C1FFC1 dashed 5px;background:  #4F4F4F'><div  style='margin-bottom:20px;margin-left:20px;margin-right:20px;'><p style='height:40px;background: #4F4F4F;color:#EEAD0E;font-size: 25px;text-align:left|center;margin-bottom: 10px;margin-left:20px;'><strong>";
                            con += res[i].name;
                            con += ":</strong></p><pre style='white-space: pre-wrap;background:#4F4F4F;margin-left: 40px;margin-right:50px;color: #C0FF3E;font-size: 20px'>";
                            con += res[i].content;
                            con += "</pre><p style='color: #EEE685;margin-top: 15px;margin-left:15px;'>";
                            con += res[i].comment_time;
                            con += "</p></div></li><div style='width:100%;height:0;margin-bottom: 30px;'></div>";
                        }  
                             


                        $('#pinglun').html(con);
                    }
                      //  content="";
                }
                });
            }
        });
}




}


</script>




<div style="height:1300px;width:500px;margin-top: 20px">

</div>



	</div>
	</div>
</div>
</div>
</div>
<!--
<script>
var btn = document.getElementById('lookmore');
var obj = document.getElementById('pinglun');
    var total_height =  obj.scrollHeight;//文章总高度
    var flag = 0;//判断
    if(total_height>flag){
    	btn.onclick = function(){
    		if (flag == 0){
    			flag = 1;
    			obj.style.height = total_height + 'px';
    		}
    		else{
    			flag = 0;
    			obj.style.height = 0 + 'px';
    		}
    	}
    
    }
</script>
-->
</body>
</html>
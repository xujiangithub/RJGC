<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?=Html::cssFile('@web/albumcss/assets/bootstrap/css/bootstrap.min.css')?>
       <?=Html::cssFile('@web/albumcss/assets/animate/animate.css')?>
       <?=Html::cssFile('@web/albumcss/assets/animate/set.css')?>
       <?=Html::cssFile('@web/albumcss/assets/gallery/blueimp-gallery.min.css')?>
       <?=Html::cssFile('@web/albumcss/images/favicon.ico')?>
       <?=Html::cssFile('@web/albumcss/images/favicon.ico')?>
       <?=Html::cssFile('@web/albumcss/assets/style.css')?>
       <?=Html::cssFile('@web/css_assets/css/style.css')?>    
    <?=Html::cssFile('@web/shouye/css/templatemo-style.css')?>

    </head>
    <body>
    <header>
        <div class="header_bg">
            <div class="wrap">
                <div class="wrapper">
                    <div class="logo">
                        <h1><a href="index.php?r=display/index.php">三只*个人博客</a></h1>
                    </div>
                    <div class="h_nav">
                        <ul class="nav">
                            <li class="active"><a href="index.php?r=display/index">Home</a></li>
                            <li><a href="index.php?r=display/wedding">article</a></li>
                            <li><a href="index.php?r=display/gallery">gallery</a></li>
                            <li><a href="index.php?r=display/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </header>

    <?= $content ?>

    <div class="clear"></div>
<div class="content_btm_bg">
<div class="wrap">
<div class="wrapper">
            <div class="grids_of_3">
                <div class="col_1_of_3 span_1_of_3">
                    <h3>博客信息</h3>
                    <div class="text1-nav">
                        <ul>
                            <li style="height:40px"><a >留言数量：<span id="liuyanrenshu"></span>条</a></li>
                            <li style="height:40px"><a >博文数量：<span id="blogarticle"></span>篇</a></li>
                            <li style="height:40px"><a >博客发布时间：2017-4-20</a></li>
                            <li><a >博客最近维护时间：2017-5-1</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col_1_of_3 span_1_of_3">
                    <h3>gallery overview</h3>
                    <section>
                        <ul class="lb-album top">
                            <li>
                                <a href="#image-1">
                                    <img src="../web/css_assets/images/03c6774ff0831e263c3aca5e9d66b503.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-1">
                                    <img src="../web/css_assets/images/03c6774ff0831e263c3aca5e9d66b503.jpg" alt="">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-2">
                                    <img src="../web/css_assets/images/0a6f8fae4a51f09c1e37f07409ab77d8.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-2">
                                        <img src="../web/css_assets/images/0a6f8fae4a51f09c1e37f07409ab77d8.jpg" alt="">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-3">
                                    <img src="../web/css_assets/images/3d2b21ba66dac6afb240733a88ff016e.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-3">
                                    <img src="../web/css_assets/images/3d2b21ba66dac6afb240733a88ff016e.jpg" alt="image03">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-4">
                                    <img src="../web/css_assets/images/4b37b84377b3b7ae4079554014e08ee5.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-4">
                                    <img src="../web/css_assets/images/4b37b84377b3b7ae4079554014e08ee5.jpg" alt="image04">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="lb-album">
                            <li>
                                <a href="#image-5">
                                    <img src="../web/css_assets/images/5b3c712d89ad8fb30867d99610effc2b.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-5">
                                    <img src="../web/css_assets/images/5b3c712d89ad8fb30867d99610effc2b.jpg" alt="">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-6">
                                    <img src="../web/css_assets/images/5bab860d4328177623ef85e3ebe4ac85.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-6">
                                        <img src="../web/css_assets/images/5bab860d4328177623ef85e3ebe4ac85.jpg" alt="">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-7">
                                    <img src="../web/css_assets/images/05d862b4c9b076cbaf136db969ca28d0.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-7">
                                    <img src="../web/css_assets/images/05d862b4c9b076cbaf136db969ca28d0.jpg" alt="image03">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-8">
                                    <img src="../web/css_assets/images/10eb65f1b677526228c0d34ddd1a7737.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-8">
                                    <img src="../web/css_assets/images/10eb65f1b677526228c0d34ddd1a7737.jpg" alt="image04">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="lb-album">
                            <li>
                                <a href="#image-1">
                                    <img src="../web/css_assets/images/315c64cd926cbfde4d724666e3e44952.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-1">
                                    <img src="../web/css_assets/images/315c64cd926cbfde4d724666e3e44952.jpg" alt="">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-2">
                                    <img src="../web/css_assets/images/440aaf4d50703e50f964aafc7bb60425.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-2">
                                        <img src="../web/css_assets/images/440aaf4d50703e50f964aafc7bb60425.jpg" alt="">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-3">
                                    <img src="../web/css_assets/images/969c260ada3ad1ef856162324824e01c.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-3">
                                    <img src="../web/css_assets/images/969c260ada3ad1ef856162324824e01c.jpg" alt="image03">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                            <li>
                                <a href="#image-4">
                                    <img src="../web/css_assets/images/2425eed7a7bfc41e9259c2d0580ee521.jpg" alt="">
                                    <span> </span>
                                </a>
                                <div class="lb-overlay" id="image-4">
                                    <img src="../web/css_assets/images/2425eed7a7bfc41e9259c2d0580ee521.jpg" alt="image04">
                                    <a href="#page" class="lb-close"> </a>
                                </div>
                            </li>
                        </ul>
                </section>
                </div>
                <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
                <div class="col_1_of_3 span_1_of_3">
                    <h3>博客创始人</h3>
                    
                    <div class="grid_1_of_2 images_1_of_2">
                <div class="grid_img">
                    <img style="width:200px;height:100px" src="../web/our_img/xujian.jpg">
                    </div>
                    <div class="grid_txt">
                    <p><br/>徐健  男<br/>浙农林大大三学生 <br/>计算机技术与科学专业</p>
                     </div>
                     <div class="clear"></div>
                </div>
                    
                </div>
                <div class="clear"></div>
            </div>
</div>
</div>

<script>

window.onload = function(){
    blogdata();
}

    function blogdata(){
        $.ajax({
            type : "GET",  
            async : true,            //异步请求（同步请求将会锁住浏览器，用户其他操作必须等待请求完成才可以执行）
            url : "http://localhost/myblog/frontend/web/index.php?r=display/bloginfo",    //请求发送到
            data : {},
            dataType : "json",        //返回数据形式为json
            success : function(result) {
             //请求成功时执行该函数内容，result即为服务器返回的json对象
                document.getElementById('liuyanrenshu').innerHTML = result.num;
                document.getElementById('blogarticle').innerHTML =result.article_num;
            }
        })
     } 

</script>



<?=Html::jsFile('@web/albumcss/assets/jquery.js')?>
<?=Html::jsFile('@web/albumcss/assets/wow/wow.min.js')?>
<?=Html::jsFile('@web/albumcss/assets/bootstrap/js/bootstrap.js')?>
<?=Html::jsFile('@web/albumcss/assets/mobile/touchSwipe.min.js')?>
<?=Html::jsFile('@web/albumcss/assets/respond/respond.js')?>
<?=Html::jsFile('@web/albumcss/assets/gallery/jquery.blueimp-gallery.min.js')?>
<?=Html::jsFile('@web/albumcss/assets/script.js')?>
 <?=Html::jsFile('@web/shouye/js/jquery-1.11.3.min.js')?>    
        <?=Html::jsFile('@web/shouye/js/tether.min.js')?>    
        <?=Html::jsFile('@web/shouye/js/bootstrap.min.js')?>

    </body>
    </html>
<?php $this->endPage() ?>
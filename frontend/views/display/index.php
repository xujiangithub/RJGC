<!DOCTYPE HTML>

<?php
use yii\helpers\Html;
?>

<html>
<head>
<title>Index</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?=Html::cssFile('@web/css_assets/css/style.css')?>
</head>
<body>
<header>

    </div>
<!--start header_btm -->
    <div class="content_bg">
        <div class="wrap">
            <div class="wrapper">
                <div class="content">

      

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title"><span style="font-size:45px">Introduction</span></h2>
                        <p class="tm-subtitle">该博客属于徐健，吴旭东，黄美革三人所有。博客使用Yii框架搭建，后台使用GII工具生成，数据库为mysql，博客为初创，若有不足之处，我们会尽量改进</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="../web/shouye/img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $shoubu_article_data[0]['title']; ?></h4>
                            <p class="tm-margin-b-20" style="color:#EEEED1;height:100px;overflow: hidden;text-overflow: ellipsis;"><?php echo $shoubu_article_data[0]['content']; ?></p>
                            <a href="index.php?r=display/details&id=<?php echo $shoubu_article_data[0]['id'] ?>" class="tm-btn text-uppercase">Read More</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="../web/shouye/img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $shoubu_article_data[1]['title']; ?></h4>
                            <p class="tm-margin-b-20" style="color:#EEEED1;height:100px;overflow: hidden;text-overflow: ellipsis;"><?php echo $shoubu_article_data[1]['content']; ?></p>
                            <a href="index.php?r=display/details&id=<?php echo $shoubu_article_data[1]['id'] ?>" class="tm-btn text-uppercase">Read More</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="../web/shouye/img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $shoubu_article_data[2]['title']; ?></h4>
                            <p class="tm-margin-b-20" style="color:#EEEED1;height:100px;overflow: hidden;text-overflow: ellipsis;"><?php echo $shoubu_article_data[2]['content']; ?></p>
                            <a href="index.php?r=display/details&id=<?php echo $shoubu_article_data[2]['id'] ?>" class="tm-btn text-uppercase">Read More</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="../web/shouye/img/tm-img-310x180-4.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $shoubu_article_data[3]['title']; ?></h4>
                            <p class="tm-margin-b-20" style="color:#EEEED1;height:100px;overflow: hidden;text-overflow: ellipsis;"><?php echo $shoubu_article_data[3]['content']; ?></p>
                            <a href="index.php?r=display/details&id=<?php echo $shoubu_article_data[3]['id'] ?>" class="tm-btn text-uppercase">Read More</a>    
                        </div>  

                    </div>
                </div> <!-- row -->

                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="tm-2-col-left">
                            
                            <h3 class="tm-gold-text tm-title"><span style="font-size: 35px"><?php echo $daping_article_data[0]['title']; ?></span></h3>
                         
                            <img src="../web/shouye/img/tm-img-660x330-1.jpg" alt="Image" class="tm-margin-b-40 img-fluid">
                            <pre style="white-space: pre-wrap; background: #333333;height:255px;overflow: hidden;text-overflow: ellipsis;">
                                <span style="font-size:25px;color:#EEEED1">
                                    <?php echo $daping_article_data[0]['content']; ?>
                                </span>
                            </pre>
                           
                            <a href="index.php?r=display/details&id=<?php echo $daping_article_data[0]['id'] ?>" class="tm-btn text-uppercase">Read More</a>

                        </div>
                    </div>
                    

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <div class="tm-2-col-right">

                            <div class="tm-2-rows-md-swap">
                                <div class="tm-overflow-auto row tm-2-rows-md-down-2">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <h3 class="tm-gold-text tm-title">
                                            推荐文章列表
                                        </h3>
                                        <nav>
                                            <ul class="nav">
                                            <?php foreach($tuijian_article_data as $v){; ?>
                                            	<li><a href="index.php?r=display/details&id=<?php echo $v['id'] ?>" class="tm-text-link"><?php echo $v['title']; ?></a></li>
                                            <?php } ?>
                                            </ul>
                                        </nav>    
                                    </div> <!-- col -->

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-xs-m-t">
                                        <h3 class="tm-gold-text tm-title">
                                            热评文章列表
                                        </h3>
                                        <nav>
                                            <ul class="nav">
                                            <?php foreach($reping as $v){; ?>
                                                <li><a href="index.php?r=display/details&id=<?php echo $v['id'] ?>" class="tm-text-link"><?php echo $v['title']; ?></a></li>
                                            <?php } ?>
                                                
                                            </ul>
                                        </nav>    
                                    </div> <!-- col -->
                                </div>                        
                                
                                <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <h3 class="tm-gold-text tm-title tm-margin-b-30"><span style="font-size: 25px">心灵之旅</span></h3>
                                        <?php foreach($xinling_article_data as $v){; ?>
                                            <div class="media tm-related-post">
                                          
                                            <div class="media-body">
                                                <a href="index.php?r=display/details&id=<?php echo $v['id'] ?>"><h4 class="media-heading tm-gold-text tm-margin-b-15"><?php echo $v['title']; ?></h4></a>
                                                <p class="tm-small-font tm-media-description" style="height:45px;overflow: hidden;text-overflow: ellipsis;"><?php echo $v['content']; ?></p>
                                            </div>
                                            </div>
                                        <?php } ?>
                                    
                                    </div>
                                </div>    
                            </div>

                        </div>
                        
                    </div>
                </div> <!-- row -->

            </div>
        </section>
        
  </div></div></div></div></header>

</body>
</html>
<!DOCTYPE HTML>

<?php
use yii\helpers\Html;
?>

<html>
<head>
<title>Wedding</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
       --> <?=Html::cssFile('@web/css_assets/css/style.css')?>
</head>
<body>
<header>

    </div>
<!--start header_btm -->
    <div class="content_bg">
        <div class="wrap">
            <div class="wrapper">
                <div class="content">
                    <div class="grids_of_4">
                    <?php foreach($article_list_4_1 as $v){; ?>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h3><?php echo $v['title']; ?></h3>
                            <p style="height:100px;overflow: hidden;text-overflow: ellipsis;"><?php echo $v['content']; ?></p>
                            <div class="button top"><span><a href="index.php?r=display/details&id=<?php echo $v['id'] ?>">查看更多</a></span></div>
                        </div>
                    <?php } ?>
                        <div class="clear"></div>
                    </div>
                    <div class="grids_of_4">
                    <?php foreach($article_list_4_2 as $v){; ?>
                        <div class="grid_1_of_4 images_1_of_4">
                            <h3><?php echo $v['title']; ?></h3>
                            <p style="height:100px;overflow: hidden;"><?php echo $v['content']; ?></p>
                            <div class="button top"><span><a href="index.php?r=display/details&id=<?php echo $v['id'] ?>">查看更多</a></span></div>
                        </div>
                    <?php } ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
<div class="content_bg">
<div class="wrap">
<div class="wrapper">
	<div class="content">	
	<?php foreach($article_list_1_3 as $v){; ?>
<div class="main">
	<div class="about-us">
		<div class="about-header">
			<h3><?php echo $v['title']; ?></h3>
			<div class="clear"> </div>
		</div>
						<div class="about-info">
							<p><?php echo $v['content']; ?></p>
							<div class="button top"><span><a href="index.php?r=display/details&id=<?php echo $v['id'] ?>">查看更多</a></span></div>
						</div>
			
		 	<!---End-about---->
		 </div>
	</div>
<?php } ?>
	</div>
</div>
</div>
</div>

</body>
</html>
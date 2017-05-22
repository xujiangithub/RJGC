<!DOCTYPE HTML>

<?php
use yii\helpers\Html;
?>

<html>
<head>
<title>Gallery</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
       --> 
       <?=Html::cssFile('@web/css_assets/css/style.css')?>


</head>
<body>
<header>

    </div>
<!--start header_btm -->
    <div class="content_bg">
	


<div id="works"  class=" clearfix grid"> 


	<?php foreach($album_list as $v){ ?>
		<figure class="effect-oscar  wowload fadeIn">
        <img style="width:100%;height:400px;margin:8px" src="../web/css_assets/images/<?php echo $v['pc_root']; ?>" alt="img01"/>
        <figcaption>
            <h2>Nature</h2>
            <p>Lily likes to play with crayons and pencils<br>
            <a style="width:100%;height:100%" href="../web/css_assets/images/<?php echo $v['pc_root']; ?>" title="1" data-gallery>View more</a></p>            
        </figcaption>
    	</figure>
	<?php } ?>




     
</div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>


</div></div></header>

</body>



</html>
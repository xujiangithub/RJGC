<!DOCTYPE HTML>

<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
?>

<html>
<head>
<title>Details`</title>



</head>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<? Pjax::begin()?>  
<?=Html::a('time',['display/time'],['class'=>'btn btn-lg btn-primary'])?>  
<h3>Current Time:<?php echo $time; ?></h3>  
<? Pjax::end()?>  


</html>

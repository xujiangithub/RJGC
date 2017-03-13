<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::cssFile('@web/adminassets/bootstrap/css/bootstrap.min.css')?>
    <?=Html::cssFile('@web/adminassets/css/b_login.css')?>
	<title>后台登录页面</title>
</head>
<body>
<div class="login">
	<div class="loginmain">
        <div class="col-md-5">
		<h2>登录管理系统</h2>
			<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-7">
        </div>
	</div>
	<div class="rightpic">
		<div id="container">
			<!-- <img src="../web/adminassets/picture/1.jpg" alt="" width="500px" height="330px">  -->
		</div>
	</div>
</div>

<?=Html::jsFile('@web/adminassets/public/js/jquery-3.1.1.min.js')?>
<?=Html::jsFile('@web/adminassets/bootstrap/js/bootstrap.min.js')?>
<?=Html::jsFile('@web/adminassets/public/js/delaunay.js')?>
<?=Html::jsFile('@web/adminassets/public/js/TweenMax.js')?>
<?=Html::jsFile('@web/adminassets/js/effect.js')?>

<?=Html::jsFile('@web/adminassets/js/b_login.js')?>
</body>
</html>
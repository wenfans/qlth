<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>后台管理</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/fonts/Open_Sans_400_300_600_700_subset_all.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/login.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<style>
    .error{color: red}
</style>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">

        <!--<img src="<?php /*echo Yii::app()->request->baseUrl; */?>/static/images/logo-big.png" alt=""/>--><h1>天天见面</h1>

</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'errorCssClass'=>'errorCssClass'
        ),
    ));?>
    <h3 class="form-title">登录</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
			<span>
			输入用户名和密码 </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <?php echo $form->label($model,'username',array('class'=>"control-label visible-ie8 visible-ie9")); ?>
        <?php echo $form->textField($model,'username',array('class'=>'form-control form-control-solid placeholder-no-fix','placeholder'=>"用户名",'autocomplete'=>"off")); ?>
        <?php echo $form->error($model,'username',array("class"=>"error")); ?>
    </div>
     <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <?php echo $form->label($model,'password',array('class'=>"control-label visible-ie8 visible-ie9")); ?>
        <?php echo $form->passwordField($model,'password',array('class'=>'form-control form-control-solid placeholder-no-fix','placeholder'=>"登录密码",'autocomplete'=>"off")); ?>
        <?php echo $form->error($model,'password',array("class"=>"error")); ?>
    </div>
    <div class="form-actions">
        <?php echo CHtml::submitButton('登录',array('class'=>"btn btn-success uppercase",'onclick'=>"return checkInput()")); ?>
        <?php echo $form->label($model,'rememberMe',array('class'=>"rememberme check")); ?>
        <?php echo $form->checkBox($model,'rememberMe'); ?>
    </div>
    <?php $this->endWidget(); ?>
    <!-- END LOGIN FORM -->
</div>
<div class="copyright">
    2016 © 天天见面.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/respond.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/metronic.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/layout.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/demo.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
<script>
    var runTime = 0;
    //$('#gencode').attr('disabled',true);
    $().ready(function(){
        $('#LoginForm_password').blur(function(){
			var username = $('#LoginForm_username').val();
			var password = $('#LoginForm_password').val();
			if(username!='' && password!=''){
				$.ajax({
	                url:'<?php echo $this->createUrl('site/checkPass')?>',
	                dataType:'json',
	                type:'post',
	                data:{username:username,password:password,csrf:$('input[name="csrf"]').val()},
	                success:function(data){
                    }
	            });
			}
        });
    });
    function checkInput(){
        if(document.getElementById("LoginForm_username").value == ''){
            alert('请输入用户名');
            return false;
        }
        if(document.getElementById("LoginForm_password").value == ''){
            alert('请输入密码');
            return false;
        }
    }
</script>
</html>

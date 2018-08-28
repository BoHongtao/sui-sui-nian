<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
<div class="login_top clearfix">
    <a href="index.html" class="login_logo"><img src="static/images/logo02.png"></a>
</div>
<div class="login_form_bg">
    <div class="login_form_wrap clearfix">
        <div class="login_banner fl"></div>
        <div class="slogan fl">日夜兼程 · 急速送达</div>
        <div class="login_form fr">
            <div class="login_title clearfix">
                <h1>用户登录</h1>
                <a href="<?= Url::to(['user/register'])?>">立即注册</a>
            </div>
            <div class="form_input">
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model,'username')->textInput(['class'=>'name_input','placeholder'=>"请输入用户名"]) ?>
                <div class="user_error">输入错误</div>
                 <?= $form->field($model,'userpwd')->textInput(['class'=>'pass_input','placeholder'=>"请输入密码"]) ?>
                <div class="pwd_error">输入错误</div>
                <div class="more_input clearfix">
                    <input type="checkbox" name="">
                    <label>记住用户名</label>
                    <a href="#">忘记密码</a>
                </div>
                <input type="submit" name="" value="登录" class="input_submit">
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

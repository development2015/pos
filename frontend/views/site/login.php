<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'POS';
$this->params['breadcrumbs'][] = $this->title;
?>
<h3 class="form-title"><?= Html::encode($this->title) ?></h3>
<?php $form = ActiveForm::begin(); ?>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <?= Html::activeTextInput($model,'username',['id'=>'form_control_1','class'=>'form-control form-control-solid placeholder-no-fix','placeholder'=>'Username']); ?>
            <span class="help-block"><?= Html::error($model,'username'); ?></span>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <?= Html::activePasswordInput($model,'password',['id'=>'form_control_1','class'=>'form-control form-control-solid placeholder-no-fix','placeholder'=>'Password']); ?>
            <span class="help-block"><?= Html::error($model,'username'); ?></span>
        </div>
        <div class="form-actions">
            <?= Html::submitButton('Login', ['class' => 'btn btn-success uppercase', 'name' => 'login-button']) ?>
        </div>


<?php ActiveForm::end(); ?>

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\file\FileInput;

use frontend\assets\UploadAsset;
UploadAsset::register($this);

$this->title = 'Upload Publikasi';
$this->params['breadcrumbs'][] = $this->title;
?>

<section>
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Silakan upload publikasi di sini:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
                'id' => 'form-signup', 
                'action' => 'index.php?r=site%2Fstorepub',
                'options' => ['enctype'=>'multipart/form-data']
            ]); ?>

                <?= $form->field($publikasi, 'title')->textInput(['autofocus' => true]) ?>

                <?= $form->field($publikasi, 'content')->widget(\yii\redactor\widgets\Redactor::className(),
                    [
                       'clientOptions' => [
                           'imageUpload' => \yii\helpers\Url::to(['/redactor/upload/image']),
                       ],
                    ])   ?>

                <?= $form->field($publikasi, 'thumbnail_file')->widget(FileInput::classname(), [
                    //'options' => ['accept' => 'image/*'],
                    'pluginOptions'=>['allowedFileExtensions'=>['jpg','jpeg','gif','png'],'showUpload' => false,],
                ]);   ?>

                <?= $form->field($publikasi, 'attachment_file')->widget(FileInput::classname(), [
                    //'options' => ['accept' => 'image/*'],
                    'pluginOptions'=>['allowedFileExtensions'=>['doc','docx','pdf'],'showUpload' => false,],
                ]);   ?>

                <?= $form->field($publikasi, 'tags[]')->checkboxList(
                            ['tips' => 'Tips', 'prosedur' => 'Prosedur', 'dashboard' => 'Dashboard', 'file' => 'File']
                   ); ?>

                <div class="form-group">
                    <?= Html::submitButton('Upload', ['class' => 'btn btn-primary', 'name' => 'Upload-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</section>
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\file\FileInput;

use frontend\assets\UploadAsset;
UploadAsset::register($this);

$this->title = 'SK Gugus Tugas COVID-19 KSPB';
$this->params['breadcrumbs'][] = $this->title;
?>

<section>
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <iframe src="images/downloadable/SK%20GUGUS%20TUGAS%20COVID-19%20KSPB.pdf" style="width: 100%; height: 600px"></iframe>

</div>
</section>
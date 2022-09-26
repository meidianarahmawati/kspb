<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\User;
use frontend\assets\AppAsset;
AppAsset::register($this);

$this->title = 'Publikasi '.$publikasi->id.' - '.$publikasi->title;
$this->params['breadcrumbs'][] = $this->title;

$author=User::findOne($publikasi->uploaded_by);
$arrtags=explode(" ",$publikasi->tags);
$tagcsv=implode(", ",$arrtags)
?>
<section>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="project-name overflow">
				<h2 class="bold"><?= Html::encode($this->title) ?></h2>
				<ul class="nav navbar-nav navbar-default">
					<li>
						<a><i class="fa fa-user"></i> <?=$author->username?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					</li>
					<li>
						<a><i class="fa fa-clock-o"></i> <?=date("d M Y",$publikasi->created_at)?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					</li>
					<li>
						<a><i class="fa fa-tag"></i> <?=$tagcsv?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					</li>
				</ul>
			</div>
			<div class="project-info overflow"><?=$publikasi->content?></div>
			<?php if($publikasi->attachment_src_filename!=null){ ?>
			<div class="project-info overflow">
				<h3>Attachment :</h3>
				<ul class="nav navbar-nav navbar-default">
					<li>
						<a href="images/downloadable/<?=$publikasi->attachment_web_filename?>"><i class="fa fa-paperclip"> <?=$publikasi->attachment_src_filename?></i></a>
					</li>
				</ul>
			</div>
			<?php } ?>
		</div>	    
    <br/>
    </div>
</div>
</section>
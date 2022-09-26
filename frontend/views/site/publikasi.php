<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\assets\AppAsset;
AppAsset::register($this);

$this->title = 'Publikasi KSPB';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile("@web/css/animate.min.css");
$this->registerJsFile("@web/js/jquery.isotope.min.js", ['depends' => 'frontend\assets\AppAsset']);
?>
	<section id="portfolio">
        <div class="container">
            <div class="row">
            <?php
                if (!Yii::$app->user->isGuest) {
                ?>
                <a href="index.php?r=site%2Fuploadpub" style="float: right;" class="btn btn-info"><i class="fa fa-upload"></i> Upload Publikasi</a>
            <?php } ?>
            </div>
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".tips">Tips&Trick</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".prosedur">Prosedur</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".dashboard">Dashboard</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".file">File</a></li>
                    <!-- <li><a class="btn btn-default" href="#" data-filter=".insta">Instagram</a></li> -->
                </ul><!--/#portfolio-filter-->
                
                <div class="portfolio-items">
                <?php foreach ($listpublikasi as $pub) { ?>
                    <div class="col-sm-6 portfolio-item <?=$pub->tags?>">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                <?php if($pub->thumbnail_src_filename!=null) { ?>
                                    <img src="images/downloadable/<?=$pub->thumbnail_web_filename?>" class="img-responsive" alt="">
                                <?php } else { ?>
                                    <img src="images/downloadable/noimg.png" class="img-responsive" alt="">
                                <?php } ?>
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a title="Masuk Artikel" href="index.php?r=site%2Fdetailpub&id=<?=$pub->id?>"><i class="fa fa-link"></i></a></li> 
                                    <?php if($pub->thumbnail_src_filename!=null) { ?>
                                        <li><a title="Perbesar Thumbnail" href="images/downloadable/<?=$pub->thumbnail_web_filename?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    <?php } else { ?>
                                        <li><a title="Perbesar Thumbnail" href="images/downloadable/noimg.png" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    <?php } ?>
                                    <?php if($pub->attachment_src_filename!=null) { ?>
                                        <li><a title="Download Attachment" href="images/downloadable/<?=$pub->attachment_web_filename?>" data-lightbox="example-set"><i class="fa fa-download"></i></a></li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2><?=$pub->title?></h2>
                            </div>
                        </div>
                    </div>

                <?php 
                }
                ?>
                    
                </div><!-- 
                <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li class="active"><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </section>
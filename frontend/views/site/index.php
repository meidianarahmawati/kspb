<?php

/* @var $this yii\web\View */
use frontend\assets\AppAsset;
AppAsset::register($this);

$this->title = 'Beranda';
?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" crossorigin="anonymous" SameSite="none Secure">
<style type="text/css">
    .single-service i:after {
        content:'\A';
        position:absolute;
        width:100%; height:100%;
        top:0; left:0;
        background:rgba(0,0,0,0.6);
        opacity:0;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
    }
    .single-service i:hover:after {
        opacity: 1;
    }
    .single-service h2{
        margin-bottom: 30px;
    }
    .single-service h2:hover{
        color: tomato;
    }
    .team-single-wrapper:after {
        content:'\A';
        position:absolute;
        width:100%; height:100%;
        top:0; left:0;
        background:rgba(0,0,0,0.6);
        opacity:0;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
    }
    .team-single-wrapper:hover:after {
        opacity: 1;
    }
</style>
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>KSPB Tanggap COVID-19</h1>
                        <p>Semakin meningkatnya penyebaran pandemi virus covid-19 di Indonesia  menuntut setiap warga ikut berperan dalam memutus tali penularan virus ini. Menyikapi kondisi ini, Dewan Komplek Statistik Pondok Bambu mengambil langkah-langkah untuk mencegah penyebaran virus di lingkungan komplek dengan membentuk Satgas Covid 19. KSPB semoga senantiasa menjadi rumah singgah yang sehat, aman dan nyaman bagi setiap warga penghuninya.</p>
                        <!-- <a href="#" class="btn btn-common">SIGN UP</a> -->
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <a href="index.php?r=site%2Fmengenal">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <span style="font-size: 60px; color: salmon;">
                              <i class="fa fa-viruses" style="padding:50px"></i>
                            </span>
                        </div>
                        <h2>Mengenal Virus Corona</h2>
                        </a>
                        <p>Penjelasan mengenai beberapa pertanyaan seputar virus corona, dimulai dari penjelasan mengenai apa itu Virus Corona, bagaimana virus corona menyebar, lama inkubasi, dan penjelasan-penjelasanya pendukung lainnya.</p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <a href="index.php?r=site%2Fmencegah">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <span style="font-size: 60px; color: dodgerblue;">
                              <i class="fa fa-shield-virus" style="padding:50px"></i>
                            </span>
                        </div>
                        <h2>Mencegah Virus Corona</h2>
                        </a>
                        <p>Penjelasan mengenai hal hal yang dapat dilakukan untuk mencegah penularan virus corona, serta beberapa himbauan lainnya seperti etika batuk dan bersin, kapan harus mencuci tangan, aturan bermasker, menjaga imunitas tubuh dan sebagainya.</p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <a href="index.php?r=site%2Fmengobati">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <span style="font-size: 60px; color: lightsteelblue;">
                              <i class="fa fa-hospital-user" style="padding:50px"></i>
                            </span>
                        </div>
                        <h2>Mengobati Corona</h2>
                        </a>
                        <p>Penjelasan mengenai gejala saat terkena virus corona, tindakan yang harus dilakukan saat memiliki gejala, serta daftar rumah sakit rujukan jika ingin melakukan pemeriksaan.</p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <a href="index.php?r=site%2Fmengantisipasi">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <span style="font-size: 60px; color: lightskyblue;">
                              <i class="fa fa-plane-slash" style="padding:50px"></i>
                            </span>
                        </div>
                        <h2>Mengantisipasi Corona</h2>
                        </a>
                        <p>Penjelasan mengenai hal-hal yang harus diwaspadai jika ke luar negeri, dan hal-hal yang merupakan mitos terkait corona.</p>
                        <p>Di sini juga disajikan data terkini terkait persebaran COVID-19 di dunia dan Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    

    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Publikasi</h1>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                    <?php 
                    $pubchunk=array_chunk($listpublikasi, 4, true);
                    for($i=0; $i<count($pubchunk); $i++){ 
                        if($i==0){
                    ?>
                        <div class="item active">
                    <?php }else{ ?>
                        <div class="item">
                    <?php }
                        foreach ($pubchunk[$i] as $pub) { ?>
                            <div class="col-sm-3 col-xs-6">
                                <a href="index.php?r=site%2Fdetailpub&id=<?=$pub->id?>">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/downloadable/<?= ($pub->thumbnail_web_filename==null ? 'noimg.png' : $pub->thumbnail_web_filename) ?>" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                    <?php } ?>
                        </div>
                    <?php } ?>                        
                    </div>

                    <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#team-->
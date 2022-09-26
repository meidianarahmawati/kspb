<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

//use frontend\assets\AppAsset;
//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

    <header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="https://wa.me/6281391236482"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="mailto:tanggapcovid19.kspb@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="https://www.instagram.com/satgascovid19.kspb"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <?php
                    /*NavBar::begin([
                        'brandLabel' => '<h1><img src="images/logo.png" alt="logo"></h1>',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'collapse navbar-collapse',
                        ],
                    ]);
                    $menuItems = [
                        ['label' => 'Beranda', 'url' => ['/site/index']],
                        ['label' => 'Tamu', 'url' => ['/site/tamu']],
                        ['label' => 'Pesanan', 'url' => ['/site/pesanan']],
                    ];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                    } else {
                        $menuItems[] = '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>';
                    }
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => $menuItems,
                    ]);
                    NavBar::end();*/
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Beranda</a></li>
                        <li class="dropdown"><a href="#">Seputar COVID-19 <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <!-- <li><a href="coronacnn-mengenal.html">Mengenal Virus Corona</a></li>
                                <li><a href="coronacnn-mencegah.html">Mencegah Virus Corona</a></li>
                                <li><a href="coronacnn-mengobati.html">Mengobati Corona</a></li>
                                <li><a href="coronacnn-mengantisipasi.html">Mengantisipasi Corona</a></li> -->
                                <li><a href="index.php?r=site%2Fmengenal">Mengenal Virus Corona</a></li>
                                <li><a href="index.php?r=site%2Fmencegah">Mencegah Virus Corona</a></li>
                                <li><a href="index.php?r=site%2Fmengobati">Mengobati Corona</a></li>
                                <li><a href="index.php?r=site%2Fmengantisipasi">Mengantisipasi Corona</a></li>
                            </ul>
                        </li>                    
                        <li class="dropdown"><a href="#">Satgas <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="index.php?r=site%2Fpengurus">Kepengurusan</a></li>
                                <li><a href="index.php?r=site%2Fsk">SK</a></li>
                                <!-- <li><a href="index.php?r=site%2Fbelum">Kebijakan</a></li> -->
                            </ul>
                        </li>
                        <li><a href="index.php?r=site%2Fpublikasi">Publikasi</a></li>
                        <!-- <li><a href="index.php?r=site%2Fdownloadable">Publikasi2</a></li> -->
                        <?php
                        if (Yii::$app->user->isGuest) {
                        ?>
                        <li><a href="index.php?r=site%2Flogin">Login</a></li>
                        <?php 
                        }else{
                        ?>
                        <!-- <li class="dropdown"><a href="#">Dashboard <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="index.php?r=site%2Fbelum">Jumlah Akses Keluar-Masuk</a></li>
                                <li><a href="index.php?r=site%2Fbelum">Hasil Sensus Kesehatan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Info Akses <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="index.php?r=site%2Fbelum">Anggota</a></li>
                                <li><a href="index.php?r=site%2Ftamu">Visitor</a></li>
                                <li><a href="index.php?r=site%2Fpesanan">Pesanan Online</a></li>
                            </ul>
                        </li>                         
                        <li class="dropdown"><a href="#">Pengaduan <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="index.php?r=site%2Fbelum">Ajukan Laporan</a></li>
                                <li><a href="index.php?r=site%2Fbelum">Daftar Laporan</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="index.php?r=site%2Flogout">Logout</a></li>  -->
                        <li><?= Html::csrfMetaTags() ?><?=Html::a('Logout ('.Yii::$app->user->identity->username.')',
                        ['//site/logout'],
                        ['data-method'=>'post']);?></li>                                         
                        <?php 
                        }
                        ?>

                    </ul>
                </div>
                <!-- <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </header>

<?php $this->beginBody() ?>

<!-- <div class="wrap"> -->
    <?php
    /*NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();*/
    ?>
    <section><div class="container"><?= Alert::widget() ?></div></section>
    
    <?= $content ?>

<!-- </div> -->

<footer class="footer" style="background: url(images/home/slider-bg.png) 0 100% repeat-x; margin-top: 80px; border-top: outset;padding-top: 80px;">
    <div class="container">
        <div class="row">
                <!-- <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div> -->
                <div class="col-md-5 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:tanggapcovid19.kspb@gmail.com">tanggapcovid19.kspb@gmail.com</a> <br> 
                        WhatsApp: +62 81391236482 <br> 
                        Instagram: <a href="https://www.instagram.com/satgascovid19.kspb">@satgascovid19.kspb</a> <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Lokasi</h2>
                        <address>
                        Komplek Statistik Pondok Bambu <br> 
                        Duren Sawit, Jakarta Timur <br> 
                        13430 <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="contact-info bottom">
                        <img src="images/sigma.jpg" alt="sigma" style="height: 120px">
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div> -->
        </div>

        <div class="row">
            <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="pull-right">Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a> - <?= Yii::powered() ?></p>
        </div>
    </div>
    
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

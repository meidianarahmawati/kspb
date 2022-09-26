<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use frontend\assets\CovidAsset;
CovidAsset::register($this);
?>
<main class="mengantisipasi" id="main">
            <section class="content anticipate">
                <div class="container">
                    <div class="title-area">
                        <h3 data-aos="fade-in" class="aos-init aos-animate">
                            Mengantisipasi COVID-19 di Luar Negeri
                        </h3>
                    </div>
                    <div class="content-area">
                        <div class="content-list one">
                            <div class="title-area">
                                <h4 data-aos="zoom-in" class="aos-init aos-animate">Negara Mana dengan Kasus COVID-19 Terbanyak?</h4>
                            </div>
                            <div class="info-area">
                                <div class="chart aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="300"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="corona-barchart" style="display: block; width: 1140px; height: 1300px;" width="1140" height="1300" class="chartjs-render-monitor"></canvas>
                                </div>
                                <p class="update-date aos-init" style="margin-top: 820px;margin-right: 25px;" data-aos="fade-in" data-aos-delay="600">Tanggal update: <?php $dt=strtotime($summarydate['Date']."+5 Hours");
                                            echo date("d M Y H:i",$dt);?> WIB</p>
                                <p class="update-date aos-init" style="margin-right: 25px;" data-aos="fade-in" data-aos-delay="600">Sumber: <?= $sumberworld ?></p>
                            </div>
                        </div>
                        <div class="content-list two">
                            <div class="list-flat">
                                <span class="line top aos-init" data-aos="zoom-in" data-aos-delay="500"></span>
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-12 col-lg-3">
                                        <div class="title-list">
                                            <h4 data-aos="zoom-in" class="aos-init">Perkembangan COVID-19 di Indonesia</h4>
                                        </div>
                                    </div>
                                    <?php 
                                        $dataindo = end($dataProvider->allModels);
                                    ?>
                                    <div class="col-6 col-lg-3">
                                        <div class="desc text-align-center">
                                            <h5 data-aos="zoom-in" data-aos-delay="50" class="aos-init">Kasus Positif</h5>
                                            <h5 class="ingredient large aos-init" data-aos="zoom-in" data-aos-delay="50"><?=$dataindo['Confirmed']?></h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="desc text-align-center">
                                            <h5 data-aos="zoom-in" data-aos-delay="50" class="aos-init">Meninggal Dunia</h5>
                                            <h5 class="ingredient large aos-init" data-aos="zoom-in" data-aos-delay="50"><?=$dataindo['Deaths']?></h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="desc text-align-center">
                                            <h5 data-aos="zoom-in" data-aos-delay="50" class="aos-init">Sembuh</h5>
                                            <h5 class="ingredient large aos-init" data-aos="zoom-in" data-aos-delay="50"><?=$dataindo['Recovered']?></h5>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="update-date aos-init" data-aos="fade-in" data-aos-delay="600">Tanggal update: <?php 
                                            $d=strtotime($dataindo['Date']."+5 Hours");
                                            echo date("d M Y H:i",$d); ?> WIB
                                        </p>
                                        <p class="update-date aos-init" data-aos="fade-in" data-aos-delay="600">Sumber: <?= $sumberindo ?></p>
                                    </div>
                                </div>
                                <span class="line bottom aos-init" data-aos="zoom-in" data-aos-delay="500"></span>
                            </div>
                        </div>
                        <div class="content-list three">
                            <div class="title-area">
                                <h4 data-aos="zoom-in" class="aos-init">Perlukah Membatasi Perjalanan ke Luar Negeri?</h4>
                            </div>
                            <div class="info-image">
                                <div class="row no-gutters justify-content-center align-items-md-center">
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="image aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <img src="./coronacnn-mengantisipasi_files/graph_57.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 col-lg-4 order-md-first">
                                        <div class="desc text-align-right">
                                            <h5 data-aos="zoom-in" data-aos-delay="50" class="aos-init">WHO menyatakan tidak akan mengeluarkan imbauan bepergian karena merupakan kewenangan masing-masing negara. Anda yang bepergian ke luar negeri diimbau memantau status negara tujuan di aplikasi Safe Travel.</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 col-lg-4">
                                        <div class="desc">
                                            <h5 data-aos="zoom-in" data-aos-delay="50" class="aos-init">Bagi lansia, penderita penyakit kronis, atau yang sedang tidak fit, hindari bepergian ke daerah terdampak.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-list four">
                            <div class="title-area">
                                <h4 data-aos="zoom-in" class="aos-init">Apa yang Harus Diwaspadai Jika ke Luar Negeri?</h4>
                            </div>
                            <div class="info-area">
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-6 col-lg-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengantisipasi_files/graph_58.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Unduh aplikasi Safe Travel dari Kementerian Luar Negeri Indonesia.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengantisipasi_files/graph_59.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Simpan nomor KBRI di negara tujuan.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengantisipasi_files/graph_60.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Baca informasi resmi kondisi terkini di negara tujuan.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengantisipasi_files/graph_61.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Vaksin jika diperlukan sebelum berangkat.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengantisipasi_files/graph_62.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Jaga kondisi tubuh dan kebersihan selama di perjalanan.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengantisipasi_files/graph_63.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Sepulang ke Indonesia, pantau kondisi tubuh sendiri selama 14 hari.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-list five">
                            <div class="title-area">
                                <h4 data-aos="zoom-in" class="aos-init">Apa Saja Mitos Soal COVID-19?</h4>
                            </div>
                            <div class="info-area faq">
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah pengering tangan efektif membunuh virus?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Tidak. Membunuh virus hanya efektif dilakukan dengan mencuci tangan.</h5>
                                        </div>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah vaksin pneumonia efektif menghadapi virus ini?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Tidak. Vaksin untuk virus ini khusus dan masih dalam pengembangan.</h5>
                                        </div>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Seberapa efektif thermal scanner dalam mendeteksi orang yang terinfeksi?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Thermal scanner hanya bisa membaca demam, tapi tidak bisa mendeteksi apabila orang yang terinfeksi belum menunjukan gejala.</h5>
                                        </div>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah mencuci hidung dengan saline (air garam) bisa mencegah penyebaran virus?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Tidak. Belum terbukti.</h5>
                                        </div>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah menyiram tubuh dengan desinfektan seperti alkohol dan klorin mampu membunuh virus?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Cara ini tidak bisa membunuh virus yang sudah masuk ke tubuh.</h5>
                                        </div>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah memakan bawang putih bisa mencegah infeksi?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Bawang putih mengandung antibiotik yang baik untuk tubuh, namun tidak ada bukti bisa mencegah infeksi COVID-19.</h5>
                                        </div>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah aman untuk menerima kiriman dari China?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Aman, karena virus tidak bisa bertahan di permukaan benda dalam jangka waktu yang lama.</h5>
                                        </div>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah minyak wijen dapat membunuh virus?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Tidak.</h5>
                                        </div>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah hewan peliharaan dapat menularkan virus?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Untuk saat ini, belum ada bukti yang menyatakan bahwa hewan peliharaan bisa menularkan, tapi sebaiknya tetap cuci tangan setelah menyentuh hewan.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="question">
                                            <h5>Apakah antibiotik bisa mencegah dan membunuh virus corona?</h5>
                                        </div>
                                        <div class="desc">
                                            <h5>Tidak. Antibiotik efektif melawan bakteri, bukan virus.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <nav class="button-floating aos-init aos-animate" data-aos="enterance">
                    <ul>
                        <li>
                            <a href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengenal-virus-corona.html">
                                <i class="icon mengenal"></i>
                                <span>Mengenal</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mencegah-terinfeksi-corona.html">
                                <i class="icon mencegah"></i>
                                <span>Mencegah</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengobati-corona.html">
                                <i class="icon mengobati"></i>
                                <span>Mengobati</span>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengantisipasi-corona-di-luar-negeri.html">
                                <i class="icon antisipasi"></i>
                                <span>Mengantisipasi</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->
            </section>
        </main>
        <footer>
            <section class="credit">
                <div class="line-area">
                    <span class="line aos-init" data-aos="fade-up"></span>
                </div>
                <div class="container">
                    <ul class="flat detail">
                        <li data-aos="fade-up" class="aos-init">
                            <p>
                                <i>Sumber data:</i> World Health Organization, Red Cross International, Kementerian Kesehatan.
                            </p>
                            <p>Disarikan oleh <a href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengantisipasi-corona-di-luar-negeri.html">CNN Indonesia</a></p>
                        </li>
                    </ul>
                </div>
            </section>
        </footer>       <script src="./coronacnn-mengenal_files/vendor.js.download"></script>
        <script src="./coronacnn-mengenal_files/bootstrap.js.download"></script>
        <script src="./coronacnn-mengenal_files/main.min.js.download"></script>
    



<script type="text/javascript" id="">_atrk_opts={atrk_acct:"AsQMs1WyR620WR",domain:"cnnindonesia.com",dynamic:!0};(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="https://certify-js.alexametrics.com/atrk.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>

<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=AsQMs1WyR620WR" style="display:none" height="1" width="1" alt=""></noscript>

  
<script type="text/javascript" id="">var _comscore=_comscore||[];_comscore.push({c1:"2",c2:"8443234"});(function(){var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src=("https:"==document.location.protocol?"https://sb":"http://b")+".scorecardresearch.com/beacon.js";b.parentNode.insertBefore(a,b)})();</script>
<noscript>
  <img src="https://b.scorecardresearch.com/p?c1=2&amp;c2=8443234&amp;cv=2.0&amp;cj=1">
</noscript>

<script type="text/javascript" id="">(function(a,c,e,f,d,b){a.hj=a.hj||function(){(a.hj.q=a.hj.q||[]).push(arguments)};a._hjSettings={hjid:949714,hjsv:6};d=c.getElementsByTagName("head")[0];b=c.createElement("script");b.async=1;b.src=e+a._hjSettings.hjid+f+a._hjSettings.hjsv;d.appendChild(b)})(window,document,"https://static.hotjar.com/c/hotjar-",".js?sv\x3d");</script><script type="text/javascript" id="">(function(){var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//cdn.detik.net.id/loganalysistracker/thetracker-cnn-v3.min.js";a.addEventListener("load",function(){var a=document.getElementsByTagName("meta");detikTracker.call(null,a)});b.parentNode.insertBefore(a,b)})();</script>
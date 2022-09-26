<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use frontend\assets\CovidAsset;
CovidAsset::register($this);
?>
<main class="mengobati" id="main">
            <section class="content treat">
                <div class="container">
                    <div class="title-area">
                        <h3 data-aos="fade-in" class="aos-init aos-animate">
                            Mengobati Corona
                        </h3>
                    </div>
                    <div class="content-area">
                        <div class="content-list one">
                            <div class="title-area">
                                <h4 data-aos="zoom-in" class="aos-init aos-animate">Apa Gejala Terkena Virus Corona?</h4>
                                <h5 data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate">Dokter dan ilmuwan hingga kini masih berusaha memahami gambaran lengkap  virus corona.</h5>
                                <h5 data-aos="fade-in" data-aos-delay="800" class="aos-init aos-animate">Gejala yang paling umum ditemukan:</h5>
                            </div>
                            <div class="info-area no-margin">
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengobati_files/graph_50.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Demam</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengobati_files/graph_51.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Batuk</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengobati_files/graph_52.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Sesak napas berat</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengobati_files/graph_53.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Sakit kepala </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-area">
                                <h5 data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate">Pasien Covid-19 lainnya melaporkan:</h5>
                            </div>
                            <div class="info-area no-margin">
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengobati_files/graph_54.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Sakit tenggorokan</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengobati_files/graph_55.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Pilek</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <img src="./coronacnn-mengobati_files/graph_56.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5>Muntah-muntah</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-list two">
                            <div class="title-area">
                                <h4 data-aos="zoom-in" class="aos-init aos-animate">Apa yang harus dilakukan jika memiliki gejala?</h4>
                            </div>
                            <div class="info-area">
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-6 col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <span class="number-list">1</span>
                                        </div>
                                        <div class="desc">
                                            <h5>Tetap di rumah jika kondisi badan tidak fit agar tidak menulari orang lain.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <span class="number-list">2</span>
                                        </div>
                                        <div class="desc">
                                            <h5>Gunakan masker dan jaga etika bersin/batuk.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <span class="number-list">3</span>
                                        </div>
                                        <div class="desc">
                                            <h5>Hubungi hotline Kemenkes di nomor <a href="tel:0215210411">021-5210411</a> dan <a href="tel:081212123119">081212123119</a>.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <span class="number-list">4</span>
                                        </div>
                                        <div class="desc">
                                            <h5>Ceritakan lengkap kondisi fisik dan riwayat perjalanan.</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                        <div class="image">
                                            <span class="number-list">5</span>
                                        </div>
                                        <div class="desc">
                                            <h5>Pihak berwenang akan mengarahkan Anda pada rumah sakit dan tindakan yang tepat.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-list three">
                            <div class="title-area">
                                <h4 data-aos="zoom-in" class="aos-init aos-animate">Harus ke Rumah Sakit Mana Jika Ingin Periksakan Diri?</h4>
                            </div>
                            <div class="info-area">
                                <div class="hospital-list">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">1</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Aceh</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-aceh"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">2</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Sumatera Utara</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-sumatera-utara"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">3</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Sumatera Barat</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-sumatera-barat"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">4</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Riau</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-riau"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">5</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Kepulauan Riau</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-kepulauan-riau"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">6</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Jambi</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-jambi"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">7</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Sumatera Selatan</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-sumatera-selatan"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">8</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Bangka Belitung</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-bangka-belitung"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">9</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Bengkulu</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-bengkulu"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">10</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Lampung</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-lampung"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">11</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>DKI Jakarta</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-dki-jakarta"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">12</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Jawa Barat</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-jawa-barat"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">13</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Banten</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-banten"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">14</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Jawa Tengah</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-jawa-tengah"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">15</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Jawa Timur</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-jawa-timur"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">16</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Yogyakarta</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-diy"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">17</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Bali</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-bali"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">18</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Nusa Tenggara Barat</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-ntb"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">19</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Nusa Tenggara Timur</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-ntt"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">20</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Kalimantan Barat</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-kalimantan-barat"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">21</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Kalimantan Tengah</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-kalimantan-tengah"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">22</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Kalimantan Selatan</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-kalimantan-selatan"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">23</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Kalimantan Timur</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-kalimantan-timur"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">24</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Kalimantan Utara</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-kalimantan-utara"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">25</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Sulawesi Utara</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-sulawesi-utara"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">26</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Gorontalo</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-gorontalo"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">27</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Sulawesi Barat</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-sulawesi-barat"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">28</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Sulawesi Tengah</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-sulawesi-tengah"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">29</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Sulawesi Selatan</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-sulawesi-selatan"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">30</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Sulawesi Tenggara</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-sulawesi-tenggara"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">31</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Maluku</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-maluku"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">32</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Maluku Utara</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-maluku-utara"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">33</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Papua</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-papua"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 aos-init" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <div class="image">
                                                    <span class="number-list">34</span>
                                                </div>
                                                <div class="hospital">
                                                    <h5>Papua Barat</h5>
                                                    <p>
                                                        <span>Selengkapnya</span> <i class="fa fa-angle-right"></i>
                                                    </p>
                                                    <button type="button" class="trigger-modal" data-toggle="modal" data-target="#modal-papua-barat"></button>
                                                </div>
                                            </div>
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
                            <a class="active" href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengobati-corona.html">
                                <i class="icon mengobati"></i>
                                <span>Mengobati</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengantisipasi-corona-di-luar-negeri.html">
                                <i class="icon antisipasi"></i>
                                <span>Mengantisipasi</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->
            </section>
            <!-- Modal aceh -->
            <div class="modal fade" id="modal-aceh" tabindex="-1" role="dialog" aria-labelledby="modal-aceh-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Aceh</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Zainoel Abidin Banda Aceh</h5>
                                                <p>Jl. Teuku Moh. Daud Beureueh No.108 B, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh</p>
                                                <a href="tel:065134562">065134562</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Cut Meutia Kab. Aceh Utara</h5>
                                                <p>Jl. Banda Aceh-Medan Km. 6 Buket Rata, Lhokseumawe, Aceh</p>
                                                <a href="tel:064546334">064546334</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sumatera Utara -->
            <div class="modal fade" id="modal-sumatera-utara" tabindex="-1" role="dialog" aria-labelledby="modal-sumatera-utara-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Sumatera Utara</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP H. Adam Malik</h5>
                                                <p>Jl. Bunga Lau No.17, Kemenangan Tani, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara</p>
                                                <a href="tel:0618360051">0618360051</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kabanjahe</h5>
                                                <p>Jl. Kapten Selamat Ketaren, Lau Cimba, Kabanjahe, Kabupaten Karo, Sumatera Utara</p>
                                                <a href="tel:062820012">062820012</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Djasamen Saragih</h5>
                                                <p>Jl. Sutomo No. 230, Pematang Siantar, Sumatera Utara</p>
                                                <a href="tel:062222959">062222959</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Tarutung</h5>
                                                <p>Jl. Agus Salim No. 1 Tarutung Kab. Tapanuli Utara</p>
                                                <a href="tel:063321303">063321303</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kota Padang Sidimpuan</h5>
                                                <p>Jl. Dr. Ferdinan Lumban Tobing No. 10, Padangsidimpuan</p>
                                                <a href="tel:063421780">063421780</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sumatera Barat -->
            <div class="modal fade" id="modal-sumatera-barat" tabindex="-1" role="dialog" aria-labelledby="modal-sumatera-barat-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Sumatera Barat</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP dr. M. Djamil</h5>
                                                <p>Jl. Perintis Kemerdekaan Padang</p>
                                                <a href="tel:075132371">075132371</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Achmad Mochtar</h5>
                                                <p>Jl. Dr. A.Rivai Bukittinggi</p>
                                                <a href="tel:075221720">075221720</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Riau -->
            <div class="modal fade" id="modal-riau" tabindex="-1" role="dialog" aria-labelledby="modal-riau-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Riau</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Arifin Achmad</h5>
                                                <p>Jl. Diponegoro No. 2, Pekanbaru</p>
                                                <a href="tel:076123418">076123418</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Puri Husada Tembilahan</h5>
                                                <p>Jl. Veteran No. 52 Tembilahan</p>
                                                <a href="tel:076824563">076824563</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kota Dumai</h5>
                                                <p>Jl. Tanjung Jati No. 4, Dumai</p>
                                                <a href="tel:0765440992">0765440992</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Kepulauan Riau -->
            <div class="modal fade" id="modal-kepulauan-riau" tabindex="-1" role="dialog" aria-labelledby="modal-kepulauan-riau-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Kepulauan Riau</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Embung Fatimah</h5>
                                                <p>Jl. R. Soeprapto. Blok D 1 - 9 Batu Aji Kota Batam</p>
                                                <a href="tel:0778364446">0778364446</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSBP Batam</h5>
                                                <p>Jl. Dr. Cipto Mangunkusumo No.1, Sekupang, Batam</p>
                                                <a href="tel:0778322046">0778322046</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Muhammad Sani (Kab. Karimun)</h5>
                                                <p>Jl. Soekarno - Hatta No. 1 Tanjung Balai Karimun</p>
                                                <a href="tel:0777327808">0777327808</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Provinsi Kepulauan Riau Tanjungpinang</h5>
                                                <p>JL. W.R Supratman No. 100 Km. 8 Tanjungpinang Kepulauan Riau</p>
                                                <a href="tel:07717335203">07717335203</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Jambi -->
            <div class="modal fade" id="modal-jambi" tabindex="-1" role="dialog" aria-labelledby="modal-jambi-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Jambi</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Raden Mattaher Jambi</h5>
                                                <p>Jl. Letjend Suprapto No. 31 Telanaipura,Jambi 36122</p>
                                                <a href="tel:074161692">074161692</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sumatera Selatan -->
            <div class="modal fade" id="modal-sumatera-selatan" tabindex="-1" role="dialog" aria-labelledby="modal-sumatera-selatan-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Sumatera Selatan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP Dr. Mohammad Hoesin Palembang</h5>
                                                <p>Jl. Jendral Sudirman Km. 3,5 Palembang</p>
                                                <a href="tel:0711354088">0711354088</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Dr. Rivai Abdullah</h5>
                                                <p>Jl. Sungai Kundur Kelurahan Mariana Kec. Banyuasin I</p>
                                                <a href="tel:07117537201">07117537201</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Lahat</h5>
                                                <p>Jl. Mayjend Harun Sohar II No.28 Lahat</p>
                                                <a href="tel:0731323080">0731323080</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Siti Fatimah Provinsi Sumatera Selatan</h5>
                                                <p>Jl. Kol. H. Burlian Km 6 Kel. Sukabangun Kec. Sukarami, Palembang 30151</p>
                                                <a href="tel:07115178883">07115178883</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kayuagung</h5>
                                                <p>Jln. Letjen Yusuf Singadekane Kel. Jua-jua Kec. Kayuagung Kab. Ogan Komering Ilir</p>
                                                <a href="tel:0712323889">0712323889</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Bangka Belitung -->
            <div class="modal fade" id="modal-bangka-belitung" tabindex="-1" role="dialog" aria-labelledby="modal-bangka-belitung-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Bangka Belitung</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. H. Marsidi Judono</h5>
                                                <p>Jl. Jend. Sudirman Aik Rayak Km. 5,5 Tanjungpandan Kab.Belitung</p>
                                                <a href="tel:071922190">071922190</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Depati Hamzah</h5>
                                                <p>Jl. Soekarno Hatta, Kel. Bukit Besar Kec. Girimaya Kota Pangkalpinang</p>
                                                <a href="tel:0717438660">0717438660</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Bengkulu -->
            <div class="modal fade" id="modal-bengkulu" tabindex="-1" role="dialog" aria-labelledby="modal-bengkulu-label" style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Bengkulu</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. M. Yunus Bengkulu</h5>
                                                <p>Jl. Bhayangkara Kel. Sidomulyo Kec. Gading Cempaka Kota Bengkulu 38229</p>
                                                <a href="tel:073652004">073652004</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Arga Makmur</h5>
                                                <p>Jl. Siti Khadijah No. 08 Arga Makmur Kabupaten Bengkulu Utara</p>
                                                <a href="tel:0737521118">0737521118</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Hasanuddin Damrah Manna</h5>
                                                <p>Jl. Raya Padang Panjang Manna Kabupaten Bengkulu Selatan</p>
                                                <a href="tel:085381637684">085381637684</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Lampung -->
            <div class="modal fade" id="modal-lampung" tabindex="-1" role="dialog" aria-labelledby="modal-lampung-label" style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Lampung</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. H. Abdul Moeloek Provinsi Lampung</h5>
                                                <p>Jl. Dr. Rivai 06 Bandar Lampung 35112</p>
                                                <a href="tel:0721703312">0721703312</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. H. Bob Bazar,SKM</h5>
                                                <p>Jl. Lettu Rohani 14 B, Kalianda, Kab. Lampung Selatan</p>
                                                <a href="tel:0727322159">0727322159</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Jend. Ahmad Yani Metro</h5>
                                                <p>Jl. Jend. A.Yani No. 13 Kota Metro Lampung</p>
                                                <a href="tel:072541820">072541820</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSD May Jend HM Ryacudu</h5>
                                                <p>Jl. Jendral Sudirman No. 2 Kotabumi Lampung Utara 34511</p>
                                                <a href="tel:072422095">072422095</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal DKI Jakarta -->
            <div class="modal fade" id="modal-dki-jakarta" tabindex="-1" role="dialog" aria-labelledby="modal-dki-jakarta-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>DKI Jakarta</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSPI Sulianti Saroso</h5>
                                                <p>Jl. Baru Sunter Permai Raya Jakarta Utara</p>
                                                <a href="tel:0216506559">0216506559</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP Persahabatan</h5>
                                                <p>Jl. Persahabatan Raya No. 1, Jakarta Timur</p>
                                                <a href="tel:0214891708">0214891708</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Umum Bhayangkara Tk. I R.Said Sukanto</h5>
                                                <p>Jl. Raya Bogor Kramat Jati, Jakarta Timur</p>
                                                <a href="tel:0218093288">0218093288</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP Fatmawati</h5>
                                                <p>Jl. RS Fatmawati Cilandak, Jakarta Selatan</p>
                                                <a href="tel:0217501524">0217501524</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Pasar Minggu</h5>
                                                <p>JL. TB. Simatupang No. 1 Kel.Ragunan, Pasar Minggu, Jakarta Selatan</p>
                                                <a href="tel:02129059999">02129059999</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSPAD Gatot Soebroto</h5>
                                                <p>Jl. Dr. Abdul Rahman Saleh No. 24 Kel. Senen, Kec. Senen, Jakarta Pusat</p>
                                                <a href="tel:0213440693">0213440693</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSAL Mintoharjo</h5>
                                                <p>Jl. Bendungan Hilir 17, Jakarta Pusat</p>
                                                <a href="tel:0215703081">0215703081</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Cengkareng</h5>
                                                <p>Jl. Kamal Raya Bumi Cengkareng Indah, Cengkareng Timur</p>
                                                <a href="tel:02154372874">02154372874</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Jawa Barat -->
            <div class="modal fade" id="modal-jawa-barat" tabindex="-1" role="dialog" aria-labelledby="modal-jawa-barat-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Jawa Barat</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP Dr. Hasan Sadikin, Bandung</h5>
                                                <p>Jl. Pasteur No. 38, Bandung 40161</p>
                                                <a href="tel:022203495355">022203495355</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Paru Dr. H. A. Rotinsulu</h5>
                                                <p>Jl. Bukit Jarian No. 40, Bandung</p>
                                                <a href="tel:0223034446">0223034446</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Paru Dr. M. Goenawan Partowidigdo</h5>
                                                <p>Jl. Raya Puncak KM. 83, Po Box 28 Cisarua, Bogor</p>
                                                <a href="tel:02518253630">02518253630</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Slamet Garut</h5>
                                                <p>Jl. Rumah Sakit No.12 Kec. Tarogong Kidul, Kab. Garut 44151</p>
                                                <a href="tel:0262232720">0262232720</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD R. Syamsudin, SH Kota Sukabumi</h5>
                                                <p>Jl. Rumah Sakit No. 1, Kota Sukabumi</p>
                                                <a href="tel:0266225180">0266225180</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kabupaten Indramayu</h5>
                                                <p>Jl. Murah Nara No. 7 Sindang, Indramayu</p>
                                                <a href="tel:0234272655">0234272655</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSD Gunung Jati Kota Cirebon</h5>
                                                <p>Jl. Kesambi No. 56, Kota Cirebon 45134</p>
                                                <a href="tel:0231206330">0231206330</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>Rumkit Tk. II 03.05.01 Dustira</h5>
                                                <p>Jl. Dustira No. 1 Kota Cimahi, Jawa Barat</p>
                                                <a href="tel:0226652207">0226652207</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Banten -->
            <div class="modal fade" id="modal-banten" tabindex="-1" role="dialog" aria-labelledby="modal-banten-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Banten</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Kabupaten Tangerang</h5>
                                                <p>Jl. A Yani No. 9 Tangerang, Kota Tangerang 15111</p>
                                                <a href="tel:0215512946">0215512946</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Drajat Prawiranegara</h5>
                                                <p>Jl. Rumah Sakit No. 1 Serang, Banten</p>
                                                <a href="tel:021200528">021200528</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Jawa Tengah -->
            <div class="modal fade" id="modal-jawa-tengah" tabindex="-1" role="dialog" aria-labelledby="modal-jawa-tengah-label" style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Jawa Tengah</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP dr. Kariadi</h5>
                                                <p>Jl. Dr. Soetomo No.16, Semarang 502441</p>
                                                <a href="tel:0248413476">0248413476</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP dr. Soeradji Tirtonegoro Klaten</h5>
                                                <p>Jl. KRT. Dr. Soeradji Tirtonegoro No.1, Klaten, Jawa Tengah</p>
                                                <a href="tel:0272321020">0272321020</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Paru Dr. Ario Wirawan</h5>
                                                <p>Jl. Hasanudin No. 806, Salatiga</p>
                                                <a href="tel:0298326130">0298326130</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kraton Kab. Pekalongan</h5>
                                                <p>Jl. Veteran No. 31, Pekalongan, 51117</p>
                                                <a href="tel:0285423225">0285423225</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr Soeselo Slawi Kab. Tegal</h5>
                                                <p>Jl. Dr. Sutomo No. 63 Slawi, Kab. Tegal, 52419</p>
                                                <a href="tel:0283491016">0283491016</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. H. Soewondo Kendal</h5>
                                                <p>Jl. Laut No. 21, Kendal</p>
                                                <a href="tel:0294381433">0294381433</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Tidar Kota Magelang</h5>
                                                <p>Jl. Tidar No. 30 A, Kota Magelang, Jawa Tengah</p>
                                                <a href="tel:0293362260">0293362260</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD dr.Moewardi</h5>
                                                <p>JL. Kol Sutarto 132, Jebres Surakarta, 57126</p>
                                                <a href="tel:0271637415">0271637415</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Banyumas</h5>
                                                <p>Jl. Rumah Sakit No. 1 Banyumas</p>
                                                <a href="tel:0281796031">0281796031</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Loekmonohadi Kudus</h5>
                                                <p>Jl. Dr. Lukmonohadi No.19, Kudus</p>
                                                <a href="tel:0291444001">0291444001</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Prof. Dr. Margono Soekarjo</h5>
                                                <p>Jl. Dr. Gumbreg No. 1, Purwokerto</p>
                                                <a href="tel:0281632708">0281632708</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD K.R.M.T Wongsonegoro Kota Semarang</h5>
                                                <p>Jl. Fatmawati No. 1, Semarang 50272</p>
                                                <a href="tel:0246711500">0246711500</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kardinah</h5>
                                                <p>Jl. KS Tubun No. 2, Kota Tegal, 52124</p>
                                                <a href="tel:0283350377">0283350377</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Yogyakarta -->
            <div class="modal fade" id="modal-diy" tabindex="-1" role="dialog" aria-labelledby="modal-diy-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Yogyakarta</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP dr. Sardjito</h5>
                                                <p>Jl. Kesehatan No. 1 Sekip Sinduadi Mlati sleman Yogyakarta 55284</p>
                                                <a href="tel:0274631190">0274631190</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Panembahan Senopati</h5>
                                                <p>Jl. Dr. Wahidin Sudirohusodo Bantul, DIY</p>
                                                <a href="tel:0274367381">0274367381</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kota Yogyakarta</h5>
                                                <p>Jl. Wirosaban No. 1 Yogyakarta, DIY 55162</p>
                                                <a href="tel:0274371195">0274371195</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Wates</h5>
                                                <p>Jl. Tentara Pelajar Km. 1 No. 5 Wates Kulon Progo, DIY</p>
                                                <a href="tel:0274773169">0274773169</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Jawa Timur -->
            <div class="modal fade" id="modal-jawa-timur" tabindex="-1" role="dialog" aria-labelledby="modal-jawa-timur-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Jawa Timur</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSD Dr. Soebandi</h5>
                                                <p>Jl. Dr. Soebandi No. 124 Kel Patrang Kab. Jember Jawa Timur 68111</p>
                                                <a href="tel:0331487441">0331487441</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kabupaten Kediri</h5>
                                                <p>Jl. Pahlawan Kusuma Bangsa No. 1 Pare, Kediri</p>
                                                <a href="tel:0354391718">0354391718</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Soetomo</h5>
                                                <p>Jl. Mayjend. Prof. Dr. Moestopo No. 6 - 8 Surabaya, Jawa Timur</p>
                                                <a href="tel:0315501239">0315501239</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Soedono Madiun</h5>
                                                <p>Jl. Dr. Soetomo 59, Madiun</p>
                                                <a href="tel:0351464325">0351464325</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Saiful Anwar</h5>
                                                <p>Jl. Jaksa Agung Suprapto No. 2 Malang</p>
                                                <a href="tel:0341362101">0341362101</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD dr. R. Koesma</h5>
                                                <p>Jl. dr. Wahidin Sudirohusodo No. 800, Kab Tuban, Jawa Timur</p>
                                                <a href="tel:0356321010">0356321010</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Blambangan</h5>
                                                <p>Jl. Letkol Istiqlah No. 49 Banyuwangi, Jawa Timur</p>
                                                <a href="tel:0333421118">0333421118</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr R. Sosodoro Djatikoesoemo Bojonegoro</h5>
                                                <p>Jl. Veteran No. 36, Bojonegoro</p>
                                                <a href="tel:03533412133">03533412133</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Iskak Kab. Tulungagung</h5>
                                                <p>Jl. Dr. Wahidin Sudiro Husodo Tulungagung</p>
                                                <a href="tel:0355322609">0355322609</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Sidoarjo</h5>
                                                <p>Jl. Mojopahit No. 667, Sidowayah, Celep, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61215</p>
                                                <a href="tel:0318961649">0318961649</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Universitas Airlangga</h5>
                                                <p>Kampus C Universitas Airlangga, Mulyorejo, Surabaya 60115</p>
                                                <a href="tel:0315916290">0315916290</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Bali -->
            <div class="modal fade" id="modal-bali" tabindex="-1" role="dialog" aria-labelledby="modal-bali-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Bali</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP Sanglah Denpasar</h5>
                                                <p>Jl. Diponegoro Denpasar, 80114</p>
                                                <a href="tel:036122791115">036122791115</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Sanjiwani Gianyar</h5>
                                                <p>Jl. Ciung Wenara No. 2 Gianyar 80511</p>
                                                <a href="tel:0361943049">0361943049</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>BRSU Tabanan Bali</h5>
                                                <p>Jl. Pahlawan No. 14 Tabanan Bali</p>
                                                <a href="tel:0361811027">0361811027</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kab. Buleleng</h5>
                                                <p>Jl. Ngurah Rai 30 Singaraja</p>
                                                <a href="tel:036222046">036222046</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal NTB -->
            <div class="modal fade" id="modal-ntb" tabindex="-1" role="dialog" aria-labelledby="modal-ntb-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Nusa Tenggara Barat</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Provinsi NTB</h5>
                                                <p>Jl. Prabu Rangkasari Dasan Cermen</p>
                                                <a href="tel:03707502424">03707502424</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Bima</h5>
                                                <p>Jl. Langsat No. 1, Rabangodu Sel, Raba, Bima, Nusa Tenggara Barat 84115</p>
                                                <a href="tel:037443142">037443142</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. R. Soedjono Selong</h5>
                                                <p>Jl. Prof M Yamin, SH. No. 55 Selong</p>
                                                <a href="tel:011232234567">011232234567</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS H. L. Manambai Abdulkadir</h5>
                                                <p>Jl. Lintas Sumbawa-Bima Km. 5 Sumbawa Besar</p>
                                                <a href="tel:03712628078">03712628078</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal NTT -->
            <div class="modal fade" id="modal-ntt" tabindex="-1" role="dialog" aria-labelledby="modal-ntt-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Nusa Tenggara Timur</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Prof. Dr. W.Z Johanes</h5>
                                                <p>Jl. Dr. Moch Hatta No. 19 Kupang</p>
                                                <a href="tel:0380833614">0380833614</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Tc Hillers</h5>
                                                <p>Jl. Wairklau, Maumere, Kabupaten Sikka, NTT 86113</p>
                                                <a href="tel:081261153944">081261153944</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Komodo Labuan Bajo</h5>
                                                <p>Jln. Raya Labuan Bajo, Desa Golo Bilas, Kecamatan Komodo, Kabupaten Manggarai Barat, NTT 86554</p>
                                                <a href="tel:081337055250">081337055250</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Kalimantan Barat -->
            <div class="modal fade" id="modal-kalimantan-barat" tabindex="-1" role="dialog" aria-labelledby="modal-kalimantan-barat-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Kalimantan Barat</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Soedarso Pontianak</h5>
                                                <p>Jl. dr. Soedarso No. 1 Pontianak</p>
                                                <a href="tel:0561737701">0561737701</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Abdul Azis Singkawang</h5>
                                                <p>Jl. Dr. Soetomo No. 28, Pasiran- Singkawang</p>
                                                <a href="tel:0562631798">0562631798</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Ade Mohammad Djoen Sintang</h5>
                                                <p>Jl. YC Oevang Oeray No. 1 Sintang kota</p>
                                                <a href="tel:056521002">056521002</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Agoesdjam Ketapang</h5>
                                                <p>Jl. D.I Panjaitan No. 51 Kel. Sampit Kec. Delta Pawan Ketapang, 78851</p>
                                                <a href="tel:05343037239">05343037239</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Kalimantan Tengah -->
            <div class="modal fade" id="modal-kalimantan-tengah" tabindex="-1" role="dialog" aria-labelledby="modal-kalimantan-tengah-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Kalimantan Tengah</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Doris Sylvanus</h5>
                                                <p>Jl. Tambun Bungai No. 4 Palangkaraya Kalimantan Tengah,73111</p>
                                                <a href="tel:05363224695">05363224695</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr Murjani Sampit</h5>
                                                <p>Jl. H M Arsyad No. 65 Sampit 74321</p>
                                                <a href="tel:053121010">053121010</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Sultan Imanuddin Pangkalan Bun</h5>
                                                <p>Jl. Sutan Syahrir 17 Pangkalan Bun</p>
                                                <a href="tel:053221404">053221404</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Kalimantan Selatan -->
            <div class="modal fade" id="modal-kalimantan-selatan" tabindex="-1" role="dialog" aria-labelledby="modal-kalimantan-selatan-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Kalimantan Selatan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Ulin Banjarmasin</h5>
                                                <p>Jl. Jend A Yani KM 2,5 Banjarmasin Kalimantan Selatan</p>
                                                <a href="tel:05113252180">05113252180</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD H. Boejasin Pelaihari</h5>
                                                <p>Jl. Hadji Boejasin No. 68A, Angsau Kab. Tanah Laut</p>
                                                <a href="tel:051221083">051221083</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Kalimantan Timur -->
            <div class="modal fade" id="modal-kalimantan-timur" tabindex="-1" role="dialog" aria-labelledby="modal-kalimantan-timur-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Kalimantan Timur</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Panglima Sebaya</h5>
                                                <p>Jl. Kusuma Bangsa Km. 5 Tanah Grogot, Kab.Paser</p>
                                                <a href="tel:054324563">054324563</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Taman Husada Bontang</h5>
                                                <p>Jl. S. Parman No. 01, Kel Belimbing, Bontang 75331</p>
                                                <a href="tel:054822111">054822111</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Kanujoso Djatiwibowo</h5>
                                                <p>Jl. M.T. Haryono Ring Road Balikpapan No. 656</p>
                                                <a href="tel:0542873901">0542873901</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Abdul Wahab Sjahranie</h5>
                                                <p>Jl. Palang Merah Indonesia No. 1 Samarinda, Kaltim 75123</p>
                                                <a href="tel:0541738118">0541738118</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Aji Muhammad Parikesit</h5>
                                                <p>Jl. Ratu Agung No. 1 Tenggarong Seberang Kutai Kertanegara 75572</p>
                                                <a href="tel:0541661015">0541661015</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Kalimantan Utara -->
            <div class="modal fade" id="modal-kalimantan-utara" tabindex="-1" role="dialog" aria-labelledby="modal-kalimantan-utara-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Kalimantan Utara</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Tanjung Selor</h5>
                                                <p>JL. Cendrawasih Kel Tanjung Selor Hilir, Kec Tanjung Selor Kab Bulungan</p>
                                                <a href="tel:055221118">055221118</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Tarakan</h5>
                                                <p>Jl. Pulau Irian No.1, Kp. Satu Skip, Tarakan Tengah, Kota Tarakan Provinsi Kalimantan</p>
                                                <a href="tel:055121166">055121166</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sulawesi Utara -->
            <div class="modal fade" id="modal-sulawesi-utara" tabindex="-1" role="dialog" aria-labelledby="modal-sulawesi-utara-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Sulawesi Utara</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP Prof. Dr. R. D Kandou</h5>
                                                <p>Jl. Raya Tanawangko No. 56, Manado</p>
                                                <a href="tel:04318383058">04318383058</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Ratatotok - Buyat</h5>
                                                <p>Jl. J.W. Lasut Ratatotok II Kecamatan Ratatotok</p>
                                                <a href="tel:04313177610">04313177610</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. Sam Ratulangi</h5>
                                                <p>Jl. Suprapto Luaan Tondano Timur</p>
                                                <a href="tel:0431321171">0431321171</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kota Kotamobagu</h5>
                                                <p>Kelurahan Pobundayan Kecamatan Kotamobagu Selatan</p>
                                                <a href="tel:0434822816">0434822816</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Gorontalo -->
            <div class="modal fade" id="modal-gorontalo" tabindex="-1" role="dialog" aria-labelledby="modal-gorontalo-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Gorontalo</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Prof. Dr. H. Aloei Saboe</h5>
                                                <p>Jl. Prof. Dr. H. Aloei Saboe Kota Aloei Saboe Gorontalo</p>
                                                <a href="tel:08124315555">08124315555</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sulawesi Barat -->
            <div class="modal fade" id="modal-sulawesi-barat" tabindex="-1" role="dialog" aria-labelledby="modal-sulawesi-barat-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Sulawesi Barat</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Provinsi Sulawesi Barat</h5>
                                                <p>Jl. RE Martadinata, Simboro, Kec. Simboro Dan Kepulauan, Kabupaten Mamuju, Sulawesi Barat 91512</p>
                                                <a href="tel:04262703260">04262703260</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sulawesi Tengah -->
            <div class="modal fade" id="modal-sulawesi-tengah" tabindex="-1" role="dialog" aria-labelledby="modal-sulawesi-tengah-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Sulawesi Tengah</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Undata Palu</h5>
                                                <p>Jl. R. E. Martadinata, Tondo Kecamatan Mantikulore 94119</p>
                                                <a href="tel:04514908020">04514908020</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kab. Banggai Luwuk</h5>
                                                <p>Jl. Imam Bonjol KM 3 No. 14 Luwuk</p>
                                                <a href="tel:046121820">046121820</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Mokopido Toli-Toli</h5>
                                                <p>Jl. Lanoni No.37 Kel Baru Kec Baolan kab Toli-Toli, Sulteng</p>
                                                <a href="tel:045321301">045321301</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kolonedale</h5>
                                                <p>Jl. W Monginsidi 2 Kolonedale</p>
                                                <a href="tel:046521010">046521010</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Anutapura Palu</h5>
                                                <p>Jl. Kangkung No. 1 Palu</p>
                                                <a href="tel:0451460570">0451460570</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sulawesi Selatan -->
            <div class="modal fade" id="modal-sulawesi-selatan" tabindex="-1" role="dialog" aria-labelledby="modal-sulawesi-selatan-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Sulawesi Selatan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP dr. Wahidin Sudirohusodo</h5>
                                                <p>Jl. Perintis Kemerdekaan Km.11 Makasar</p>
                                                <a href="tel:0411584677">0411584677</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Dr. Tadjuddin Chalid, MPH</h5>
                                                <p>Jl. Paccerakkang No.67/Pajjaiang Daya Makassar</p>
                                                <a href="tel:0411512902">0411512902</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Lakipadada Toraja</h5>
                                                <p>Jl. Pongtiku Mandetek Tana Toraja</p>
                                                <a href="tel:042322264">042322264</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kab. Sinjai</h5>
                                                <p>Jl. Jend Sudirman No. 47 Sinjai, Sulawesi Selatan</p>
                                                <a href="tel:048221132">048221132</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Labuang Baji</h5>
                                                <p>Jl. Dr. Ratulangi No.81 Makassar</p>
                                                <a href="tel:0411872120">0411872120</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Tk.II Pelamonia</h5>
                                                <p>Jl. Jend Sudirman No. 27, Makassar</p>
                                                <a href="tel:04117402332">04117402332</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Andi Makkasau Parepare</h5>
                                                <p>Jl. Nurussamawati No.9 Kota Parepare</p>
                                                <a href="tel:042121823">042121823</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sulawesi Tenggara -->
            <div class="modal fade" id="modal-sulawesi-tenggara" tabindex="-1" role="dialog" aria-labelledby="modal-sulawesi-tenggara-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Sulawesi Tenggara</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RS Bahtera Mas Provinsi Sultra (RS Kendari)</h5>
                                                <p>Jl. Kapten Piere Tendean No 50 Kec Baruga</p>
                                                <a href="tel:04013195611">04013195611</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Maluku -->
            <div class="modal fade" id="modal-maluku" tabindex="-1" role="dialog" aria-labelledby="modal-maluku-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Maluku</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Dr. M. Haulussy Ambon</h5>
                                                <p>Jl. dr. Kayadoe Ambon</p>
                                                <a href="tel:0911344871">0911344871</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. P. P. Magretti Saumlaki</h5>
                                                <p>Jl. Ir. Soekarno - Poros Utama, Saumlaki, Tanimbar Sel</p>
                                                <a href="tel:091821113">091821113</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUP dr J. Leimena</h5>
                                                <p>Desa Rumah 3 Kec. Teluk Ambon</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Maluku Utara -->
            <div class="modal fade" id="modal-maluku-utara" tabindex="-1" role="dialog" aria-labelledby="modal-maluku-utara-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Maluku Utara</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Dr. H. Chasan Boesoirie Ternate</h5>
                                                <p>Jl. Cempaka Kel. Tanah Tinggi Kota Ternate</p>
                                                <a href="tel:09213121281">09213121281</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Papua -->
            <div class="modal fade" id="modal-papua" tabindex="-1" role="dialog" aria-labelledby="modal-papua-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Papua</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Jayapura</h5>
                                                <p>Jl. Kesehatan I No. 01 Dok II Jayapura</p>
                                                <a href="tel:0967533616">0967533616</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Nabire</h5>
                                                <p>Jl. R.E Martadinata Nabire, Papua</p>
                                                <a href="tel:098421845">098421845</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSU Merauke</h5>
                                                <p>Jl. Sukarjo Wiryopranoto No. 1 Merauke</p>
                                                <a href="tel:0971321124">0971321124</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Papua Barat -->
            <div class="modal fade" id="modal-papua-barat" tabindex="-1" role="dialog" aria-labelledby="modal-papua-barat-label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wrapper-modals">
                            <div class="modal-title">
                                <h4>Papua Barat</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="modal-desc">
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Manokwari</h5>
                                                <p>Jl. Bhayangkara No. 1 Manokwari</p>
                                                <a href="tel:0986211440">0986211440</a>
                                            </div>
                                        </div>
                                        <div class="col-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50">
                                            <div class="wrapper">
                                                <h5>RSUD Kabupaten Sorong</h5>
                                                <p>Jl. Kesehatan No. 36 Sorong</p>
                                                <a href="tel:0951321850">0951321850</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




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
                            <p>Disarikan oleh <a href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengobati-corona.html">CNN Indonesia</a></p>
                        </li>
                    </ul>
                </div>
            </section>
        </footer>       
        <script src="./coronacnn-mengenal_files/vendor.js.download"></script>
        <script src="./coronacnn-mengenal_files/bootstrap.js.download"></script>
        <script src="./coronacnn-mengenal_files/main.min.js.download"></script>
    



<script type="text/javascript" id="">_atrk_opts={atrk_acct:"AsQMs1WyR620WR",domain:"cnnindonesia.com",dynamic:!0};(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="https://certify-js.alexametrics.com/atrk.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>

<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=AsQMs1WyR620WR" style="display:none" height="1" width="1" alt=""></noscript>

  
<script type="text/javascript" id="">var _comscore=_comscore||[];_comscore.push({c1:"2",c2:"8443234"});(function(){var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src=("https:"==document.location.protocol?"https://sb":"http://b")+".scorecardresearch.com/beacon.js";b.parentNode.insertBefore(a,b)})();</script>
<noscript>
  <img src="https://b.scorecardresearch.com/p?c1=2&amp;c2=8443234&amp;cv=2.0&amp;cj=1">
</noscript>

<script type="text/javascript" id="">(function(a,c,e,f,d,b){a.hj=a.hj||function(){(a.hj.q=a.hj.q||[]).push(arguments)};a._hjSettings={hjid:949714,hjsv:6};d=c.getElementsByTagName("head")[0];b=c.createElement("script");b.async=1;b.src=e+a._hjSettings.hjid+f+a._hjSettings.hjsv;d.appendChild(b)})(window,document,"https://static.hotjar.com/c/hotjar-",".js?sv\x3d");</script><script type="text/javascript" id="">(function(){var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//cdn.detik.net.id/loganalysistracker/thetracker-cnn-v3.min.js";a.addEventListener("load",function(){var a=document.getElementsByTagName("meta");detikTracker.call(null,a)});b.parentNode.insertBefore(a,b)})();</script>
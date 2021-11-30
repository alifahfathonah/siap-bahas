<!-- Bnner Section -->
<section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            <!-- <div class="swiper-slide"
                style="background-image: url(<?=base_url('assets/website/');?>images/main-slider/1.jpg);">
                <div class="content-outer">
                    <div class="content-box justify-content-center">
                        <div class="inner text-center">
                            <h4><span class="border-shape-left"></span>SELAMAT DATANG
                                <span class="border-shape-right"></span>
                            </h4>
                            <h2>SISTEM INFORMASI PERIZINAN LINGKUNGAN HIDUP DINAS LINGKUNGAN HIDUP KABUPATEN MANOKWARI
                                SELATAN</h2>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="swiper-slide"
                style="background-image: url(<?=base_url('assets/website/');?>images/slide2.jpg);">
                <div class="content-outer">
                    <div class="content-box justify-content-center">
                        <div class="inner text-center">
                            <h4><span class="border-shape-left"></span>SELAMAT DATANG
                                <span class="border-shape-right"></span>
                            </h4>
                            <h2>Biro Administrasi Pelaksanaan Otonomi Khusus SETDA PROVINSI PAPUA BARAT</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-pagination style-two"></div>
        <div class="banner-slider-nav style-one">
            <div class="banner-slider-control banner-slider-button-prev"><span class="fa fa-angle-left"></span>
            </div>
            <div class="banner-slider-control banner-slider-button-next"><span class="fa fa-angle-right"></span>
            </div>
        </div>
    </div>
</section>
<!-- End Bnner Section -->

<!-- Team Section -->
<section class="events-section">
    <div class="auto-container">
        <div class="row m-0 justify-content-md-between align-items-end">
            <div class="sec-title">
                <h1>DAFTAR PEGAWAI</h1>
            </div>
        </div>
        <div class="wrapper-box">
            <div class="row">
                <!-- Team Blokc One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                        <div class="image">
                            <a href="<?=base_url('assets/website/');?>images/pegawai/abner.jpeg" target="_blank">
                                <img src="<?=base_url('assets/website/');?>images/pegawai/abner.jpeg" alt=""
                                    style="height:250px;">
                            </a>
                        </div>
                        <div class="lower-content">
                            <h4>
                                <a href="<?=base_url('assets/website/');?>images/pegawai/abner.jpeg"
                                    target="_blank">Abner Singgir, SE., MM</a>
                            </h4>
                            <div class="designation">Kepala Biro Administrasi Pelaksanaan Otonomi Khusus Setda Papua
                                Barat</div>
                        </div>
                        <ul class="social-icon-two">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Blokc One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                        <div class="image">
                            <a href="<?=base_url('assets/website/');?>images/pegawai/elyeser.jpeg" target="_blank">
                                <img src="<?=base_url('assets/website/');?>images/pegawai/elyeser.jpeg" alt=""
                                    style="height:250px;">
                            </a>
                        </div>
                        <div class="lower-content">
                            <h4>
                                <a href="<?=base_url('assets/website/');?>images/pegawai/elyeser.jpeg"
                                    target="_blank">Elyeser Rumfabe, SH., MH</a>
                            </h4>
                            <div class="designation">Kepala Bagian Pemberdayaan Orang Asli Papua</div>
                        </div>
                        <ul class="social-icon-two">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Kabupaten Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="row m-0 justify-content-md-between align-items-end">
            <div class="sec-title light">
                <h1>KATEGORI PROPOSAL</h1>
            </div>
        </div>
        <div class="wrapper-box">
            <div class="row">
                <!-- Team Blokc One -->
                <?php foreach($kategori as $row): ?>
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                        <div class="image">
                            <a href="<?=base_url('assets/website/');?>images/no_pict.png" target="_blank">
                                <img src="<?=base_url('assets/website/');?>images/no_pict.png" alt="">
                            </a>
                        </div>
                        <div class="lower-content">
                            <h4> <a href="<?=base_url('welcome/view/'.encrypt_url($row['idkategori']));?>"
                                    class="text-uppercase"><?= $row['nama_kategori']; ?></a>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- Team Blokc One -->
                <!-- <div class="col-lg-4 team-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                        <div class="image"><a href="<?=base_url('assets/website/');?>images/peta_izin_ukl_upl.jpg"
                                target="_blank"><img src="<?=base_url('assets/website/');?>images/peta_izin_ukl_upl.jpg"
                                    alt=""></a></div>
                        <div class="lower-content">
                            <h4> <a href="<?=base_url('assets/website/');?>images/peta_izin_ukl_upl.jpg"
                                    target="_blank">UKL-UPL</a></h4>
                        </div>
                    </div>
                </div> -->
                <!-- Team Blokc One -->
                <!-- <div class="col-lg-4 team-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                        <div class="image"><a href="<?=base_url('assets/website/');?>images/peta_izin_sppl.jpg"
                                target="_blank"><img src="<?=base_url('assets/website/');?>images/peta_izin_sppl.jpg"
                                    alt=""></a></div>
                        <div class="lower-content">
                            <h4> <a href="<?=base_url('assets/website/');?>images/peta_izin_sppl.jpg"
                                    target="_blank">SPPL</a>
                            </h4>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="blog-section">
    <div class="auto-container">
        <div class="row m-0 justify-content-md-between align-items-end">
            <div class="sec-title">
                <h1>Informasi Terbaru</h1>
                <div class="text">Semua informasi terbaru ada di sini.
                </div>
            </div>
            <!--Link Btn-->
            <div class="link-btn mb-50">
                <a href="<?=base_url('welcome/information');?>" class="theme-btn btn-style-seven"><span>Semua
                        Informasi</span></a>
            </div>
        </div>
        <div class="row">
            <!-- News Block One -->
            <!-- <div class="col-lg-3 col-md-6 news-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                    <div class="category"><a href="#">Tips & Advice</a></div>
                    <div class="image">
                        <a href="blog-details.html"><img
                                src="<?=base_url('assets/website/');?>images/resource/news-1.jpg" alt=""></a>
                        <div class="post-meta-info">
                            <a href="#"><span class="flaticon-eye"></span>21</a>
                            <a href="#"><span class="flaticon-comment"></span>08</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="date">Jul 14, 2019</div>
                        <h4><a href="blog-details.html">Water is more essential</a></h4>
                        <div class="author-info">
                            <div class="image"><img
                                    src="<?=base_url('assets/website/');?>images/resource/author-thumb-1.jpg" alt="">
                            </div>
                            <div class="author-title"><a href="#">Rubin Santro</a></div>
                            <div class="share-icon style-two post-share-icon">
                                <div class="share-btn"><img
                                        src="<?=base_url('assets/website/');?>images/resource/dotted.png" alt=""></div>
                                <ul>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- News Block One -->
            <!-- <div class="col-lg-3 col-md-6 news-block-one">
                <div class="inner-box wow fadeInDown" data-wow-delay="400ms">
                    <div class="category"><a href="#">Interviews</a></div>
                    <div class="image">
                        <a href="blog-details.html"><img
                                src="<?=base_url('assets/website/');?>images/resource/news-2.jpg" alt=""></a>
                        <div class="post-meta-info">
                            <a href="#"><span class="flaticon-eye"></span>14</a>
                            <a href="#"><span class="flaticon-comment"></span>05</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="date">Jun 05, 2019</div>
                        <h4><a href="blog-details.html">Coaching for fundraisers</a></h4>
                        <div class="author-info">
                            <div class="image"><img
                                    src="<?=base_url('assets/website/');?>images/resource/author-thumb-1.jpg" alt="">
                            </div>
                            <div class="author-title"><a href="#">Carl Ronny</a></div>
                            <div class="share-icon style-two post-share-icon">
                                <div class="share-btn"><img
                                        src="<?=base_url('assets/website/');?>images/resource/dotted.png" alt=""></div>
                                <ul>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- News Block One -->
            <!-- <div class="col-lg-3 col-md-6 news-block-one">
                <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                    <div class="category"><a href="#">Disaster</a><a href="#">Video</a></div>
                    <div class="image">
                        <a href="blog-details.html"><img
                                src="<?=base_url('assets/website/');?>images/resource/news-3.jpg" alt=""></a>
                        <div class="post-meta-info">
                            <a href="#"><span class="flaticon-eye"></span>12</a>
                            <a href="#"><span class="flaticon-comment"></span>02</a>
                        </div>
                        <div class="youtube-video-box"><a href="#"><span class="flaticon-logo"></span></a></div>
                    </div>
                    <div class="lower-content">
                        <div class="date">Mar 27, 2019</div>
                        <h4><a href="blog-details.html">Aid for japan flood</a></h4>
                        <div class="author-info">
                            <div class="image"><img
                                    src="<?=base_url('assets/website/');?>images/resource/author-thumb-1.jpg" alt="">
                            </div>
                            <div class="author-title"><a href="#">Gene Emery</a></div>
                            <div class="share-icon style-two post-share-icon">
                                <div class="share-btn"><img
                                        src="<?=base_url('assets/website/');?>images/resource/dotted.png" alt=""></div>
                                <ul>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- News Block One -->
            <!-- <div class="col-lg-3 col-md-6 news-block-one">
                <div class="inner-box wow fadeInDown" data-wow-delay="400ms">
                    <div class="category"><a href="#">Disaster</a></div>
                    <div class="image">
                        <a href="blog-details.html"><img
                                src="<?=base_url('assets/website/');?>images/resource/news-4.jpg" alt=""></a>
                        <div class="post-meta-info">
                            <a href="#"><span class="flaticon-eye"></span>26</a>
                            <a href="#"><span class="flaticon-comment"></span>07</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="date">Feb 14, 2019</div>
                        <h4><a href="blog-details.html">Central china flood</a></h4>
                        <div class="author-info">
                            <div class="image"><img
                                    src="<?=base_url('assets/website/');?>images/resource/author-thumb-1.jpg" alt="">
                            </div>
                            <div class="author-title"><a href="#">Lix Ferguson</a></div>
                            <div class="share-icon style-two post-share-icon">
                                <div class="share-btn"><img
                                        src="<?=base_url('assets/website/');?>images/resource/dotted.png" alt=""></div>
                                <ul>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
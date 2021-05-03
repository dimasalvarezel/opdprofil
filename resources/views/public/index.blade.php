@extends('public.layout.app', ['title' => 'Beranda - Web OPD'])

@section('meta')

@endsection

@section('content')

  <!-- === Slider === -->
      <section id="slider3" class="slider slider-3 text-center">
        <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
          data-autoplay="false" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="3000">
          <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="bg-img">
              <img src="assets/img/welcome.png" alt="slide img">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                  <div class="slide__content">
                    <!-- <div class="heading__shape heading__shape-white"></div> -->
                    <h2 class="slide__title color-white">Selamat Datang</h2>
                    <div class="heading__desc">
                    <p>
                      <strong>PORTAL INFORMASI PEMERINTAHAN KECAMATAN SERANGPANJANG</strong>
                    </p>
                    </div>
                    <hr class="style mb-5"> 
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-10 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
          <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="bg-img">
              <img src="assets/img/kantor_bg.png" alt="slide img">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                  <div class="slide__content">
                    <!-- <div class="heading__shape heading__shape-white"></div> -->
                    <h2 class="slide__title color-white">Kecamatan Serangpanjang </h2>
                    <hr class="style mb-5"> 
                    <a href="#" class="btn btn__rounded btn__white">Kontak Kami</a>
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-10 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
      </section><!-- /.slider -->

      <!-- === Features === -->
      <section id="features" class="features">
        <div class="container">
          <div class="row justify-content-center">
            <!-- <div class="mx-auto"> -->
              <!-- feature item #1 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-item">
                  <!-- <span class="feature__subtitle">We are helpers</span> -->
                <h4 class="feature__title ">Layanan Masyarakat</h4>
                <!-- <div class="feature__img">
                  <img src="assets/images/features/1.jpg" alt="feature img"> -->
                  <!-- </div>/.feature-img -->
                  <div class="feature__content">
                    <p class="feature__desc">Kami siap melayani anda.</p>
                    <a href="#" class="btn btn__link">Selengkapnya</a>
                  </div><!-- /.feature-content -->
                </div><!-- /.feature-item -->
              </div><!-- /.col-lg-4 -->
              <!-- feature item #3 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-item">
                  <h4 class="feature__title">Kritik/Saran/Keluhan Anda</h4>
                  <!-- <div class="feature__img"> -->
                    <!-- <img src=" " alt="feature img"> -->
                  <!-- </div>/.feature-img   -->
                  <div class="feature__content">
                    <p class="feature__desc">Silahkan Kirim Kritik/Saran/Keluhan Anda dengan menekan di bawah ini.</p>
                    <a href="{{route('public.contact')}}" class="btn btn__link">Selengkapnya</a>
                  </div><!-- /.feature-content -->
                </div><!-- /.feature-item -->
              </div><!-- /.col-lg-4 -->
            <!-- </div> -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Features -->
      
      <!-- === Banner2 === -->
      <!-- <section id="banner2" class="skills skills-3 banner-2 p-0 bg-gray"> -->
        <!-- <div class="container-fluid col-padding-0"> -->
          <!-- <div class="row"> -->
            <!-- <div class="col-sm-12 col-md-6 col-lg-6"> -->
              <!-- <div class="banner__img bg-overlay"> -->
                <!-- <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div> -->
              <!-- </div>/.banner-img -->
            <!-- </div>/.col-lg-6 -->
            <!-- <div class="col-sm-12 col-md-6 col-lg-6"> -->
              <!-- <div class="inner-padding"> -->
                <!-- <div class="heading heading-4 heading-7 mb-40"> -->
                  <!-- <h2 class="heading__title">Stunning & Great <br>Business Solutions!!</h2> -->
                  <!-- <div class="divider__line divider__theme divider__left"></div> -->
                  <!-- <p class="heading__desc">On top it, pleasing images create a better user experience. Rounding up a -->
                    <!-- bunch of specific designs and talking about the merits of way!</p> -->
                <!-- </div>/.heading -->
                <!-- progress 1 -->
                <!-- <div class="progress-item"> -->
                  <!-- <h6 class="progress__title">Marketing</h6> -->
                  <!-- <div class="progress"> -->
                    <!-- <div class="progress-bar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" role="progressbar"> -->
                      <!-- <span class="progress__percentage"></span> -->
                    <!-- </div> -->
                  <!-- </div>/.progress -->
                <!-- </div>/.progress-item  -->
                <!-- progress 2 -->
                <!-- <div class="progress-item"> -->
                  <!-- <h6 class="progress__title">Development</h6> -->
                  <!-- <div class="progress"> -->
                    <!-- <div class="progress-bar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" role="progressbar"> -->
                      <!-- <span class="progress__percentage"></span> -->
                    <!-- </div> -->
                  <!-- </div>/.progress -->
                <!-- </div>/.progress-item  -->
                <!-- progress 3 -->
                <!-- <div class="progress-item"> -->
                  <!-- <h6 class="progress__title">User Experience</h6> -->
                  <!-- <div class="progress"> -->
                    <!-- <div class="progress-bar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" role="progressbar"> -->
                      <!-- <span class="progress__percentage"></span> -->
                    <!-- </div> -->
                  <!-- </div>/.progress -->
                <!-- </div>/.progress-item  -->
                <!-- progress 4 -->
                <!-- <div class="progress-item"> -->
                  <!-- <h6 class="progress__title">Branding</h6> -->
                  <!-- <div class="progress"> -->
                    <!-- <div class="progress-bar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" role="progressbar"> -->
                      <!-- <span class="progress__percentage"></span> -->
                    <!-- </div> -->
                  <!-- </div>/.progress -->
                <!-- </div>/.progress-item  -->
              <!-- </div> -->
            <!-- </div>/.col-lg-6 -->
          <!-- </div>/.row -->
        <!-- </div>/.container -->
      <!-- </section>/.banner 2 -->

      <!-- === Banner3 === -->
      <!-- <section id="banner3" class="banner banner-3 p-0 bg-gray"> -->
        <!-- <div class="container-fluid col-padding-0"> -->
          <!-- <div class="row"> -->
            <!-- <div class="col-sm-12 col-md-12 col-lg-6"> -->
              <!-- <div class="inner-padding"> -->
                <!-- <div class="heading heading-4 heading-7 mb-40"> -->
                  <!-- <h2 class="heading__title">Unique, Creative <br>& Powerful Design!!</h2> -->
                  <!-- <div class="divider__line divider__theme divider__left"></div> -->
                  <!-- <p class="heading__desc">On top it, pleasing images create a better user experience. Rounding up a -->
                    <!-- bunch of specific designs and talking about the merits of way!</p> -->
                <!-- </div>/.heading -->
                <!-- <div class="carousel owl-carousel carousel-dots" data-slide="2" data-slide-md="2" data-slide-sm="1" -->
                  <!-- data-autoplay="true" data-nav="false" data-dots="true" data-space="20" data-loop="true" -->
                  <!-- data-speed="800"> -->
                  <!-- fancybox item #1 -->
                  <!-- <div class="fancybox-item"> -->
                    <!-- <div class="fancybox__icon"> -->
                      <!-- <i class="icon-desktop"></i> -->
                    <!-- </div>/.fancybox-icon -->
                    <!-- <div class="fancybox__content"> -->
                      <!-- <h4 class="fancybox__title">Development</h4> -->
                      <!-- <p class="fancybox__desc">The development of your next business plan will be executed by a -->
                        <!-- brilliant team who will indicate your grand success.</p> -->
                    <!-- </div>/.fancybox-content -->
                  <!-- </div>/.fancybox-item -->
                  <!-- fancybox item #2 -->
                  <!-- <div class="fancybox-item"> -->
                    <!-- <div class="fancybox__icon"> -->
                      <!-- <i class="icon-layers"></i> -->
                    <!-- </div>/.fancybox-icon -->
                    <!-- <div class="fancybox__content"> -->
                      <!-- <h4 class="fancybox__title">Web Design</h4> -->
                      <!-- <p class="fancybox__desc">What separates York agency from all other web design agencies is the -->
                        <!-- ability to offer the most UX Experience.</p> -->
                    <!-- </div>/.fancybox-content -->
                  <!-- </div>/.fancybox-item -->
                  <!-- fancybox item #3 -->
                  <!-- <div class="fancybox-item"> -->
                    <!-- <div class="fancybox__icon"> -->
                      <!-- <i class="icon-strategy"></i> -->
                    <!-- </div>/.fancybox-icon -->
                    <!-- <div class="fancybox__content"> -->
                      <!-- <h4 class="fancybox__title">Brand Identity</h4> -->
                      <!-- <p class="fancybox__desc">Your logo is the very heart of identity, let our designers deliver the -->
                        <!-- perfect design for your new business identity.</p> -->
                    <!-- </div>/.fancybox-content -->
                  <!-- </div>/.fancybox-item -->
                  <!-- fancybox item #4 -->
                  <!-- <div class="fancybox-item"> -->
                    <!-- <div class="fancybox__icon"> -->
                      <!-- <i class="icon-mobile"></i> -->
                    <!-- </div>/.fancybox-icon -->
                    <!-- <div class="fancybox__content"> -->
                      <!-- <h4 class="fancybox__title">Mobile Apps</h4> -->
                      <!-- <p class="fancybox__desc">Increase social reach and productivity with our Awesome App Directory, -->
                        <!-- with a big collection of famous applications.</p> -->
                    <!-- </div>/.fancybox-content -->
                  <!-- </div>/.fancybox-item -->
                <!-- </div>/.carousel -->
              <!-- </div> -->
            <!-- </div>/.col-lg-6 -->
            <!-- <div class="col-sm-12 col-md-12 col-lg-6"> -->
              <!-- <div class="banner__img bg-overlay"> -->
                <!-- <div class="bg-img"><img src="assets/images/banners/2.jpg" alt="background"></div> -->
              <!-- </div>/.banner-img -->
            <!-- </div>/.col-lg-6 -->
          <!-- </div>/.row -->
        <!-- </div>/.container -->
      <!-- </section>/.banner 3 -->

      <!-- === Blog === -->
    <section id="content-desktop" class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
      <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="pills-terkini-tab" data-toggle="pill" href="#pills-terkini" role="tab" aria-controls="pills-terkini" aria-selected="true">
                          <h5>Terkini</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-umum-tab" data-toggle="pill" href="#pills-umum" role="tab" aria-controls="pills-umum" aria-selected="false">
                          <h5>Umum</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-sosial-tab" data-toggle="pill" href="#pills-sosial" role="tab" aria-controls="pills-sosial" aria-selected="false">
                          <h5>Liputan Sosial</h5>
                        </a>
                    </li>
                </ul>
                  <div class="tab-content text-white" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-terkini" role="tabpanel" aria-labelledby="pills-terkini-tab">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="item-home">
                              <img src="" class="img-thumbnail">
                            </div>
                          </div>
                        <div class="col-lg-6">
                          <div class="item-home">
                            <small>
                              <i class="fa fa-clock"></i>
                              &nbsp;06 Apr 2021&nbsp;&nbsp;&nbsp;
                              <i class="fa fa-eye"></i>
                              &nbsp; 10 Dilihat
                            </small>
                              <h5>Pengurus TP PKK Kabupaten Subang Salurkan Bantuan Untuk Balita Gizi Buruk</h5>
                                <p class="text-white text-justify py-3"></p>
                                  <p><span style="mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:black">Pengurus TP PKK Kabupaten Subang menyerahkan bantuan untuk balita yang mengalami gizi buruk di wilayah Kecamatan Serangpanjang. Selasa (06/04/2021).</span></p>
                                <p></p>
                                <a class="text-success" href="https://subang.go.id/public/berita/pengurus-tp-pkk-kabupaten-subang-salurkan-bantuan-untuk-balita-gizi-buruk">Selengkapnya...</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-sm-6 py-3">
                          <div class="row-home">
                            <img src="" class="img-thumbnail">
                          </div>
                            <small>
                              <i class="fa fa-calendar"></i>
                              &nbsp;05 April 2021&nbsp;&nbsp;&nbsp;
                              <i class="fa fa-eye"></i>
                              &nbsp;77 Dilihat
                            </small>
                              <a href="https://subang.go.id/public/berita/riung-mungpulung-peringatan-hari-jadi-ke-73-kabupaten-subang" class="text-white" style="text-decoration:none;">
                                  <h5>Riung Mungpulung Peringatan Hari Jadi Ke-73 Kabupaten Subang</h5>
                              </a>
                          </div>
                          <div class="col-lg-3 col-sm-6 py-3">
                            <div class="row-home">
                              <img src="" class="img-thumbnail">
                            </div>
                              <small>
                                <i class="fa fa-calendar"></i>
                                &nbsp;05 April 2021&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-eye"></i>
                                &nbsp;53 Dilihat
                              </small>
                              <a href="https://subang.go.id/public/berita/rapat-paripurna-dprd-dalam-rangka-peringatan-hari-jadi-ke-73-kabupaten-subang" class="text-white" style="text-decoration:none;">
                                <h5>Rapat Paripurna DPRD Dalam Rangka Peringatan Hari Jadi ke-73 Kabupaten Subang</h5>
                              </a>
                          </div>
                          <div class="col-lg-3 col-sm-6 py-3">
                            <div class="row-home">
                                <img src="" class="img-thumbnail">
                            </div>
                              <small>
                                <i class="fa fa-calendar"></i>
                                &nbsp;05 April 2021&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-eye"></i>
                                &nbsp;78 Dilihat
                              </small>
                              <a href="https://subang.go.id/public/berita/peringatan-hut-kabupaten-subang-ke-73-diawali-dengan-ziarah-ke-makam-pahlawan" class="text-white" style="text-decoration:none;">
                                  <h5>Peringatan HUT Kabupaten Subang ke-73 Diawali dengan Ziarah ke Makam Pahlawan</h5>
                              </a>
                          </div>
                          <div class="col-lg-3 col-sm-6 py-3">
                            <div class="row-home">
                                <img src="" class="img-thumbnail">
                            </div>
                              <small>
                                <i class="fa fa-calendar"></i>
                                &nbsp;01 April 2021&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-eye"></i>
                                &nbsp;152 Dilihat
                              </small>
                              <a href="https://subang.go.id/public/berita/bupati-subang-terima-kunjungan-kerja-tim-komisi-viii-dpr-ri" class="text-white" style="text-decoration:none;">
                                  <h5>Bupati Subang Terima Kunjungan Kerja Tim Komisi VIII DPR RI</h5>
                              </a>
                          </div>
                        </div>
                      </div>
                    <div class="tab-pane fade" id="pills-umum" role="tabpanel" aria-labelledby="pills-umum-tab">
                      <div class="row">
                        Tidak Ada Data Untuk Kategori Ini
                      </div>
                      <div class="row">
                      </div>
                    </div>
                  <div class="tab-pane fade" id="pills-sosial" role="tabpanel" aria-labelledby="pills-sosial-tab">
                    <div class="row">
                      <div class="col-6">
                        <div class="item-home">
                          <img src="" class="img-thumbnail">
                        </div>
                      </div>
                      <div class="col-6">
                      <div class="item-home">
                        <small>
                          <i class="fa fa-clock"></i>
                          &nbsp;04 September 2020
                        </small>
                          <h5>Bupati Subang Resmikan Rumah Warga Korban Pohon Tumbang Usai Direhab</h5>
                            <p class="text-white text-justify py-3">
                              </p><p>
                              <span style="mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:black">Bupati Subang H. Ruhimat atau yang akrab disapa Kang Jimat, kembali bersilaturahmi sekaligus meresmikan rumah korban musibah pohon tumbang yang berada di Kampung Cilimus RT 11/RW 03, Desa Cisaat, Kecamatan Ciater, (4/9/2020).<br></span></p>
                            <p></p>
                            <a class="text-success" href="https://subang.go.id/public/berita/bupati-subang-resmikan-rumah-warga-korban-pohon-tumbang-usai-direhab">Selengkapnya...</a>
                        </div>
                       </div>
                     </div>
                    <div class="row">
                    <div class="col-lg-3 col-sm-6 py-3">
                      <div class="row-home">
                        <img src="" class="img-thumbnail">
                          </div>
                            <small>
                              <i class="fa fa-clock"></i>
                              24 Juni 2020
                            </small>
                          <a href="https://subang.go.id/public/berita/kang-jimat-monitoring-penyaluran-blt-dana-desa-tahap-kedua-di-bunihayu" class="text-white" style="text-decoration:none;">
                            <h5>Kang Jimat Monitoring Penyaluran BLT Dana Desa Tahap Kedua di Bunihayu</h5>
                          </a>
                      </div>
                    </div>
                  </div>
                </div>
              <a href="https://subang.go.id/public/berita/list" class="text-success"><strong>Selengkapnya...</strong></a>
            </div>
          </div>
        </div>
      </section>

      <!-- <section id="blog" class="blog blog-grid pt-100 pb-80">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading heading-3 text-center mb-60">
                <h2 class="heading__title">Berita Terkini</h2> -->
                <!-- <p class="heading__desc">Follow our latest news and thoughts which focuses exclusively on design, art,
                  vintage, and also our latest work updates.</p> -->
                <!-- <div class="divider__line"></div> -->
              <!-- </div>/.heading -->
            <!-- </div>/.col-lg-6 -->
          <!-- </div>/.row -->
          <!-- <div class="row"> -->
            <!-- Blog Item #1 -->
            <!-- <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="assets/images/blog/grid/1.jpg" alt="blog image">
                  </a> -->
                <!-- </div>/.entry-img -->
                <!-- <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Kategori1</a><a href="#">Kategori2</a>  -->
                    <!-- </div>/.blog-meta-cat -->
                    <!-- <span class="blog__meta-date">Bln tgl, Tahun</span> -->
                  <!-- </div>/.blog-meta -->
                  <!-- <h4 class="blog__title"><a href="#">Judul</a></h4>
                  <p class="blog__desc">Isi</p>
                  <a href="#" class="btn btn__secondary btn__link">Read More</a> -->
                <!-- </div>/.entry-content -->
              <!-- </div>/.blog-item -->
            <!-- </div>/.col-lg-4 -->
            <!-- Blog Item #2 -->
            <!-- <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="assets/images/blog/grid/2.jpg" alt="blog image">
                  </a> -->
                <!-- </div>/.entry-img -->
                <!-- <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Kategori1</a><a href="#">Kategori2</a> -->
                    <!-- </div>/.blog-meta-cat -->
                    <!-- <span class="blog__meta-date">Bln tgl, Tahun</span> -->
                  <!-- </div>/.blog-meta -->
                  <!-- <h4 class="blog__title"><a href="#">Judul</a></h4>
                  <p class="blog__desc">Isi</p>
                  <a href="#" class="btn btn__secondary btn__link">Read More</a> -->
                <!-- </div>/.entry-content -->
              <!-- </div>/.blog-item -->
            <!-- </div>/.col-lg-4 -->
            <!-- Blog Item #3 -->
            <!-- <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="assets/images/blog/grid/3.jpg" alt="blog image">
                  </a> -->
                <!-- </div>/.entry-img -->
                <!-- <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Kategori1</a><a href="#">Kategori2</a> -->
                    <!-- </div>/.blog-meta-cat -->
                    <!-- <span class="blog__meta-date">Bln tgl, Tahun</span> -->
                  <!-- </div>/.blog-meta -->
                  <!-- <h4 class="blog__title"><a href="#">Judul</a></h4>
                  <p class="blog__desc">Isi</p>
                  <a href="#" class="btn btn__secondary btn__link">Read More</a> -->
                <!-- </div>/.entry-content -->
              <!-- </div>/.blog-item -->
            <!-- </div>/.col-lg-4 -->
          <!-- </div>/.row -->
        <!-- </div>/.container -->
      <!-- </section>/.blog -->

      <!-- =====================
         Clients 1
      ======================== -->
      <!-- <section id="clients2" class="clients clients-1 pt-100 pb-100 bg-gray"> -->
        <!-- <div class="container"> -->
          <!-- <div class="row"> -->
            <!-- <div class="col-sm-12 col-md-12 col-lg-12"> -->
              <!-- <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="3" data-autoplay="true" -->
                <!-- data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="700"> -->
                <!-- <div class="client"> -->
                  <!-- <a href="#"><img src="assets/images/clients/9.png" alt="client"></a> -->
                <!-- </div>/.client -->
                <!-- <div class="client"> -->
                  <!-- <a href="#"><img src="assets/images/clients/10.png" alt="client"></a> -->
                <!-- </div>/.client -->
                <!-- <div class="client"> -->
                  <!-- <a href="#"><img src="assets/images/clients/11.png" alt="client"></a> -->
                <!-- </div>/.client -->
                <!-- <div class="client"> -->
                  <!-- <a href="#"><img src="assets/images/clients/12.png" alt="client"></a> -->
                <!-- </div>/.client -->
                <!-- <div class="client"> -->
                  <!-- <a href="#"><img src="assets/images/clients/13.png" alt="client"></a> -->
                <!-- </div>/.client -->
                <!-- <div class="client"> -->
                  <!-- <a href="#"><img src="assets/images/clients/11.png" alt="client"></a> -->
                <!-- </div>/.client -->
              <!-- </div>/.carousel -->
            <!-- </div>/.col-lg-12 -->
          <!-- </div>/.row -->
        <!-- </div>/.container -->
      <!-- </section>/.clients 1 -->

      <!-- =========================
              Testimonial #4
      =========================  -->
      <!-- <section id="testimonial4"
        class="testimonial testimonial-1 testimonial-4 testimonial-white-text bg-overlay bg-overlay-3 bg-parallax text-center pt-100 pb-100">
        <div class="bg-img"><img src="assets/images/backgrounds/3.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading heading-4 text-center mb-60">
                <h2 class="heading__title">Camat</h2>
                <div class="divider__line divider__theme"></div> -->
              <!-- </div>/.heading 6 -->
            <!-- </div>/.col-lg-8 -->
          <!-- </div>/.row -->
          <!-- <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1"> -->
              <!-- <div class="carousel owl-carousel carousel-arrows" data-slide="1" data-slide-md="1" data-slide-sm="1" -->
                <!-- data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800"> -->
                <!-- Testimonial #1 -->
                <!-- <div class="testimonial-item">
                  <div class="testimonial__content">
                    <div class="testimonial__thumb">
                      <img src="assets/img/avatar.png"> -->
                    <!-- </div>/.testimonial-thumb -->
                    <!-- <p class="testimonial__desc">My portfolio was a simple & small task, but the persistence and
                      determination of the team turned it into an awesome and great portfolio which make me very happy!
                      York strategists help me set an objective and choose my tools.</p> -->
                  <!-- </div>/.testimonial-content -->
                  <!-- <div class="testimonial__icon"></div>
                  <div class="testimonial__meta">
                    <h5 class="testimonial__meta-title">Indri Tandia, S.STP., M.Si.</h5>
                    <p class="testimonial__meta-desc">(0260)414841</p> -->
                  <!-- </div>/.testimonial-meta -->
                <!-- </div>/. testimonial-item -->
                <!-- Testimonial #2 -->
                <!-- <div class=" testimonial-item"> -->
                  <!-- <div class="testimonial__content"> -->
                    <!-- <div class="testimonial__thumb"> -->
                      <!-- <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb"> -->
                    <!-- </div>/.testimonial-thumb -->
                    <!-- <p class="testimonial__desc">My portfolio was a simple & small task, but the persistence and -->
                      <!-- determination of the team turned it into an awesome and great portfolio which make me very happy! -->
                      <!-- York strategists help me set an objective and choose my tools.</p> -->
                  <!-- </div>/.testimonial-content -->
                  <!-- <div class="testimonial__icon"></div> -->
                  <!-- <div class="testimonial__meta"> -->
                    <!-- <h5 class="testimonial__meta-title">Ahmed Abdallah</h5> -->
                    <!-- <p class="testimonial__meta-desc">Web Agency</p> -->
                  <!-- </div>/.testimonial-meta -->
                <!-- </div>/. testimonial-item -->
              <!-- </div> -->
            <!-- </div>/.col-lg-10 -->
          <!-- </div>/.row -->
        <!-- </div>/.container -->
      <!-- </section>/.testimonial4 -->

      <!-- ========================
          Team 3
      ========================== -->
      <!-- <section id="team3" class="team team-2 team-3 text-center pt-100 pb-0">
        <div class="container-fluid col-padding-0">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading heading-3 mb-60">
                <h2 class="heading__title">Sejarah</h2>
                <p>1. Undang-Undang Nomor  14 Tahun 1950 tentang Pembentukan Daerah-Daerah Kabupaten Dalam Lingkungan Propinsi Djawa Barat.<br>
                2. Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara.<br>
                3. Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah sebagaimana telah diubah beberapa kali, terakhir dengan Undang-Undang Nomor 9 Tahun 2015 tentang Perubahan Kedua Atas Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah;<br>
                4. Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah;<br>
                5. Peraturan Daerah Kabupaten Subang Nomor 7 Tahun 2016, tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Subang;<br>
                6. Peraturan Bupati Subang Nomor 34 Tahun 2016, tentang Susunan Organisasi Perangkat Daerah Kecamatan.
                </p>
                <div class="divider__line"></div> -->
              <!-- </div>/.heading -->
            <!-- </div>/.col-lg-6 -->
          <!-- </div>/.row -->
          <!-- <div class="row"> -->
            <!-- Member #1 -->
            <!-- <div class="col-sm-6 col-md-3 col-lg-3"> -->
              <!-- <div class="member"> -->
                <!-- <div class="member__img"> -->
                  <!-- <img src="assets/images/team/1.jpg" alt="member img"> -->
                <!-- </div>/.member-img -->
                <!-- <div class="member__hover">
                  <div class="member__content">
                    <div class="member__content-inner">
                      <div class="social__icons justify-content-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a> -->
                      <!-- </div>/.social-icons -->
                      <!-- <div class="member__info">
                        <h5 class="member__name">Ahmed Abd Alhaleem</h5>
                        <p class="member__desc">Graphic Designer</p> -->
                      <!-- </div>/.member-info -->
                    <!-- </div>/.member-content-inner -->
                  <!-- </div>/.member-content -->
                <!-- </div>/.member-hover -->
              <!-- </div>/.member -->
            <!-- </div>/.col-lg-3 -->
            <!-- Member #2 -->
            <!-- <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/2.jpg" alt="member img">
                  <div class="member__hover">
                    <div class="member__content">
                      <div class="member__content-inner">
                        <div class="social__icons justify-content-center">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-instagram"></i></a> -->
                        <!-- </div>/.social-icons -->
                        <!-- <div class="member__info">
                          <h5 class="member__name">Ahmed Hassan</h5>
                          <p class="member__desc">Web Developer</p> -->
                        <!-- </div>/.member-info -->
                      <!-- </div>/.member-content-inner -->
                    <!-- </div>/.member-content -->
                  <!-- </div>/.member-hover -->
                <!-- </div>/.member-img -->
              <!-- </div>/.member -->
            <!-- </div>/.col-lg-3 -->
            <!-- Member #3 -->
            <!-- <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/3.jpg" alt="member img">
                  <div class="member__hover">
                    <div class="member__content">
                      <div class="member__content-inner">
                        <div class="social__icons justify-content-center">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-instagram"></i></a> -->
                        <!-- </div>/.social-icons -->
                        <!-- <div class="member__info">
                          <h5 class="member__name">Mohamed Habaza</h5>
                          <p class="member__desc">Lead Dev Ops</p> -->
                        <!-- </div>/.member-info -->
                      <!-- </div>/.member-content-inner -->
                    <!-- </div>/.member-content -->
                  <!-- </div>/.member-hover -->
                <!-- </div>/.member-img -->
              <!-- </div>/.member -->
            <!-- </div>/.col-lg-3 -->
            <!-- Member #4 -->
            <!-- <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/4.jpg" alt="member img">
                  <div class="member__hover">
                    <div class="member__content">
                      <div class="member__content-inner">
                        <div class="social__icons justify-content-center">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-instagram"></i></a> -->
                        <!-- </div>/.social-icons -->
                        <!-- <div class="member__info">
                          <h5 class="member__name">Amal Maher</h5>
                          <p class="member__desc">Telesale</p> -->
                        <!-- </div>/.member-info -->
                      <!-- </div>/.member-content-inner -->
                    <!-- </div>/.member-content -->
                  <!-- </div>/.member-hover -->
                <!-- </div>/.member-img -->
              <!-- </div>/.member -->
            <!-- </div>/.col-lg-3 -->
          <!-- </div>/.row -->
        <!-- </div>/.container -->
      </section><!-- /.team3 end --> 

      <!-- ========================
         cta 1
      =========================== -->
      <!-- <section id="cta1" class="cta cta-1 pt-60 pb-60 text-center-xs-sm">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-9">
              <h3 class="cta__title">Do you want to work with us?</h3>
              <p class="cta__desc">Developing a plan that is custom-built for your business.</p> -->
            <!-- </div>/.col-lg-9 -->
            <!-- <div class="col-sm-12 col-md-4 col-lg-3 text-right text-center-xs-sm">
              <a href="#" class="btn btn__rounded btn__primary btn__hover3">Get Started</a> -->
            <!-- </div>/.col-lg-3 -->
          <!-- </div>/.row -->
        <!-- </div>/.container -->
        <!-- </section>/.cta 1 -->

@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection

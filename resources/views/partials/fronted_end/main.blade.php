<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 content-col" data-aos="fade-up">
            <div class="content">
              <div class="agency-name">
                <h5>E-PRESENSI</h5>
              </div>

              <div class="main-heading">
                <h1>E-PRESENSI <br>BANGKA BARAT</h1>
              </div>

              <div class="divider"></div>

              <div class="description">
                <p>Temukan strategi inovatif untuk komunikasi visual yang signifikan. Kami mengubah ide menjadi realitas yang menarik, memastikan merek Anda berbeda di pasar yang padat. Tim kami yang terdedik menggunakan teknik canggih untuk memberikan hasil yang luar biasa yang relevan dengan audiens Anda.</p>
              </div>

              <div class="cta-button">
                <a href="#services" class="btn">
                  <span>JELAJAH LAYANAN</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-out">
            <div class="visual-content">
              <div class="fluid-shape">
                <img src="{{asset('assets/fronted_end/img/abstract/abstract-1.webp')}}" alt="Abstract Fluid Shape" class="fluid-img">
              </div>

              <div class="stats-card">
                <div class="stats-number">
                  <h2>5K</h2>
                </div>
                <div class="stats-label">
                  <p>Kampanye Berhasil</p>
                </div>
                <div class="stats-arrow">
                  <a href="#portfolio"><i class="bi bi-arrow-up-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
        <div><span>Pelajari Lebih Lanjut</span> <span class="description-title">Tentang Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gx-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image position-relative">
              <img src="{{asset('assets/fronted_end/img/about/about-portrait-1.webp')}}" class="img-fluid rounded-4 shadow-sm" alt="About Image" loading="lazy">
              <div class="experience-badge">
                <span class="years">20+</span>
                <span class="text">Tahun Pengalaman</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Meningkatkan Kinerja Bisnis Melalui Inovasi</h2>
              <p class="lead">Kami fokus pada menciptakan strategi bersifat unik yang menavigasi kompleksitas dan memberikan hasil yang nyata untuk klien kami.</p>
              <p>Melalui campuran analitik cerdas dan pemecahan masalah kreatif, kami membantu organisasi berkembang dalam pasar yang berkembang pesat.</p>

              <div class="row g-4 mt-3">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                  <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h5>Dukungan Tim Terdedik</h5>
                    <p>Profesional kami yang terlatih berkomitmen untuk memberikan layanan personalisasi dan solusi yang signifikan pada setiap kesempatan.</p>
                  </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                  <div class="feature-item">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h5>Pendekatan Berpikir Maju</h5>
                    <p>Kami mengadopsi pendekatan inovatif untuk mengembangkan strategi unik yang menghasilkan kesuksesan yang berkelanjutan.</p>
                  </div>
                </div>
              </div>

              <a href="#" class="btn btn-primary mt-4">Jelajahi Layanan Kami</a>
            </div>
          </div>
        </div>

        <div class="testimonial-section mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
              <div class="testimonial-intro">
                <h3>Klien Kami Berbicara Tinggi</h3>
                <p>Dengarkan langsung dari mereka yang telah merasakan dampak dari kerjasama kami dan mencapai tujuan strategis mereka.</p>
                <div class="swiper-nav-buttons mt-4">
                  <button class="slider-prev"><i class="bi bi-arrow-left"></i></button>
                  <button class="slider-next"><i class="bi bi-arrow-right"></i></button>
                </div>
              </div>
            </div>

            <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
              <div class="testimonial-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "navigation": {
                      "nextEl": ".slider-next",
                      "prevEl": ".slider-prev"
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>"Codeqiu dan komitmen yang tak tergoyahkan terhadap hasil memberikan nilai yang luar biasa. Efisiensi operasional kami telah signifikan meningkat."</p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img src="{{asset('assets/fronted_end/img/person/person-f-1.webp')}}" class="client-img" alt="Client" loading="lazy">
                        <div>
                          <h6 class="mb-0">Eleanor Vance</h6>
                          <span>Manajer Operasi</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>"Berkolaborasi dengan tim mereka adalah sebuah pengalaman yang menakjubkan. Strategi inovatif mereka membimbing kami menuju mencapai tujuan dengan presisi dan kecepatan."</p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img src="{{asset('assets/fronted_end/img/person/person-m-1.webp')}}" class="client-img" alt="Client" loading="lazy">
                        <div>
                          <h6 class="mb-0">David Kim</h6>
                          <span>Kepala Produk</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>"Kedalaman pengetahuan dan dedikasi yang tak tergoyahkan mereka bawa ke setiap proyek adalah luar biasa. Mereka telah menjadi mitra penting dalam menggerakkan pertumbuhan kami."</p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img src="{{asset('assets/fronted_end/img/person/person-f-2.webp')}}" class="client-img" alt="Client" loading="lazy">
                        <div>
                          <h6 class="mb-0">Isabella Diaz</h6>
                          <span>Analitik Penelitian</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>"Dedikasi mereka untuk menyediakan solusi yang superior dan perhatian mereka yang teliti terhadap detail telah mempengaruhi jalur pertumbuhan korporasi kami secara mendalam."</p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img src="{{asset('assets/fronted_end/img/person/person-f-3.webp')}}" class="client-img" alt="Client" loading="lazy">
                        <div>
                          <h6 class="mb-0">Olivia Chen</h6>
                          <span>Strategi Pengembangan</span>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <div><span>Periksa Layanan Kami</span> <span class="description-title">Layanan Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="service-header">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
              <div class="service-intro">
                <h2 class="service-heading">
                  <div>Bisnis Inovatif</div>
                  <div><span>Solusi Kinerja</span></div>
                </h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="service-summary">
                <p>
                  Kami mengintegrasikan strategi berpikir maju, pendekatan kreatif, dan teknologi terbaru untuk menyediakan pengalaman pelanggan yang luar biasa yang mendorong pertumbuhan dan mengaktifkan pasar target.
                </p>
                <a href="services.html" class="service-btn">
                  Lihat Semua Layanan
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-palette"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Branding <span>Codeqiu</span>
                </a>
              </h3>
              <p>
                Nulla facilisi. Maecenas eget magna neque. Suspendisse potenti. Curabitur eleifend nisi non magna vulputate, vel condimentum libero tempus. Proin consectetur feugiat diam.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-gem"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Design <span>Codeqiu</span>
                </a>
              </h3>
              <p>
                Praesent euismod varius tellus, vel bibendum nunc interdum at. Donec vehicula diam vel metus venenatis convallis. Aliquam erat volutpat. Etiam viverra magna sit amet.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-megaphone"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Pemasaran <span>Codeqiu</span>
                </a>
              </h3>
              <p>
                Vivamus tempor velit id magna dictum, sed fermentum nisi faucibus. Integer nec pretium sapien. Fusce tincidunt ligula et purus consequat, ac pellentesque nulla eleifend.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Digital <span>Codeqiu</span>
                </a>
              </h3>
              <p>
                Cras fermentum odio eu feugiat malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et accumsan cursus. Morbi placerat nulla vel nunc viverra accumsan.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Growth <span>Codeqiu</span>
                </a>
              </h3>
              <p>
                Aenean vel augue vel nisi bibendum posuere. Phasellus in lacus quis urna sodales dignissim. Duis aliquam libero eget risus facilisis. Quisque eget libero vel nisl fringilla.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-camera-video"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Media <span>Codeqiu</span>
                </a>
              </h3>
              <p>
                Etiam efficitur lacus in diam finibus, nec ultrices est sagittis. Maecenas elementum magna sed risus faucibus, nec commodo purus facilisis. Vestibulum accumsan magna.
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Steps Section -->
    <section id="steps" class="steps section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Langkah</h2>
        <div><span>Bagaimana Kami</span> <span class="description-title">Bekerja</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-wrapper">

          <div class="step-item" data-aos="fade-right" data-aos-delay="200">
            <div class="step-content">
              <div class="step-icon">
                <i class="bi bi-lightbulb"></i>
              </div>
              <div class="step-info">
                <span class="step-number">Step 01</span>
                <h3>Konsultasi Awal</h3>
                <p>Melakukan sesi penemuan yang mendalam untuk memahami kebutuhan dan tujuan bisnis Anda. Tim kami ahli menganalisis kebutuhan Anda untuk menciptakan pendekatan yang disesuaikan.</p>
              </div>
            </div>
          </div><!-- End Step Item -->

          <div class="step-item" data-aos="fade-left" data-aos-delay="300">
            <div class="step-content">
              <div class="step-icon">
                <i class="bi bi-gear"></i>
              </div>
              <div class="step-info">
                <span class="step-number">Step 02</span>
                <h3>Perencanaan &amp; Strategi</h3>
                <p>Mengembangkan strategi komprehensif dan rencana proyek yang detail berdasarkan konsultasi awal. Kami menciptakan rencana aksi dengan jelas dengan target dan hasil yang jelas.</p>
              </div>
            </div>
          </div><!-- End Step Item -->

          <div class="step-item" data-aos="fade-right" data-aos-delay="400">
            <div class="step-content">
              <div class="step-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div class="step-info">
                <span class="step-number">Step 03</span>
                <h3>Fase Pengembangan</h3>
                <p>Melaksanakan strategi yang direncanakan dengan presisi dan kecepatan. Tim kami menerapkan solusi sambil mempertahankan komunikasi konstan dan pembaruan kemajuan.</p>
              </div>
            </div>
          </div><!-- End Step Item -->

          <div class="step-item" data-aos="fade-left" data-aos-delay="500">
            <div class="step-content">
              <div class="step-icon">
                <i class="bi bi-check2-circle"></i>
              </div>
              <div class="step-info">
                <span class="step-number">Step 04</span>
                <h3>Peluncuran &amp; Dukungan</h3>
                <p>Memastikan pelaksanaan yang lancar dan memberikan dukungan terus menerus untuk solusi yang diterapkan. Kami memantau kinerja dan membuat penyesuaian yang diperlukan untuk hasil optimal.</p>
              </div>
            </div>
          </div><!-- End Step Item -->

        </div>

      </div>

    </section><!-- /Steps Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="advertise-1 d-flex flex-column flex-lg-row gap-4 align-items-center position-relative">

          <div class="content-left flex-grow-1" data-aos="fade-right" data-aos-delay="200">
            <span class="badge text-uppercase mb-2">Jangan Terlewatkan!</span>
            <h2>Revolutionisasi Pengalaman Digital Anda Hari Ini</h2>
            <p class="my-4">Codeqiu mempercepat pertumbuhan bisnis Anda melalui solusi inovatif dan teknologi terdepan. Bergabunglah dengan ribuan pelanggan yang telah mengubah operasional mereka.</p>

            <div class="features d-flex flex-wrap gap-3 mb-4">
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Dukungan Premium</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Integrasi Cloud</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Analitik Real-time</span>
              </div>
            </div>

            <div class="cta-buttons d-flex flex-wrap gap-3">
              <a href="#" class="btn btn-primary">Mulai Percobaan Gratis</a>
              <a href="#" class="btn btn-outline">Pelajari Lebih Lanjut</a>
            </div>
          </div>

          <div class="content-right position-relative" data-aos="fade-left" data-aos-delay="300">
            <img src="{{asset('assets/fronted_end/img/misc/misc-1.webp')}}" alt="Digital Platform" class="img-fluid rounded-4">
            <div class="floating-card">
              <div class="card-icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <div class="card-content">
                <span class="stats-number">245%</span>
                <span class="stats-text">Tingkat Pertumbuhan</span>
              </div>
            </div>
          </div>

          <div class="decoration">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
          </div>

        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimoni</h2>
        <div><span>Periksa Testimoni Kami</span> <span class="description-title">Testimoni Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "slidesPerView": 1,
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Sed ut perspiciatis unde omnis</h2>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    </p>
                    <p>
                      Beatae magnam dolore quia ipsum. Voluptatem totam et qui dolore dignissimos. Amet quia sapiente laudantium nihil illo et assumenda sit cupiditate. Nam perspiciatis perferendis minus consequatur. Enim ut eos quo.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="{{asset('assets/fronted_end/img/person/person-m-7.webp')}}" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Saul Goodman</h3>
                        <span>Client</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="{{asset('assets/fronted_end/img/person/person-m-7.webp')}}" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Nemo enim ipsam voluptatem</h2>
                    <p>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    </p>
                    <p>
                      Dolorem excepturi esse qui amet maxime quibusdam aut repellendus voluptatum. Corrupti enim a repellat cumque est laborum fuga consequuntur. Dolorem nostrum deleniti quas voluptatem iure dolorum rerum. Repudiandae doloribus ut repellat harum vero aut. Modi aut velit aperiam aspernatur odit ut vitae.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="{{asset('assets/fronted_end/img/person/person-f-8.webp')}}" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Sara Wilsson</h3>
                        <span>Desainer Codeqiu</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="{{asset('assets/fronted_end/img/person/person-f-8.webp')}}" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>
                      Labore nostrum eos impedit
                    </h2>
                    <p>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    </p>
                    <p>
                      Itaque ut explicabo vero occaecati est quam rerum sed. Numquam tempora aut aut quaerat quia illum. Nobis quia autem odit ipsam numquam. Doloribus sit sint corporis eius totam fuga. Hic nostrum suscipit corrupti nam expedita adipisci aut optio.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="{{asset('assets/fronted_end/img/person/person-m-9.webp')}}" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Matt Brandon</h3>
                        <span>Freelancer Codeqiu</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="{{asset('assets/fronted_end/img/person/person-m-9.webp')}}" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Impedit dolor facilis nulla</h2>
                    <p>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    </p>
                    <p>
                      Omnis aspernatur accusantium qui delectus praesentium repellendus. Facilis sint odio aspernatur voluptas commodi qui qui qui pariatur. Corrupti deleniti itaque quaerat ipsum deleniti culpa tempora tempore. Et consequatur exercitationem hic aspernatur nobis est voluptatibus architecto laborum.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="{{asset('assets/fronted_end/img/person/person-f-10.webp')}}" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Jena Karlis</h3>
                        <span>Pemilik Toko Codeqiu</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="{{asset('assets/fronted_end/img/person/person-f-10.webp')}}" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

          </div>

          <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <div><span>Periksa Portfolio Kami</span> <span class="description-title">Portfolio Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">
              <i class="bi bi-grid-3x3"></i> Semua Proyek
            </li>
            <li data-filter=".filter-ui">
              <i class="bi bi-phone"></i> UI/UX
            </li>
            <li data-filter=".filter-development">
              <i class="bi bi-code-slash"></i> Pengembangan
            </li>
            <li data-filter=".filter-photography">
              <i class="bi bi-camera"></i> Fotografi
            </li>
            <li data-filter=".filter-marketing">
              <i class="bi bi-graph-up"></i> Pemasaran
            </li>
          </ul>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('assets/fronted_end/img/portfolio/portfolio-1.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Desain UI/UX</div>
                      <h3 class="entry-title">Aplikasi Bank Mobile</h3>
                      <div class="entry-links">
                        <a href="{{asset('assets/fronted_end/img/portfolio/portfolio-1.webp')}}" class="glightbox" data-gallery="portfolio-gallery-ui" data-glightbox="title: Mobile Banking App; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('assets/fronted_end/img/portfolio/portfolio-10.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Pengembangan</div>
                      <h3 class="entry-title">Platform E-Learning</h3>
                      <div class="entry-links">
                        <a href="{{asset('assets/fronted_end/img/portfolio/portfolio-10.webp')}}" class="glightbox" data-gallery="portfolio-gallery-development" data-glightbox="title: E-Learning Platform; description: Nulla vitae elit libero, a pharetra augue mollis interdum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('assets/fronted_end/img/portfolio/portfolio-7.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Photography Codeqiu</div>
                      <h3 class="entry-title">Arsitektur Kota</h3>
                      <div class="entry-links">
                        <a href="{{asset('assets/fronted_end/img/portfolio/portfolio-7.webp')}}" class="glightbox" data-gallery="portfolio-gallery-photography" data-glightbox="title: Urban Architecture; description: Sed ut perspiciatis unde omnis iste natus error sit voluptatem.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('assets/fronted_end/img/portfolio/portfolio-4.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing Codeqiu</div>
                      <h3 class="entry-title">Social Media Campaign</h3>
                      <div class="entry-links">
                        <a href="{{asset('assets/fronted_end/img/portfolio/portfolio-4.webp')}}" class="glightbox" data-gallery="portfolio-gallery-marketing" data-glightbox="title: Social Media Campaign; description: Quis autem vel eum iure reprehenderit qui in ea voluptate.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('assets/fronted_end/img/portfolio/portfolio-2.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">UI/UX Design Codeqiu</div>
                      <h3 class="entry-title">Smart Home Interface</h3>
                      <div class="entry-links">
                        <a href="{{asset('assets/fronted_end/img/portfolio/portfolio-2.webp')}}" class="glightbox" data-gallery="portfolio-gallery-ui
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('assets/fronted_end/img/portfolio/portfolio-11.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Development Codeqiu</div>
                      <h3 class="entry-title">Cloud Management System</h3>
                      <div class="entry-links">
                        <a href="{{asset('assets/fronted_end/img/portfolio/portfolio-11.webp')}}" class="glightbox" data-gallery="portfolio-gallery-development" data-glightbox="title: Cloud Management System; description: Temporibus autem quibusdam et aut officiis debitis.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('assets/fronted_end/img/portfolio/portfolio-8.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Photography Codeqiu</div>
                      <h3 class="entry-title">Nature Collection</h3>
                      <div class="entry-links">
                        <a href="{{asset('assets/fronted_end/img/portfolio/portfolio-8.webp')}}" class="glightbox" data-gallery="portfolio-gallery-photography" data-glightbox="title: Nature Collection; description: Integer posuere erat a ante venenatis dapibus posuere velit aliquet.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
              <article class="portfolio-entry">
                <figure class="entry-image">
                  <img src="{{asset('assets/fronted_end/img/portfolio/portfolio-5.webp')}}" class="img-fluid" alt="" loading="lazy">
                  <div class="entry-overlay">
                    <div class="overlay-content">
                      <div class="entry-meta">Marketing Codeqiu</div>
                      <h3 class="entry-title">Brand Strategy</h3>
                      <div class="entry-links">
                        <a href="{{asset('assets/fronted_end/img/portfolio/portfolio-5.webp')}}" class="glightbox" data-gallery="portfolio-gallery-marketing" data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                        <a href="portfolio-details.html">
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
              </article>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tim Kami</h2>
        <div><span>Lihat Tim Kami</span> <span class="description-title">Tim Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex">
              <div class="member-img">
                <img src="{{asset('assets/fronted_end/img/person/person-m-7.webp')}}" class="img-fluid" alt="" loading="lazy">
              </div>
              <div class="member-info flex-grow-1">
                <h4>Walter White</h4>
                <span>Direktur Utama Codeqiu</span>
                <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  <a href=""><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex">
              <div class="member-img">
                <img src="{{asset('assets/fronted_end/img/person/person-f-8.webp')}}" class="img-fluid" alt="" loading="lazy">
              </div>
              <div class="member-info flex-grow-1">
                <h4>Sarah Jhonson</h4>
                <span>Manajer Produk Codeqiu</span>
                <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  <a href=""><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex">
              <div class="member-img">
                <img src="{{asset('assets/fronted_end/img/person/person-m-6.webp')}}" class="img-fluid" alt="" loading="lazy">
              </div>
              <div class="member-info flex-grow-1">
                <h4>William Anderson</h4>
                <span>CTO Codeqiu</span>
                <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  <a href=""><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex">
              <div class="member-img">
                <img src="{{asset('assets/fronted_end/img/person/person-f-4.webp')}}" class="img-fluid" alt="" loading="lazy">
              </div>
              <div class="member-info flex-grow-1">
                <h4>Amanda Jepson</h4>
                <span>Akuntan Codeqiu</span>
                <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  <a href=""><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="team-member d-flex">
              <div class="member-img">
                <img src="{{asset('assets/fronted_end/img/person/person-m-12.webp')}}" class="img-fluid" alt="" loading="lazy">
              </div>
              <div class="member-info flex-grow-1">
                <h4>Brian Doe</h4>
                <span>Pemasaran Codeqiu</span>
                <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  <a href=""><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="team-member d-flex">
              <div class="member-img">
                <img src="{{asset('assets/fronted_end/img/person/person-f-9.webp')}}" class="img-fluid" alt="" loading="lazy">
              </div>
              <div class="member-info flex-grow-1">
                <h4>Josepha Palas</h4>
                <span>Operasional Codeqiu</span>
                <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  <a href=""><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Harga</h2>
        <div><span>Lihat Harga Kami</span> <span class="description-title">Harga</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <!-- Basic Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-card">
              <div class="plan-header">
                <div class="plan-icon">
                  <i class="bi bi-box"></i>
                </div>
                <h3>Pemula Codeqiu</h3>
                <p>Untuk individu yang baru memulai</p>
              </div>
              <div class="plan-pricing">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">12</span>
                  <span class="period">/month</span>
                </div>
              </div>
              <div class="plan-features">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Nullam accumsan lorem Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Vestibulum auctor dapibus Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Nulla consequat massa Codeqiu</li>
                  <li class="disabled"><i class="bi bi-x-circle-fill"></i> In enim justo rhoncus ut Codeqiu</li>
                  <li class="disabled"><i class="bi bi-x-circle-fill"></i> Curabitur ullamcorper ultricies Codeqiu</li>
                </ul>
              </div>
              <div class="plan-cta">
                <a href="#" class="btn-plan">Pilih Paket</a>
              </div>
            </div>
          </div><!-- End Basic Plan -->

          <!-- Professional Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-card popular">
              <div class="popular-tag">Paling Populer</div>
              <div class="plan-header">
                <div class="plan-icon">
                  <i class="bi bi-briefcase"></i>
                </div>
                <h3>Profesional Codeqiu</h3>
                <p>Untuk tim kecil dan bisnis yang berkembang</p>
              </div>
              <div class="plan-pricing">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">39</span>
                  <span class="period">/bulan</span>
                </div>
              </div>
              <div class="plan-features">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Donec quam felis ultricies Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Nam eget dui etiam rhoncus Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Maecenas tempus tellus Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Donec pede justo fringilla Codeqiu</li>
                  <li class="disabled"><i class="bi bi-x-circle-fill"></i> Cras dapibus vivamus Codeqiu</li>
                </ul>
              </div>
              <div class="plan-cta">
                <a href="#" class="btn-plan">Pilih Paket</a>
              </div>
            </div>
          </div><!-- End Professional Plan -->

          <!-- Enterprise Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="pricing-card">
              <div class="plan-header">
                <div class="plan-icon">
                  <i class="bi bi-building"></i>
                </div>
                <h3>Enterprise Codeqiu</h3>
                <p>Untuk organisasi besar dan korporasi</p>
              </div>
              <div class="plan-pricing">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">79</span>
                  <span class="period">/bulan</span>
                </div>
              </div>
              <div class="plan-features">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Etiam sit amet orci eget Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Pellentesque posuere vulputate Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Quisque rutrum aenean Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Fusce vulputate eleifend Codeqiu</li>
                  <li><i class="bi bi-check-circle-fill"></i> Phasellus viverra nulla</li>
                </ul>
              </div>
              <div class="plan-cta">
                <a href="#" class="btn-plan">Pilih Paket</a>
              </div>
            </div>
          </div><!-- End Enterprise Plan -->
        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section class="faq-9 faq section" id="faq">

      <div class="container">
        <div class="row">

          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">Punya pertanyaan? Lihat FAQ</h2>
            <p class="faq-description">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                <div class="faq-content">
                  <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>
          </div>

        </div>
      </div>
    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <div><span>Mari</span> <span class="description-title">Bergabung</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Alamat Kami</h4>
                <p>1842 Maple Avenue, Portland, Oregon 97204</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Kami</h4>
                <p>info@codeqiu.com</p>
                <p>contact@codeqiu.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>Jam Operasional</h4>
                <p>Minggu-Jumat: 9 AM - 6 PM</p>
                <p>Sabtu: 9 AM - 4 PM</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Google Maps (Full Width) -->
      <div class="map-section" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Contact Form Section (Overlapping) -->
      <div class="container form-container-overlap">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-10">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Hubungi Kami</h2>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-person"></i>
                        <input type="text" class="form-control" name="name" placeholder="First Name" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-envelope"></i>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-text-left"></i>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-chat-dots message-icon"></i>
                        <textarea class="form-control" name="message" placeholder="Write Message..." style="height: 180px" required=""></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="loading">Memuat</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-submit">KIRIM PESAN</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

    <div class="modal" id="loginModal"> 
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="container-xxl">
          <div class="row vh-100 d-flex justify-content-center">
              <div class="col-12 align-self-center">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-lg-12 mx-auto">
                              <div class="card">
                                  <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                      <div class="text-center p-3">
                                          <a href="{{url('/')}}" class="logo logo-admin">
                                              <img src="{{asset('assets/fronted_end/img/logo-sm.png')}}" height="50" alt="logo"
                                                  class="auth-logo">
                                          </a>
                                          <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Mari Kita Mulai Codeqiu
                                          </h4>
                                          <p class="text-muted fw-medium mb-0">Masuk untuk melanjutkan ke Codeqiu.</p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                      <form class="my-4" action="index.html">
                                          <div class="form-group mb-2">
                                              <label class="form-label" for="username">Nama Pengguna</label>
                                              <input type="text" class="form-control" id="username" name="username"
                                                  placeholder="Masukkan Nama Pengguna">
                                          </div><!--end form-group-->
  
                                          <div class="form-group">
                                              <label class="form-label" for="userpassword">Kata sandi</label>
                                              <input type="password" class="form-control" name="password"
                                                  id="userpassword" placeholder="Masukkan kata sandi">
                                          </div><!--end form-group-->
  
                                          <div class="form-group row mt-3">
                                              <div class="col-sm-6">
                                                  <div class="form-check form-switch form-switch-primary">
                                                      <input class="form-check-input" type="checkbox"
                                                          id="customSwitchPrimary">
                                                      <label class="form-check-label" for="customSwitchPrimary">Ingat
                                                          saya</label>
                                                  </div>
                                              </div><!--end col-->
                                              <div class="col-sm-6 text-end">
                                                  <a href="{{url('/lupa-kata-sandi')}}" class="text-muted font-13"><i
                                                          class="dripicons-lock"></i> Lupa Kata Sandi?</a>
                                              </div><!--end col-->
                                          </div><!--end form-group-->
  
                                          <div class="form-group mb-0 row">
                                              <div class="col-12">
                                                  <div class="d-grid mt-3">
                                                      <button class="btn btn-primary" type="button">Masuk <i
                                                              class="fas fa-sign-in-alt ms-1"></i></button>
                                                  </div>
                                              </div><!--end col-->
                                          </div> <!--end form-group-->
                                      </form><!--end form-->
                                      <div class="text-center mb-2">
                                        <p class="text-muted">Belum punya akun ? 
                                          <a class="btn-getstarted" data-bs-toggle="modal" href="#daftarModal">Daftar Gratis</a>

                                        <h6 class="px-3 d-inline-block">Atau Login Dengan</h6>
                                    </div>
                                      <div class="d-flex justify-content-center">
                                          <a href=""
                                              class="d-flex justify-content-center align-items-center thumb-md bg-blue-subtle text-blue rounded-circle me-2">
                                              <i class="fab fa-facebook align-self-center"></i>
                                          </a>
                                          <a href=""
                                              class="d-flex justify-content-center align-items-center thumb-md bg-info-subtle text-info rounded-circle me-2">
                                              <i class="fab fa-twitter align-self-center"></i>
                                          </a>
                                          <a href=""
                                              class="d-flex justify-content-center align-items-center thumb-md bg-danger-subtle text-danger rounded-circle">
                                              <i class="fab fa-google align-self-center"></i>
                                          </a>
                                      </div>
                                  </div><!--end card-body-->
                              </div><!--end card-->
                          </div><!--end col-->
                      </div><!--end row-->
                  </div><!--end card-body-->
              </div><!--end col-->
          </div><!--end row-->
      </div><!-- container -->
      </div>
    </div>
    <!-- Modal Structure -->

    
    <div class="modal" id="daftarModal"> 
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="container-xxl">
          <div class="row vh-100 d-flex justify-content-center">
              <div class="col-12 align-self-center">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-lg-12 mx-auto">
                              <div class="card">
                                  <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                      <div class="text-center p-3">
                                          <a href="{{url('/')}}" class="logo logo-admin">
                                              <img src="{{asset('assets/fronted_end/img/logo-sm.png')}}" height="50" alt="logo"
                                                  class="auth-logo">
                                          </a>
                                          <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Mari Kita Mulai Codeqiu
                                          </h4>
                                          <p class="text-muted fw-medium mb-0">Masuk untuk melanjutkan ke Codeqiu.</p>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                      <form class="my-4" action="index.html">
                                          <div class="form-group mb-2">
                                              <label class="form-label" for="username">Nama Pengguna</label>
                                              <input type="text" class="form-control" id="username" name="username"
                                                  placeholder="Masukkan Nama Pengguna">
                                          </div><!--end form-group-->
  
                                          <div class="form-group">
                                              <label class="form-label" for="userpassword">Kata sandi</label>
                                              <input type="password" class="form-control" name="password"
                                                  id="userpassword" placeholder="Masukkan kata sandi">
                                          </div><!--end form-group-->
  
                                          <div class="form-group row mt-3">
                                              <div class="col-sm-6">
                                                  <div class="form-check form-switch form-switch-primary">
                                                      <input class="form-check-input" type="checkbox"
                                                          id="customSwitchPrimary">
                                                      <label class="form-check-label" for="customSwitchPrimary">Ingat
                                                          saya</label>
                                                  </div>
                                              </div><!--end col-->
                                              <div class="col-sm-6 text-end">
                                                  <a href="{{url('/lupa-kata-sandi')}}" class="text-muted font-13"><i
                                                          class="dripicons-lock"></i> Lupa Kata Sandi?</a>
                                              </div><!--end col-->
                                          </div><!--end form-group-->
  
                                          <div class="form-group mb-0 row">
                                              <div class="col-12">
                                                  <div class="d-grid mt-3">
                                                      <button class="btn btn-primary" type="button">Masuk <i
                                                              class="fas fa-sign-in-alt ms-1"></i></button>
                                                  </div>
                                              </div><!--end col-->
                                          </div> <!--end form-group-->
                                      </form><!--end form-->
                                      <div class="text-center mb-2">
                                        <p class="text-muted">Belum punya akun ? 
                                          {{-- <a href="#" class="text-primary ms-2" onclick="openModalDaftar()">Daftar Gratis</a> --}}
                                          <a class="btn-getstarted" href="javascript:void(0);" onclick="openModalDaftar()">Daftar Gratis</a>
                                        <h6 class="px-3 d-inline-block">Atau Login  </h6>
                                    </div>
                                      <div class="d-flex justify-content-center">
                                          <a href=""
                                              class="d-flex justify-content-center align-items-center thumb-md bg-blue-subtle text-blue rounded-circle me-2">
                                              <i class="fab fa-facebook align-self-center"></i>
                                          </a>
                                          <a href=""
                                              class="d-flex justify-content-center align-items-center thumb-md bg-info-subtle text-info rounded-circle me-2">
                                              <i class="fab fa-twitter align-self-center"></i>
                                          </a>
                                          <a href=""
                                              class="d-flex justify-content-center align-items-center thumb-md bg-danger-subtle text-danger rounded-circle">
                                              <i class="fab fa-google align-self-center"></i>
                                          </a>
                                      </div>
                                  </div><!--end card-body-->
                              </div><!--end card-->
                          </div><!--end col-->
                      </div><!--end row-->
                  </div><!--end card-body-->
              </div><!--end col-->
          </div><!--end row-->
      </div><!-- container -->
      </div>
    </div>


    

    <div class="modal" id="myModal">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Modal title</h4>    
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div><div class="container"></div>
            <div class="modal-body">
              Content for the dialog / modal goes here.
              <a data-bs-toggle="modal" href="#myModal2" class="btn btn-primary">Launch modal</a>
            </div>
            <div class="modal-footer">
              <a href="#" data-bs-dismiss="modal" class="btn btn-outline-dark">Close</a>
            </div>
          </div>
        </div>
    </div>
    <div class="modal" id="myModal2" data-bs-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">2nd Modal title</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div><div class="container"></div>
            <div class="modal-body">
              Content for the dialog / modal goes here.
              Content for the dialog / modal goes here.
              Content for the dialog / modal goes here.
              Content for the dialog / modal goes here.
              Content for the dialog / modal goes here.
            </div>
            <div class="modal-footer">
              <a href="#" data-bs-dismiss="modal" class="btn btn-outline-dark">Close</a>
              <a href="#" class="btn btn-primary">Save changes</a>
            </div>
          </div>
        </div>
    </div>

  </main>
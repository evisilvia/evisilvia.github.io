<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="index.html"><img src="<?= base_url('assets/img/logo-saung.png'); ?>" alt="#"></a></h1>
        </div>



        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href=<?= base_url("Home") ?>>Home</a></li>

                <li><a href=<?= base_url("Login"); ?>>Login</a></li>
                <li><a href=<?= base_url("Pendaftaran"); ?>>Daftar</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets/img/gallery/3.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate_animated animate_fadeInDown">Selamat Datang <span></span></h2>
                            <h2 class="animate_animated animate_fadeInDown">Di Saung Tahfidz Indonesia<span></span></h2>
                            <p class="animate_animated animate_fadeInUp"></p>

                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets/img/gallery/3.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">

                            <h2 class="animate_animated animate_fadeInDown">Visi<span></span></h2>
                            <p class="animate_animated animate_fadeInUp">Menjadi Tempat Pembinaan dan pengabdian yang sistematis bagi para hafidz Qur'an</p>

                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('assets/img/gallery/3.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">

                            <h2 class="animate_animated animate_fadeInDown">Misi<span></span></h2>
                            <p class="animate_animated animate_fadeInUp">1. Pembinaan Baca Tulis dan Tahfidz Qur'an <br> 2. Pengembangan SDM dan Kaderisasi Hafidz Qur'an</p>

                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

    </div>

</section><!-- End Hero -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
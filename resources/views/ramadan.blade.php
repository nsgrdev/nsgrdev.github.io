<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:description>{{ $description }}</x-slot:description>
    <x-slot:keyword>{{ $keyword }}</x-slot:keyword>

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Ramadan Daily Tracking</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Ramadan Daily Tracking</li>
            </ol>
            </div>

        </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                    <img src="img/portfolio/RDT-1.png" alt="">
                    </div>

                    <div class="swiper-slide">
                    <img src="img/portfolio/RDT-2.png" alt="">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                    <li><strong>Category</strong>: Mobile App</li>
                    <li><strong>Client</strong>: <a href="https://instagram.com/nsgrdevelopment">@nsgrdevelopment</a></li>
                    <li><strong>Project date</strong>: 7 Mei 2024 - sekarang</li>
                    <li><strong>Project URL</strong>: <a href="https://drive.google.com/drive/folders/1HmiBN2JbUNQ8Sb2-vrd8RtRwaoJ4UaTp?usp=drive_link">Unduh Aplikasi</a></li>
                </ul>
                </div>
                <div class="portfolio-description">
                <h2>Ramadan Daily Tracking</h2>
                <p>
                    Aplikasi android yang kami buat berdasarkan keresahan kami dalam melacak aktivitas ibadah
                    dalam bulan Ramadan. Awalnya kami menggunakan google form untuk melakukan tracking ini, tapi
                    kekurangannya adalah kami tidak bisa melihat ibadah yang kami lakukan pada hari sebelumnya.
                    Kemudian kami membuat tracking ini di Microsoft Excel, tetapi menurut kami untuk pengolahan data
                    di Excel cukup sulit dan susah untuk mengaitkan antara item satu dengan yang lainnya. Akhirnya,
                    kami memutuskan untuk membuat Aplikasi Ramadan Daily Tracking ini.
                </p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
</x-layout>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:description>{{ $description }}</x-slot:description>
    <x-slot:keyword>{{ $keyword }}</x-slot:keyword>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Article Website</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Article</li>
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
                    <img src="img/portfolio/Article-1.png" alt="">
                    </div>

                    <div class="swiper-slide">
                    <img src="img/portfolio/Article-3.png" alt="">
                    </div>

                    <div class="swiper-slide">
                    <img src="img/portfolio/Article-4.png" alt="">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                    <li><strong>Category</strong>: Web Development</li>
                    <li><strong>Client</strong>: <a href="https://instagram.com/adil_nashrulhaq">@adil_nashrulhaq</a></li>
                    <li><strong>Project date</strong>: 15 Oktober 2023</li>
                    <li><strong>Project URL</strong>: <a href="https://adilnashrulhaq.github.io/landing-page-berita/">Article Website</a></li>
                </ul>
                </div>
                <div class="portfolio-description">
                <h2>"Article" Landing Page Website</h2>
                <p>
                    Ini adalah website yang saya buat untuk menyelesaikan tugas akhir kelas yang saya ambil dari Dicoding Indonesia dengan judul: Belajar Dasar Pemrograman Web.
                    Website ini terdiri dari beberapa artikel pilihan yang dimuat ke dalam carousel besar di bagian pertama, 
                    manfaat yang kita peroleh jika sering membaca ada pada bagian kedua, dan pada bagian ketiga terdapat profil penulis yang pernah bergabung. 
                    Data yang digunakan dalam website ini adalah data dummy, hanya fiksi.
                </p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
</x-layout>
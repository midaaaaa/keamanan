

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* Hero/Banner section */
    .hero-section {
        position: relative;
        overflow: hidden;
        height: 100vh;
        margin-top: -25px;
    }

    /* Slider container */
    .slider {
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        background-size: cover;
        background-position: center;
    }

    .slide.active {
        opacity: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    /* Profile Section */
    .profile-section {
        padding: 5rem 0;
        background-color: #f8f9fa;
    }

    .profile-content {
        margin-bottom: 2rem;
    }

    .profile-image {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .profile-image img {
        width: 50%;
        height: auto;
        transition: transform 0.5s ease;
    }

    .profile-image:hover img {
        transform: scale(1.05);
    }

    /* Section Title */
    .section-title {
        position: relative;
        margin-bottom: 3rem;
        text-align: center;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }

    .section-title h2:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--primary-color);
    }

    /* News Section */
    .news-section {
        padding: 5rem 0;
    }

    .news-card {
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        transition: all 0.3s ease;
        background-color: #fff;
        opacity: 0;
        transform: translateY(30px);
    }

    .news-card.animated {
        animation: fadeInUp 0.8s ease forwards;
    }

    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .news-img {
        position: relative;
        overflow: hidden;
    }

    .news-img img {
        transition: all 0.5s ease;
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .news-card:hover .news-img img {
        transform: scale(1.1);
    }

    .news-category {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: var(--primary-color);
        color: #fff;
        font-size: 0.8rem;
        padding: 5px 15px;
        border-radius: 30px;
    }

    .news-date {
        position: absolute;
        bottom: 15px;
        right: 15px;
        background-color: rgba(255, 255, 255, 0.9);
        color: #333;
        font-size: 0.8rem;
        padding: 5px 15px;
        border-radius: 30px;
    }

    .news-content {
        padding: 1.5rem;
    }

    .news-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1rem;
        line-height: 1.4;
    }

    .news-title a {
        color: #333;
        text-decoration: none;
        transition: all 0.3s;
    }

    .news-title a:hover {
        color: var(--primary-color);
    }

    .news-excerpt {
        color: #666;
        margin-bottom: 1rem;
    }

    /* Announcements Section */
    .announcements-section {
        padding: 5rem 0;
        background-color: #f8f9fa;
    }

    .announcement-card {
        background-color: #fff;
        padding: 1.5rem;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .announcement-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .announcement-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background-color: var(--primary-color);
    }

    .announcement-date {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 0.5rem;
    }

    .announcement-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .announcement-content {
        color: #555;
        margin-bottom: 1rem;
    }

    /* Gallery Section */
    .gallery-section {
        padding: 5rem 0;
    }

    .gallery-item {
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .gallery-img {
        position: relative;
        overflow: hidden;
    }

    .gallery-img img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-item:hover .gallery-img img {
        transform: scale(1.1);
    }

    .gallery-overlay-content {
        text-align: center;
        color: #fff;
    }

    .gallery-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .gallery-date {
        font-size: 0.9rem;
    }

    /* Video Section */
    .video-gpr-section {
        padding: 50px 0;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px;
    }

    .col-lg-7,
    .col-lg-5 {
        padding: 0 15px;
    }

    .col-lg-7 {
        width: 58.33333%;
    }

    .col-lg-5 {
        width: 41.66667%;
    }

    .video-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 30px;
    }

    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
    }

    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        border-radius: 5px;
    }

    .video-info {
        margin-top: 20px;
    }

    .video-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .video-description {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
    }

    .gpr-card {
        display: flex;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        padding: 15px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .gpr-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .gpr-icon {
        width: 60px;
        height: 60px;
        min-width: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #1a237e;
        border-radius: 50%;
        margin-right: 15px;
    }

    .gpr-icon img {
        width: 30px;
        height: 30px;
        filter: brightness(0) invert(1);
    }

    .gpr-content {
        flex: 1;
    }

    .gpr-metadata {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .gpr-category {
        font-size: 12px;
        font-weight: 600;
        color: #1a237e;
        text-transform: uppercase;
    }

    .gpr-date {
        font-size: 12px;
        color: #888;
    }

    .gpr-title {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.4;
        color: #333;
        margin-bottom: 5px;
    }

    .gpr-title a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .gpr-title a:hover {
        color: #00c853;
    }

    .back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background-color: #00c853;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        z-index: 99;
    }

    .back-to-top:hover {
        background-color: #00a843;
    }

    @media (max-width: 991px) {

        .col-lg-7,
        .col-lg-5 {
            width: 100%;
        }

        .video-container {
            margin-bottom: 30px;
        }
    }

    /* Animation Keyframes */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive styles */
    @media (max-width: 991.98px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 767.98px) {
        .hero-section {
            height: 70vh;
        }

        .hero-title {
            font-size: 2rem;
        }
    }

</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero/Banner Section with Automatic Slider -->
<section class="hero-section">
    <div class="slider">
        <div class="slide active" style="background-image: url('<?php echo e(asset('images/banner 1.png')); ?>');"></div>
        <div class="slide" style="background-image: url('<?php echo e(asset('images/banner 2.png')); ?>');"></div>
        <div class="slide" style="background-image: url('<?php echo e(asset('images/banner 3.png')); ?>');"></div>
    </div>
</section>

<!-- Profile Section -->
<section class="profile-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="profile-content">
                    <h3>DISKOMINFO - KOTA LHOKSEUMAWE</h3>
                    <p class="mb-4">Dinas Komunikasi, Informatika dan Persandian Kota Lhokseumawe memiliki visi "Terciptanya Pelayanan Publik Yang Terbaik melalui penerapan Teknologi Informatika dan Komunikasi Publik yang handal menuju Lhokseumawe Smart City yang beradab, beradat dan bermartabat dalam nuansa islami" Untuk mewujudkan visi tersebut Diskominfo Lhokseumawe memiliki tugas melaksanakan Pengorganisasian, Perencanaan, Pengawasan urusan Integrasi dan Penyebaran Informasi, Kemitraan dan Pengelolaan Media Publik, Aplikasi Informatika, Pengolahan Data, E-Government, Keamanan Informasi dan Persandian.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="profile-image">
                    <img src="<?php echo e(asset('images/logo-diskominfo.png')); ?>" alt="Kantor Diskominfo Lhokseumawe" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="section-title">
            <h2>BERITA TERBARU</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="news-card">
                    <div class="news-img">
                        <img src="<?php echo e(asset('images/news/news-1.jpg')); ?>" alt="News Image">
                        <span class="news-category">Teknologi</span>
                        <span class="news-date"><i class="far fa-calendar-alt me-1"></i> 15 Mei 2025</span>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title"><a href="<?php echo e(url('news.detail', ['slug' => 'peluncuran-aplikasi-lhokseumawe-smart-city'])); ?>">Peluncuran Aplikasi Lhokseumawe Smart City untuk Pelayanan Publik</a></h3>
                        <p class="news-excerpt">Diskominfo Kota Lhokseumawe meluncurkan aplikasi Smart City yang terintegrasi untuk meningkatkan kualitas pelayanan publik...</p>
                        <a href="<?php echo e(url('news.detail', ['slug' => 'peluncuran-aplikasi-lhokseumawe-smart-city'])); ?>" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="news-card">
                    <div class="news-img">
                        <img src="<?php echo e(asset('images/news/news-2.jpg')); ?>" alt="News Image">
                        <span class="news-category">Infrastruktur</span>
                        <span class="news-date"><i class="far fa-calendar-alt me-1"></i> 10 Mei 2025</span>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title"><a href="<?php echo e(url('news.detail', ['slug' => 'perluasan-wifi-gratis'])); ?>">Perluasan Jaringan WiFi Gratis di Ruang Publik Kota Lhokseumawe</a></h3>
                        <p class="news-excerpt">Diskominfo memperluas cakupan layanan WiFi gratis di 25 titik strategis ruang publik untuk mempermudah akses internet...</p>
                        <a href="<?php echo e(url('news.detail', ['slug' => 'perluasan-wifi-gratis'])); ?>" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="news-card">
                    <div class="news-img">
                        <img src="<?php echo e(asset('images/news/news-3.jpg')); ?>" alt="News Image">
                        <span class="news-category">Pelatihan</span>
                        <span class="news-date"><i class="far fa-calendar-alt me-1"></i> 5 Mei 2025</span>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title"><a href="<?php echo e(url('news.detail', ['slug' => 'workshop-digital-marketing'])); ?>">Workshop Digital Marketing untuk UMKM Kota Lhokseumawe</a></h3>
                        <p class="news-excerpt">Diskominfo menyelenggarakan workshop digital marketing untuk membantu pelaku UMKM memasarkan produk mereka secara online...</p>
                        <a href="<?php echo e(url('news.detail', ['slug' => 'workshop-digital-marketing'])); ?>" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Announcements Section -->
<section class="announcements-section">
    <div class="container">
        <div class="section-title">
            <h2>PENGUMUMAN</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="announcement-card">
                    <div class="announcement-date"><i class="far fa-calendar-alt me-1"></i> 15 Mei 2025</div>
                    <h3 class="announcement-title">Pendaftaran Pelatihan Digital Marketing</h3>
                    <div class="announcement-content">
                        <p>Bagi masyarakat yang tertarik mengikuti pelatihan Digital Marketing, pendaftaran dibuka mulai tanggal 20-30 Mei 2025.</p>
                    </div>
                    <a href="<?php echo e(url('announcements.detail', ['slug' => 'pendaftaran-pelatihan-digital-marketing'])); ?>" class="btn btn-sm btn-outline-primary">Detail</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="announcement-card">
                    <div class="announcement-date"><i class="far fa-calendar-alt me-1"></i> 12 Mei 2025</div>
                    <h3 class="announcement-title">Pemeliharaan Server Data Center</h3>
                    <div class="announcement-content">
                        <p>Akan dilakukan pemeliharaan server data center pada tanggal 18-19 Mei 2025. Beberapa layanan online mungkin akan terganggu.</p>
                    </div>
                    <a href="<?php echo e(url('announcements.detail', ['slug' => 'pemeliharaan-server-data-center'])); ?>" class="btn btn-sm btn-outline-primary">Detail</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="announcement-card">
                    <div class="announcement-date"><i class="far fa-calendar-alt me-1"></i> 8 Mei 2025</div>
                    <h3 class="announcement-title">Lowongan Tenaga Ahli IT</h3>
                    <div class="announcement-content">
                        <p>Diskominfo Kota Lhokseumawe membuka lowongan untuk posisi Tenaga Ahli IT dengan spesialisasi keamanan jaringan.</p>
                    </div>
                    <a href="<?php echo e(url('announcements.detail', ['slug' => 'lowongan-tenaga-ahli-it'])); ?>" class="btn btn-sm btn-outline-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="container">
        <div class="section-title">
            <h2>GALERI GAMBAR</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="<?php echo e(asset('images/gallery/gallery-1.jpg')); ?>" alt="Gallery Image">
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-content">
                                <h3 class="gallery-title">Peresmian Pusat Data</h3>
                                <p class="gallery-date">10 Mei 2025</p>
                                <a href="<?php echo e(asset('images/gallery/gallery-1.jpg')); ?>" class="btn btn-sm btn-light" data-fancybox="gallery"><i class="fas fa-search-plus"></i> Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="<?php echo e(asset('images/gallery/gallery-2.jpg')); ?>" alt="Gallery Image">
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-content">
                                <h3 class="gallery-title">Workshop UMKM Digital</h3>
                                <p class="gallery-date">5 Mei 2025</p>
                                <a href="<?php echo e(asset('images/gallery/gallery-2.jpg')); ?>" class="btn btn-sm btn-light" data-fancybox="gallery"><i class="fas fa-search-plus"></i> Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="<?php echo e(asset('images/gallery/gallery-3.jpg')); ?>" alt="Gallery Image">
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-content">
                                <h3 class="gallery-title">Kunjungan Studi Banding</h3>
                                <p class="gallery-date">28 April 2025</p>
                                <a href="<?php echo e(asset('images/gallery/gallery-3.jpg')); ?>" class="btn btn-sm btn-light" data-fancybox="gallery"><i class="fas fa-search-plus"></i> Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="<?php echo e(asset('images/gallery/gallery-4.jpg')); ?>" alt="Gallery Image">
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-content">
                                <h3 class="gallery-title">Pelatihan ASN</h3>
                                <p class="gallery-date">20 April 2025</p>
                                <a href="<?php echo e(asset('images/gallery/gallery-4.jpg')); ?>" class="btn btn-sm btn-light" data-fancybox="gallery"><i class="fas fa-search-plus"></i> Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="<?php echo e(asset('images/gallery/gallery-5.jpg')); ?>" alt="Gallery Image">
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-content">
                                <h3 class="gallery-title">Sosialisasi Aplikasi SIPIL</h3>
                                <p class="gallery-date">15 April 2025</p>
                                <a href="<?php echo e(asset('images/gallery/gallery-5.jpg')); ?>" class="btn btn-sm btn-light" data-fancybox="gallery"><i class="fas fa-search-plus"></i> Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="<?php echo e(asset('images/gallery/gallery-6.jpg')); ?>" alt="Gallery Image">
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-content">
                                <h3 class="gallery-title">Penandatanganan MoU</h3>
                                <p class="gallery-date">10 April 2025</p>
                                <a href="<?php echo e(asset('images/gallery/gallery-6.jpg')); ?>" class="btn btn-sm btn-light" data-fancybox="gallery"><i class="fas fa-search-plus"></i> Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<div class="section-title">
    <h2>VIDEO DAN GPR</h2>
</div>

<section class="video-gpr-section">
    <div class="container">
        <div class="row">
            <!-- Video Column -->
            <div class="col-lg-7">
                <div class="video-container">
                    <div class="video-wrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-p32jFI00zw" title="Sistem Pemerintahan Berbasis Elektronik (SPBE)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h3 class="video-title">Sistem Pemerintahan Berbasis Elektronik (SPBE)</h3>
                        <p class="video-description">Video penjelasan tentang implementasi Sistem Pemerintahan Berbasis Elektronik (SPBE) yang menampilkan visi, misi, dan berbagai program unggulan dalam mendukung transformasi digital pemerintahan Kota Lhokseumawe.</p>
                    </div>
                </div>
            </div>

            <!-- GPR Articles Column -->
            <div class="col-lg-5">
                <!-- GPR Card 1 -->
                <div class="gpr-card">
                    <div class="gpr-icon">
                        <img src="/api/placeholder/30/30" alt="News Icon">
                    </div>
                    <div class="gpr-content">
                        <div class="gpr-metadata">
                            <span class="gpr-category">Artikel</span>
                            <span class="gpr-date">08-05-2025 09:32</span>
                        </div>
                        <h3 class="gpr-title">
                            <a href="#">Jangkau Lebih Banyak Keluarga Miskin, Daya Tampung Sekolah Rakyat Akan Ditambah</a>
                        </h3>
                    </div>
                </div>

                <!-- GPR Card 2 -->
                <div class="gpr-card">
                    <div class="gpr-icon">
                        <img src="/api/placeholder/30/30" alt="News Icon">
                    </div>
                    <div class="gpr-content">
                        <div class="gpr-metadata">
                            <span class="gpr-category">Artikel</span>
                            <span class="gpr-date">07-05-2025 10:03</span>
                        </div>
                        <h3 class="gpr-title">
                            <a href="#">Kemhan Gelar Forum Tematik Bakohumas Bertema "Defence Partnership for Global Peace & Stability"</a>
                        </h3>
                    </div>
                </div>

                <!-- GPR Card 3 -->
                <div class="gpr-card">
                    <div class="gpr-icon">
                        <img src="/api/placeholder/30/30" alt="News Icon">
                    </div>
                    <div class="gpr-content">
                        <div class="gpr-metadata">
                            <span class="gpr-category">Artikel</span>
                            <span class="gpr-date">05-05-2025 14:15</span>
                        </div>
                        <h3 class="gpr-title">
                            <a href="#">Indonesia-Inggris Sepakat Perkuat Kerjasama Ekonomi, Bahas Sertifikasi Halal</a>
                        </h3>
                    </div>
                </div>

                <!-- GPR Card 4 -->
                <div class="gpr-card">
                    <div class="gpr-icon">
                        <img src="/api/placeholder/30/30" alt="News Icon">
                    </div>
                    <div class="gpr-content">
                        <div class="gpr-metadata">
                            <span class="gpr-category">Artikel</span>
                            <span class="gpr-date">03-05-2025 08:45</span>
                        </div>
                        <h3 class="gpr-title">
                            <a href="#">Program Vaksinasi Terpadu untuk Warga Kota Lhokseumawe Sudah Mencapai 95%</a>
                        </h3>
                    </div>
                </div>

                <!-- GPR Card 5 -->
                <div class="gpr-card">
                    <div class="gpr-icon">
                        <img src="/api/placeholder/30/30" alt="News Icon">
                    </div>
                    <div class="gpr-content">
                        <div class="gpr-metadata">
                            <span class="gpr-category">Artikel</span>
                            <span class="gpr-date">01-05-2025 16:22</span>
                        </div>
                        <h3 class="gpr-title">
                            <a href="#">Tingkatkan Perekonomian Daerah, Pemkot Lhokseumawe Buka Balai Pelatihan Digital</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    // Automatic Slider
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        // Change slide every 5 seconds
        setInterval(nextSlide, 5000);

        // Animate news cards on scroll
        const newsCards = document.querySelectorAll('.news-card');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, {
            threshold: 0.1
        });

        newsCards.forEach(card => {
            observer.observe(card);
        });

        // Back to top button functionality
        const backToTopButton = document.querySelector('.back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'flex';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0
                , behavior: 'smooth'
            });
        });
    });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hp Elitebook\Project\cloning-diskominfo\resources\views/beranda.blade.php ENDPATH**/ ?>
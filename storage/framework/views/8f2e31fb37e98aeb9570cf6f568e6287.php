<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?> - Diskominfo Kota Lhokseumawe</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0050b3;
            --secondary-color: #0078d4;
            --accent-color: #ff6b6b;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            color: #333;
        }
        
        /* Navbar Styles */
        .navbar {
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 0.8rem 1rem;
        }
        
        .navbar-brand img {
            height: 50px;
        }
        
        .nav-link {
            color: #333;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            color: var(--primary-color);
        }
        
        .navbar .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        .dropdown-item {
            padding: 0.7rem 1.5rem;
            transition: all 0.2s;
        }
        
        .dropdown-item:hover {
            background-color: rgba(0, 80, 179, 0.1);
            color: var(--primary-color);
        }
        
        /* Header Area */
        .header-area {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            padding: 3rem 0;
            margin-bottom: 2rem;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-bg);
            color: #fff;
            padding: 3rem 0 1rem;
            margin-top: 3rem;
        }
        
        .footer-title {
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .footer-links {
            list-style: none;
            padding-left: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: #fff;
            padding-left: 5px;
        }
        
        .social-links a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 36px;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 3rem;
        }
        
        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        /* Card Styles */
        .card {
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            transition: all 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 45px;
            height: 45px;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .back-to-top.active {
            opacity: 1;
            pointer-events: auto;
        }
        
        .back-to-top:hover {
            background-color: var(--secondary-color);
            color: #fff;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: #fff;
                padding: 1rem;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                margin-top: 10px;
            }
        }
    </style>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('home')); ?>">
                <img src="<?php echo e(asset('images/logo-diskominfo.png')); ?>" alt="Logo Diskominfo Lhokseumawe" class="img-fluid">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->is('/')) ? 'active' : ''); ?>" href="<?php echo e(url('home')); ?>">
                            <i></i> Beranda
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i></i> Profil
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeIn" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(url('visi-misi')); ?>">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('profile.organization')); ?>">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('profile.tasks')); ?>">Tugas & Fungsi</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="publicationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i></i> Publikasi
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeIn" aria-labelledby="publicationDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(url('news.index')); ?>">Berita</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('announcements.index')); ?>">Pengumuman</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->is('services*')) ? 'active' : ''); ?>" href="<?php echo e(url('services.index')); ?>">
                            <i></i> Layanan
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->is('information*')) ? 'active' : ''); ?>" href="<?php echo e(url('information.index')); ?>">
                            <i></i> Informasi
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->is('downloads*')) ? 'active' : ''); ?>" href="<?php echo e(url('downloads.index')); ?>">
                            <i></i> Unduhan
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i></i> Galeri
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeIn" aria-labelledby="galleryDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(url('gallery.videos')); ?>">Video</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('gallery.photos')); ?>">Gambar</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((request()->is('contact*')) ? 'active' : ''); ?>" href="<?php echo e(url('contact.index')); ?>">
                            <i></i> Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Area for inner pages -->
    <?php if (! empty(trim($__env->yieldContent('header')))): ?>
        <div class="header-area">
            <div class="container">
                <?php echo $__env->yieldContent('header'); ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Main Content -->
    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <img src="<?php echo e(asset('images/logo-diskominfo.png')); ?>" alt="Logo Diskominfo Lhokseumawe" class="img-fluid mb-4" style="max-height: 60px;">
                    <p>Jl. H. Ramli Ridwan No. 2, Gp. Mon Geudong, <br> Kec. Banda Sakti, Lhokseumawe</p> <br>
                    <p>Telepon 0645-6550000 <br> Faximile 0645-6550000 <br> Email kominfo@lhokseumawekota.go.id</p>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Profil</h5>
                    <ul class="footer-links">
                        <li><a href="<?php echo e(url('profile.vision-mission')); ?>">Visi & Misi</a></li>
                        <li><a href="<?php echo e(url('profile.organization')); ?>">Struktur Organisasi</a></li>
                        <li><a href="<?php echo e(url('profile.tasks')); ?>">Tugas & Fungsi</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Publikasi</h5>
                    <ul class="footer-links">
                        <li><a href="<?php echo e(url('news.index')); ?>">Berita</a></li>
                        <li><a href="<?php echo e(url('announcements.index')); ?>">Pengumuman</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-title">Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Merdeka No. 123, Lhokseumawe, Aceh</p>
                    <p><i class="fas fa-phone-alt me-2"></i> (0645) 123456</p>
                    <p><i class="fas fa-envelope me-2"></i> info@diskominfo-lhokseumawe.go.id</p>
                </div>
            </div>
            
            <div class="text-center copyright">
                <p>&copy; <?php echo e(date('Y')); ?> Dinas Komunikasi dan Informatika Kota Lhokseumawe. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Back to top button functionality
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#backToTop').addClass('active');
            } else {
                $('#backToTop').removeClass('active');
            }
        });
        
        $('#backToTop').click(function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 500);
        });
        
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
        
        // Dropdown hover effect for desktop
        const $dropdownToggle = $('.dropdown-toggle');
        
        if (window.matchMedia('(min-width: 992px)').matches) {
            $dropdownToggle.hover(
                function() {
                    $(this).attr('aria-expanded', 'true');
                    $(this).parent().addClass('show');
                    $(this).next('.dropdown-menu').addClass('show');
                },
                function() {
                    const $this = $(this);
                    setTimeout(function() {
                        if (!$this.parent().is(':hover')) {
                            $this.attr('aria-expanded', 'false');
                            $this.parent().removeClass('show');
                            $this.next('.dropdown-menu').removeClass('show');
                        }
                    }, 200);
                }
            );
            
            $('.dropdown-menu').hover(
                function() {},
                function() {
                    const $this = $(this);
                    setTimeout(function() {
                        if (!$this.parent().is(':hover')) {
                            $this.removeClass('show');
                            $this.prev('.dropdown-toggle').attr('aria-expanded', 'false');
                            $this.parent().removeClass('show');
                        }
                    }, 200);
                }
            );
        }
        
        // Preloader
        $(window).on('load', function() {
            if ($('#preloader').length) {
                $('#preloader').delay(100).fadeOut('slow', function() {
                    $(this).remove();
                });
            }
        });
        
        // Active menu highlighting
        $(document).ready(function() {
            // Add active class to nav-item if url matches
            const currentLocation = window.location.pathname;
            $('.navbar-nav .nav-link').each(function() {
                const link = $(this).attr('href');
                if (link && currentLocation.includes(link) && link !== '/') {
                    $(this).addClass('active');
                    
                    // If it's in a dropdown, also add active to parent
                    if ($(this).parents('.dropdown').length) {
                        $(this).parents('.dropdown').find('.nav-link').addClass('active');
                    }
                }
            });
        });
    </script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Users\Hp Elitebook\Project\cloning-diskominfo\resources\views/layouts/app.blade.php ENDPATH**/ ?>
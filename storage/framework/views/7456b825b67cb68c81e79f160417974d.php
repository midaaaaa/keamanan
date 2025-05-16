

<?php $__env->startSection('title', 'Visi & Misi'); ?>

<?php $__env->startSection('header'); ?>
<div class="row align-items-center">
    <div class="col-md-6">
        <h1 class="display-4 fw-bold text-white animate__animated animate__fadeInUp">Visi & Misi</h1>
        <nav aria-label="breadcrumb" class="animate__animated animate__fadeInUp animate__delay-1s">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(url('home')); ?>" class="text-white">Beranda</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">profil</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-6 d-none d-md-block">
        <img src="<?php echo e(asset('images/vision-illustration.svg')); ?>" alt="Visi Misi Ilustrasi" class="img-fluid float-end animate__animated animate__fadeInRight" style="max-height: 180px;">
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Introduction Area -->
    <div class="row mb-5 justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm overflow-hidden">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-md-5 bg-primary d-flex align-items-center justify-content-center p-4">
                            <div class="text-center text-white">
                                <i class="fas fa-rocket fa-3x mb-3 animate__animated animate__pulse animate__infinite"></i>
                                <h3 class="fw-bold">Menuju Lhokseumawe Smart City</h3>
                                <p class="mb-0">yang beradab, beradat dan bermartabat dalam nuansa islami</p>
                            </div>
                        </div>
                        <div class="col-md-7 p-4">
                            <h2 class="fw-bold mb-3">Komitmen Kami</h2>
                            <p>Dinas Komunikasi, Informatika dan Persandian Kota Lhokseumawe berkomitmen untuk menciptakan pelayanan publik terbaik melalui pemanfaatan teknologi informasi dan komunikasi yang handal demi terwujudnya Lhokseumawe Smart City.</p>
                            <a href="#visi-misi" class="btn btn-primary mt-3 scroll-trigger">
                                <i class="fas fa-angle-down me-2"></i> Lihat Visi & Misi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision and Mission Section -->
    <div id="visi-misi" class="row mb-5">
        <div class="col-12">
            <div class="text-center mb-5">
                <h2 class="fw-bold position-relative d-inline-block pb-2 mb-4 reveal-text">
                    <span class="position-relative z-2">Visi & Misi Kami</span>
                    <span class="decoration-line"></span>
                </h2>
                <p class="text-muted lead">Landasan dan arah pengembangan pelayanan publik berbasis teknologi</p>
            </div>
        </div>

        <!-- Vision Card -->
        <div class="col-lg-12 mb-5">
            <div class="card border-0 shadow-sm vision-card overflow-hidden">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-md-4 vision-bg d-flex align-items-center justify-content-center p-4">
                            <div class="text-center text-white py-5" data-aos="fade-right">
                                <div class="vision-icon mb-3">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h2 class="fw-bold mb-0">Visi</h2>
                            </div>
                        </div>
                        <div class="col-md-8 p-4 p-md-5 bg-light" data-aos="fade-left">
                            <blockquote class="blockquote vision-quote mb-0">
                                <p class="mb-0 lead fw-bold">
                                    "Terciptanya Pelayanan Publik yang Terbaik melalui penerapan Teknologi Informatika dan Komunikasi Publik yang handal menuju Lhokseumawe Smart City yang beradab, beradat dan bermartabat dalam nuansa islami"
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission Card -->
        <div class="col-lg-12">
            <div class="card border-0 shadow-sm mission-card overflow-hidden">
                <div class="card-body p-4 p-md-5">
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="text-center mission-header" data-aos="fade-up">
                                <div class="mission-icon mb-3">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <h2 class="fw-bold mb-4">Misi</h2>
                                <div class="d-none d-md-block">
                                    <p class="text-muted">Langkah strategis kami dalam mencapai visi untuk Lhokseumawe Smart City</p>
                                    <img src="<?php echo e(asset('images/mission-illustration.svg')); ?>" alt="Misi Ilustrasi" class="img-fluid mt-4 mission-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mission-list">
                                <div class="accordion mission-accordion" id="accordionMission">
                                    <?php $__currentLoopData = [
                                        'Meningkatkan kualitas pelayanan pemerintah kepada semua stakeholder',
                                        'Meningkatkan kapasitas layanan informasi dan pemberdayaan potensi masyarakat dalam rangka mewujudkan masyarakat informasi',
                                        'Meningkatkan transparansi, kontrol dan akuntabilitas penyelenggaraan pemerintahan dalam rangka penerapan konsep good governace',
                                        'Meningkatkan kualitas dan sebaran layanan deseminasi informasi melalui kemitraan dengan penyelenggara media dan mengikuti perkembangan teknologi informasi',
                                        'Mendukung proses kerja internal pemerintah kota lhokseumawe dengan pengembangan aplikasi dan sistem informasi manajemen yang handal, update dan bisa menyesuaikan dengan kebutuhan masyarakat',
                                        'Mengoptimalkan pemanfaatan insfrastruktur teknologi komunikasi dan informatika guna mencapai efisiensi dan efektifitas kerja',
                                        'Membangun kualitas jaringan teknologi informasi yang mandiri, terintegritas dan mampu bersinergi dengan pihak-pihak yang memiliki komitmen terhadap pengembangan smart city di kota lhokseumawe',
                                        'Menciptakan sistem kerja berbasis teknologi informasi yang handal dan terjamin keamanannya',
                                        'Meningkatkan kualitas sumber daya manusia di bidang teknologi informasi dan komunikasi'
                                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="mission-item" data-aos="fade-up" data-aos-delay="<?php echo e($index * 100); ?>">
                                        <div class="mission-number"><?php echo e($index + 1); ?></div>
                                        <div class="mission-content">
                                            <p class="mb-0"><?php echo e($mission); ?></p>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Smart City Goals Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold position-relative d-inline-block pb-2 mb-4 reveal-text">
                    <span class="position-relative z-2">Tujuan Smart City</span>
                    <span class="decoration-line"></span>
                </h2>
                <p class="text-muted lead">Fokus kami dalam membangun Lhokseumawe Smart City</p>
            </div>
        </div>

        <?php $__currentLoopData = [
            ['icon' => 'fas fa-network-wired', 'title' => 'Infrastruktur TIK', 'desc' => 'Membangun infrastruktur teknologi informasi dan komunikasi yang handal dan terintegrasi'],
            ['icon' => 'fas fa-user-shield', 'title' => 'Keamanan Informasi', 'desc' => 'Menciptakan sistem keamanan informasi yang terpercaya dan terlindungi'],
            ['icon' => 'fas fa-cogs', 'title' => 'Sistem Terpadu', 'desc' => 'Mengembangkan aplikasi dan sistem informasi yang terintegrasi dan adaptif'],
            ['icon' => 'fas fa-hands-helping', 'title' => 'Layanan Prima', 'desc' => 'Mewujudkan pelayanan publik yang responsif, efektif dan efisien']
        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="<?php echo e($index * 100); ?>">
            <div class="card border-0 shadow-sm h-100 goal-card">
                <div class="card-body text-center p-4">
                    <div class="goal-icon mb-4">
                        <i class="<?php echo e($goal['icon']); ?>"></i>
                    </div>
                    <h4 class="fw-bold mb-3"><?php echo e($goal['title']); ?></h4>
                    <p class="text-muted mb-0"><?php echo e($goal['desc']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<style>
    /* Vision and Mission Styles */
    .decoration-line {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: var(--accent-color);
    }

    .vision-card,
    .mission-card {
        transition: all 0.5s;
    }

    .vision-card:hover,
    .mission-card:hover {
        transform: translateY(-5px);
    }

    .vision-bg {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        position: relative;
        overflow: hidden;
    }

    .vision-bg::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: rgba(255, 255, 255, 0.1);
        transform: rotate(45deg);
        animation: shineEffect 5s infinite linear;
    }

    .vision-icon,
    .mission-icon,
    .goal-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        font-size: 2rem;
        position: relative;
        z-index: 1;
    }

    .vision-icon {
        background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
    }

    .mission-icon {
        background-color: rgba(0, 80, 179, 0.1);
        color: var(--primary-color);
    }

    .goal-icon {
        background-color: rgba(0, 80, 179, 0.1);
        color: var(--primary-color);
        transition: all 0.3s;
    }

    .mission-img {
        max-height: 200px;
        opacity: 0.8;
    }

    .vision-quote {
        position: relative;
        padding-left: 2rem;
    }

    .vision-quote::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background-color: var(--primary-color);
    }

    .mission-list {
        counter-reset: mission-counter;
    }

    .mission-item {
        display: flex;
        margin-bottom: 1.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }

    .mission-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .mission-item:hover {
        transform: translateX(5px);
    }

    .mission-number {
        width: 36px;
        height: 36px;
        background-color: var(--primary-color);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 1rem;
        flex-shrink: 0;
    }

    .mission-content {
        flex-grow: 1;
        display: flex;
        align-items: center;
    }

    .goal-card {
        transition: all 0.3s;
        border-radius: 12px;
        overflow: hidden;
    }

    .goal-card:hover {
        transform: translateY(-10px);
    }

    .goal-card:hover .goal-icon {
        background-color: var(--primary-color);
        color: #fff;
    }

    /* Animations */
    @keyframes shineEffect {
        0% {
            transform: rotate(45deg) translateY(-100%);
        }
        100% {
            transform: rotate(45deg) translateY(100%);
        }
    }

    .reveal-text {
        overflow: hidden;
    }

    .reveal-text span {
        display: inline-block;
        animation: reveal 1.5s cubic-bezier(0.77, 0, 0.175, 1) both;
    }

    @keyframes reveal {
        0% {
            transform: translateY(100%);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Scroll-triggered animations */
    .scroll-trigger {
        transition: all 0.3s;
    }

    .scroll-trigger:hover {
        transform: translateY(-3px);
    }

    /* Make the entire section more responsive */
    @media (max-width: 768px) {
        .vision-quote {
            padding-left: 1rem;
        }

        .mission-item {
            margin-bottom: 1rem;
            padding-bottom: 1rem;
        }

        .goal-icon,
        .vision-icon,
        .mission-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('.scroll-trigger').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            });
        });

        // Add animation to mission items on scroll
        const missionItems = document.querySelectorAll('.mission-item');
        const animateMissionItems = () => {
            missionItems.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.add('animate__animated', 'animate__fadeInLeft');
                }, index * 150);
            });
        };

        // Intersection Observer for mission list
        const missionList = document.querySelector('.mission-list');
        if (missionList) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateMissionItems();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });
            
            observer.observe(missionList);
        }

        // Hover effects for goal cards
        document.querySelectorAll('.goal-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.goal-icon i').classList.add('animate__animated', 'animate__heartBeat');
            });
            
            card.addEventListener('mouseleave', function() {
                this.querySelector('.goal-icon i').classList.remove('animate__animated', 'animate__heartBeat');
            });
        });

        // Parallax effect for header background
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header-area');
            if (header) {
                const scrollPosition = window.scrollY;
                header.style.backgroundPosition = `center ${scrollPosition * 0.4}px`;
            }
        });

        // Counter animation for mission numbers
        const startCountAnimation = () => {
            const missionNumbers = document.querySelectorAll('.mission-number');
            missionNumbers.forEach((number, index) => {
                let count = 0;
                const finalNum = index + 1;
                const duration = 1000; // ms
                const interval = duration / finalNum;
                
                const counter = setInterval(() => {
                    count += 1;
                    number.textContent = count;
                    
                    if (count >= finalNum) {
                        clearInterval(counter);
                    }
                }, interval);
            });
        };

        // Start counter animation when mission section is visible
        const missionHeader = document.querySelector('.mission-header');
        if (missionHeader) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setTimeout(startCountAnimation, 500);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(missionHeader);
        }
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer\Downloads\cloning-diskominfo\keamanan\resources\views/visi-misi.blade.php ENDPATH**/ ?>
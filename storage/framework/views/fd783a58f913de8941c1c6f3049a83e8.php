 

 <?php $__env->startSection('title', ' Beranda'); ?>

 <style>
     :root {
         --primary-color: #0050b3;
         --secondary-color: #0078d4;
         --light-bg: #f8f9fa;
         --dark-bg: #343a40;
     }

     body {
         font-family: 'Poppins', sans-serif;
         background-color: #f5f7fa;
         color: #333;
     }

     /* Banner Slider Styles */
     .banner-container {
         position: relative;
         width: 100%;
         overflow: hidden;
         height: 70vh;
     }

     .banner-slider {
         display: flex;
         transition: transform 0.5s ease-in-out;
         height: 100%;
     }

     .banner-slide {
         min-width: 100%;
         height: 100%;
         background-size: cover;
         background-position: center;
         position: relative;
     }

     .banner-slide img {
         width: 100%;
         height: 100%;
         object-fit: cover;
     }

     .banner-controls {
         position: absolute;
         top: 50%;
         width: 100%;
         display: flex;
         justify-content: space-between;
         transform: translateY(-50%);
         z-index: 10;
     }

     .banner-control {
         background: rgba(255, 255, 255, 0.5);
         border: none;
         width: 40px;
         height: 40px;
         border-radius: 50%;
         margin: 0 20px;
         cursor: pointer;
         display: flex;
         align-items: center;
         justify-content: center;
         transition: all 0.3s;
     }

     .banner-control:hover {
         background: rgba(255, 255, 255, 0.8);
     }

     .banner-indicators {
         position: absolute;
         bottom: 20px;
         left: 50%;
         transform: translateX(-50%);
         display: flex;
         gap: 10px;
         z-index: 10;
     }

     .banner-indicator {
         width: 12px;
         height: 12px;
         border-radius: 50%;
         background: rgba(255, 255, 255, 0.5);
         cursor: pointer;
         transition: all 0.3s;
     }

     .banner-indicator.active {
         background: white;
         transform: scale(1.2);
     }


     /* Responsive Adjustments */
     @media (max-width: 767.98px) {
         .banner-container {
             height: 50vh;
         }

         .banner-control {
             width: 30px;
             height: 30px;
             margin: 0 10px;
         }
     }
 </style>

 <?php $__env->startSection('content'); ?>
 <!-- Banner Slider -->
 <div class="banner-container">
     <div class="banner-slider">
         <div class="banner-slide">
             <img src="<?php echo e(asset('images/slide-1.png')); ?>" alt="Banner 1">
         </div>
         <div class="banner-slide">
             <img src="<?php echo e(asset('images/slide-2.jpg')); ?>" alt="Banner 2">
         </div>
         <div class="banner-slide">
             <img src="<?php echo e(asset('images/slide-3.jpg')); ?>" alt="Banner 3">
         </div>
     </div>

     <div class="banner-controls">
         <button class="banner-control prev-slide">
             <i class="fas fa-chevron-left"></i>
         </button>
         <button class="banner-control next-slide">
             <i class="fas fa-chevron-right"></i>
         </button>
     </div>

     <div class="banner-indicators">
         <div class="banner-indicator active" data-slide="0"></div>
         <div class="banner-indicator" data-slide="1"></div>
         <div class="banner-indicator" data-slide="2"></div>
     </div>
 </div>
 <!-- Bootstrap JS Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script>
     $(document).ready(function() {
         // Banner Slider Functionality
         const slider = $('.banner-slider');
         const slides = $('.banner-slide');
         const indicators = $('.banner-indicator');
         const slideCount = slides.length;
         let currentSlide = 0;
         let slideInterval;

         // Set initial active slide
         function setActiveSlide(index) {
             currentSlide = index;
             slider.css('transform', `translateX(-${currentSlide * 100}%)`);

             // Update indicators
             indicators.removeClass('active');
             indicators.eq(currentSlide).addClass('active');
         }

         // Next slide function
         function nextSlide() {
             currentSlide = (currentSlide + 1) % slideCount;
             setActiveSlide(currentSlide);
         }

         // Previous slide function
         function prevSlide() {
             currentSlide = (currentSlide - 1 + slideCount) % slideCount;
             setActiveSlide(currentSlide);
         }

         // Auto slide every 5 seconds
         function startSlider() {
             slideInterval = setInterval(nextSlide, 2000);
         }

         // Stop auto sliding when user interacts
         function stopSlider() {
             clearInterval(slideInterval);
         }

         // Initialize slider
         startSlider();

         // Event listeners
         $('.next-slide').click(function() {
             stopSlider();
             nextSlide();
             startSlider();
         });

         $('.prev-slide').click(function() {
             stopSlider();
             prevSlide();
             startSlider();
         });

         // Click on indicator
         indicators.click(function() {
             stopSlider();
             const slideIndex = $(this).data('slide');
             setActiveSlide(slideIndex);
             startSlider();
         });

         // Pause on hover
         $('.banner-container').hover(
             function() {
                 stopSlider();
             },
             function() {
                 startSlider();
             }
         );

         // Handle window resize
         $(window).resize(function() {
             setActiveSlide(currentSlide);
         });
     });
 </script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\acer\Downloads\cloning-diskominfo\keamanan\resources\views/beranda.blade.php ENDPATH**/ ?>
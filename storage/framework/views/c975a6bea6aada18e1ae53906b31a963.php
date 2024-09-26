<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alcovia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo e(config('app.baseURL')); ?>/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<body>
  <!-- onload animation -->
  <div class="loading-page w-100">
    <video id="intro-video" autoplay muted>
        <source src="assets/Logo_alcovia_animation.webm" type="video/webm">
    </video>
  </div>
<header>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid d-flex align-items-center">
        <div class="col-4 d-flex justify-content-start ps-4">
            <!-- Togglebar Icon -->
            <a href="#" class="nav-link btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <img src="assets/togglebar.png" alt="Togglebar" height="20px">
            </a>
        </div>
        <div class="col-4 text-center d-flex justify-content-center">
            <!-- Logo in the center -->
            <a class="navbar-brand mx-auto" href="<?php echo e(config('app.baseURL')); ?>" data-toggle="tooltip" data-placement="top" title="Alcovia">
                <img src="assets/alcovia.png" class="text-center" alt="Alcovia Logo">
            </a>
        </div>
        <div class="col-4 d-flex justify-content-end pe-4">
            <a href="<?php echo e(config('app.baseURL')); ?>/application" class="nav-link join">JOIN THE MOVEMENT</a>
        </div>
    </div>
  </nav>

<!-- Offcanvas Sidebar -->
<section>
  <div class="offcanvas custom-offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header mx-auto">
          <img href="index.html" src="assets/walcovia.png" alt="Alcovia Logo">
          <button type="button" class="text-reset closebtn" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="bi bi-x"></i>
          </button>
      </div>
      <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1">
              <li class="nav-item out">
                <a class="nav-link" href="<?php echo e(config('app.baseURL')); ?>/about">About Us</a>
                <hr>
              </li>
              <li class="nav-item out">
                  <a class="nav-link" href="<?php echo e(config('app.baseURL')); ?>/application">Apply Now</a>
                  <hr>
              </li>
              <li class="nav-item out">
                  <a class="nav-link" href="<?php echo e(config('app.baseURL')); ?>/contact">Contact</a>
                  <hr>
              </li>
          </ul>
      </div>
  </div>
</section>
</header>
  
  <!-- main section -->
  <section class="video-background">
    <video autoplay muted loop>
      <source src="assets/scenery.mp4" type="video/mp4">
    </video>
      <div class="overlay row h-100">
        <div class="col-md-4 left-text hidden">
        Dare to become everything you were born to be.
        </div>
      </div> 
  </section>

  <!-- About Us Section -->
<section class="about-us text-center py-4 mt-3 mb-3 hidden">
    <div class="container">
      <h2 class="text-center">Why Alcovia? Because Your Future Deserves More.</h2>
        <div class="content text-center">
            <div class="wcontainer gap-4">
              <p>
              <b>More than Mentorship:</b> We don’t just guide you—we awaken the power within you to forge your own path.
              </p>
              <p>
              <b>More than Academics:</b> We don’t just teach—you gain the skills and mindset to thrive in an ever-evolving world.
              </p>
              <p>
              <b>More than Success</b>: We don’t just celebrate achievements—we cultivate changemakers who leave a lasting impact.
              </p>
            </div>
        </div>
    </div>
</section>


<!-- Program Section -->
<section class="program-section">
  <div class="container text-center my-4 hidden">
    <div class="container-fluid d-flex gap-4 mt-4">
        <!-- First Card -->
        <div class="program-card col-md-3 d-flex flex-column align-items-center">
            <div class="over-text">This is the description that appears on hover.</div>
            <img src="assets/workshop.jpg" class="img-fluid shadow mb-3 m-3" alt="Workshops">
            <div class="information text-center">
                <h4 class="font-weight-bold">WORKSHOPS</h4>
                <p class="text-muted"><i>Interactive Learning</i></p>
            </div>
        </div>

        <!-- Second Card -->
        <div class="program-card col-md-3 d-flex flex-column align-items-center">
            <div class="information text-center order-2 order-md-1">
                <h4 class="font-weight-bold">ENTREPRENEURSHIP</h4>
                <p class="text-muted"><i>Innovative Leadership</i></p>
            </div>
            <img src="assets/entrepreneurship.jpg" class="img-fluid shadow mb-3 order-1 order-md-2 m-3" alt="Entrepreneurship">
            <div class="hover-text">This is the description that appears on hover.</div>
        </div>

        <!-- Third Card -->
        <div class="program-card col-md-3 d-flex flex-column align-items-center">
            <div class="over-text">This is the description that appears on hover.</div>
            <img src="assets/fitness.jpg" class="img-fluid shadow mb-3 m-3" alt="Fitness">
            <div class="information text-center">
                <h4 class="font-weight-bold">FITNESS & MENTAL</h4>
                <p class="text-muted"><i>Holistic Health</i></p>
            </div>
        </div>

        <!-- Fourth Card -->
        <div class="program-card col-md-3 d-flex flex-column align-items-center">
          <div class="information text-center order-2 order-md-1">
              <h4 class="font-weight-bold">SOCIAL WORK</h4>
              <p class="text-muted"><i>Meaningful and Caring</i></p>
          </div>
          <img src="assets/social-work.jpeg" class="img-fluid shadow mb-3 order-1 order-md-2 m-3" alt="Social Work">
          <div class="hover-text">This is the description that appears on hover.</div>
      </div>
    </div>
</div>
</section>


<!-- Mentors Section -->
<section class="mentor-section">
  <div class="swiper swiper-container container">
    <div class="static-overlay">
      <h2>OUR MENTORS</h2>
    </div>
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <img src="assets/mentor.jpg" alt="mentor1">
        <div class="slide-caption">
          <h3>Rama Vaidyanathan</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, eligendi!</p>
        </div>
      </div>

      <div class="swiper-slide">
        <img src="assets/mentor.jpg" alt="mentor2">
        <div class="slide-caption">
          <h3>Rony Saha</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nesciunt.</p>
        </div>
      </div>

      <div class="swiper-slide">
        <img src="assets/mentor.jpg" alt="mentor3">
        <div class="slide-caption">
          <h3>Neha Rai</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, doloribus!</p>
        </div>
      </div>

      <div class="swiper-slide">
        <img src="assets/mentor.jpg" alt="mentor1">
        <div class="slide-caption">
          <h3>Rama Vaidyanathan</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, eligendi!</p>
        </div>
      </div>

      <div class="swiper-slide">
        <img src="assets/mentor.jpg" alt="mentor2">
        <div class="slide-caption">
          <h3>Rony Saha</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nesciunt.</p>
        </div>
      </div>

      <div class="swiper-slide">
        <img src="assets/mentor.jpg" alt="mentor3">
        <div class="slide-caption">
          <h3>Neha Rai</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, doloribus!</p>
        </div>
      </div>

    </div>
</section>

<!-- Events Conducted -->
<section id="events-conducted" class="py-5 pb-0">
  <div id="eventcarousel" class="carousel carousel-fade slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="300">
        <img src="assets/fvision.jpg" class="d-block w-100 img-fluid vh-100" alt="...">
      </div>
      <div class="carousel-item" data-interval="300">
        <img src="assets/fmission.jpg" class="d-block w-100 img-fluid vh-100" alt="...">
      </div>
      <div class="carousel-item" data-interval="300">
        <img src="assets/event2.jpg" class="d-block w-100 img-fluid vh-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#eventcarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#eventcarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- Application Process -->
<section class="application">
  <div class="container application-process pt-4 w-100">
    <h2>Application Process</h2>
    <div class="d-flex gap-4 process-container justify-content-center hidden">
        <div class="col-md-4 mb-4">
            <div class="step">
                <i class="fas fa-user-edit step-icon"></i>
                <h4 class="step-title">Step 1: After Workshop</h4>
                <p class="step-description">Students express their interest in joining Alcovia after attending our insightful workshops, marking the first step toward their personalized journey.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="step">
                <i class="fas fa-book-open step-icon"></i>
                <h4 class="step-title">Step 2: Aptitude Test</h4>
                <p class="step-description">A customized aptitude test helps us understand the student’s strengths, talents, and areas of potential, allowing us to create a tailored development plan.
                </p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="step">
                <i class="fas fa-chalkboard-teacher step-icon"></i>
                <h4 class="step-title">Step 3: Parent-Child Meeting</h4>
                <p class="step-description">A meaningful discussion with both parents and the student ensures alignment on goals and introduces our personalized approach to nurturing the student’s growth.</p>
            </div>
        </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<footer class="footer text-white pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 align-items-center">
        <div class="row"><img class="float-start" src="assets/walcovia.png" alt="">
            <p>Download our apps to start learning.</p>
            <a href="tel:+91458654528" class="text-warning h5" data-toggle="tooltip" data-placement="top" title="Click to Call">Call Us - +91 458 654 528</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mt-4 mb-4 text-center">
          <!-- Facebook -->
          <a
            target="_blank"
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            ><i class="bi bi-facebook"></i></a>
    
          <!-- X -->
          <a
            target="_blank"
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            ><i class="bi bi-twitter-x"></i></a>
    
          <!-- Google -->
          <a
            target="_blank"
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            ><i class="bi bi-google"></i></a>
    
          <!-- Instagram -->
          <a
            target="_blank"
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            ><i class="bi bi-instagram"></i></a>
    
          <!-- Linkedin -->
          <a
            target="_blank"
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            ><i class="bi bi-linkedin"></i></a>
          <!-- Github -->
          <a
            target="_blank"
            class="btn btn-link btn-floating btn-lg m-1"
            href="#!"
            role="button"
            ><i class="bi bi-github"></i></a>
        </div>
      </div>

        <div class="col-md-3">
          <h5 class="text-warning"  >Download Now</h5>
          <a href="" target="_blank" data-toggle="tooltip" data-placement="top" title="Click to begin Download"><img src="assets/download.png" alt="Google Play" class="img-fluid">
        </div>
    </div>
    <hr>
    <div class="copyright text-center p-3 pt-0 mb-0 h5">
      &copy;<a class="text-white" href="#">Alcovia.com</a> - All Rights Reserved.
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
</script>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
    integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.swiper', {
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 80,
    }
  },
  autoplay: {
    delay: 7000,
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
  speed:800,
  loop: true,
  centeredSlides: true, // Center the active slide
});
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\alcovia\resources\views/index.blade.php ENDPATH**/ ?>
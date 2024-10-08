<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(config('app.baseURL')); ?>/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <style>
      #vision-mission p{
        font-size: 3vh;
      }
    </style>
</head>
<body>
  <!-- onload animation -->
  <div class="loading-page">
    <video id="intro-video" autoplay muted>
        <source src="assets/Logo_alcovia_animation.webm" type="video/mp4">
        Your browser does not support the video tag.
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
              <li class="nav-item">
                  <a class="nav-link out" href="<?php echo e(config('app.baseURL')); ?>/">Home</a>
                  <hr>
              </li>
                <li class="nav-item">
                    <a class="nav-link out" href="<?php echo e(config('app.baseURL')); ?>/application">Apply Now</a>
                    <hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link out" href="<?php echo e(config('app.baseURL')); ?>/contact">Contact</a>
                    <hr>
                </li>
            </ul>
        </div>
    </div>
    </section>
</header>
  <!-- video -->
  <section class="video-background">
    <video autoplay muted loop>
      <source src="assets/aboutvideo.mp4" type="video/mp4">
    </video>
  </section>
<section>
  <div class="container arch"></div>
    <h2 class="text-center pt-0 mt-0">ABOUT US</h2>
    <div class="about-container">
      <div class="image"> <img src="assets/alcovia logo.png" alt="logo"></div>
        <div class="description">
        At Alcovia, we believe in unlocking your limitless potential. Through personalized guidance and transformative experiences, we empower you to break boundaries, rise above challenges, and shape the extraordinary future you were meant for.
        <br>
        Become the leader of tomorrow, today.  
        </div>
    </div>
</section>

  <!-- Vision and Mission Section -->
  <section id="vision-mission" class="text-center py-4 hidden">
    <div class="container">
      <!-- Vision Section -->
      <div class="vision-section row align-items-center mb-5">
        <div class="col-md-6 text-end pe-4">
          <h3 class="section-title">Our Vision</h3>
          <p class="section-text">
          <b>At Alcovia, extraordinary achievement isn’t a goal—it’s the standard.</b>
          <br>
          Alcovia’s vision is to lead in personalized student development, providing tailored mentorship that empowers future leaders to drive innovation and make a lasting impact on society and industries. We strive to build a collaborative network of high achievers, while reshaping education by inspiring a shift toward individualized learning that prepares students for the complexities of tomorrow.
          </p>
        </div>
        <div class="col-md-6 position-relative">
          <div class="vertical-line"></div>
          <img src="assets/fvision.jpg" class="img-fluid vismis" alt="Vision Image">
        </div>
      </div>
  
      <!-- Mission Section -->
      <div class="mission-section row align-items-center hidden">
        <div class="col-md-6 position-relative">
          <img src="assets/fmission.jpg" class="img-fluid vismis" alt="Mission Image">
          <div class="vertical-line"></div>
        </div>
        <div class="col-md-6 text-start ps-4">
          <h3 class="section-title">Our Mission</h3>
          <p class="section-text">
          We want to build a community of top 1%
          <br>
          By building this community, we create an environment where exceptional students thrive together, and inspire each other to grow, innovate, and lead.
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- Founder and Member -->
<section id="founder-member" class="py-5" style="background-color: beige;">
  <div class="container"></div>
    <div class="container">
        <h2 class="text-center hidden">Founders and Members</h2>
        <div class="d-flex flex-wrap align-items-center member-section" id="member1">
            <div class="col-md-6 text-center order-1">
                <img src="assets/member.jpg" alt="Member 1" class="img-fluid member-image">
            </div>
            <div class="col-md-6 member-description order-2">
                <h3>Person 1</h3>
                <h5 class="text-muted fst-italic">Founder & CEO</h5>
                <hr>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque odio minima quod ab. In ut repellendus ratione illo. Placeat dolorum perferendis error ducimus at totam atque facere distinctio veritatis aut!</p>
            </div>
        </div>
        <div class="d-flex flex-wrap align-items-center member-section flex-row-reverse" id="member2">
            <div class="col-md-6 text-center order-1">
                <img src="assets/member.jpg" alt="Member 2" class="img-fluid member-image">
            </div>
            <div class="col-md-6 member-description order-2">
                <h3>Person 2</h3>
                <h5 class="text-muted fst-italic">Co-Founder</h5>
                <hr>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quas quos eos tempora placeat ut sunt corporis, laudantium voluptas ipsum. Modi dolores delectus odit laudantium vitae. Aspernatur molestias eligendi perspiciatis?</p>
            </div>
        </div>
        <div class="d-flex flex-wrap align-items-center member-section" id="member3">
            <div class="col-md-6 text-center order-1">
                <img src="assets/member.jpg" alt="Member 3" class="img-fluid member-image">
            </div>
            <div class="col-md-6 member-description order-2">
                <h3>Person 3</h3>
                <h5 class="text-muted fst-italic">CTO</h5>
                <hr>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, illum labore? Fuga minus rem alias saepe dolorem, modi id velit nam itaque doloribus in provident facere aut est nobis odit!</p>
            </div>
        </div>
        <div class="d-flex flex-wrap align-items-center member-section flex-row-reverse" id="member4">
            <div class="col-md-6 text-center order-1">
                <img src="assets/member.jpg" alt="Member 4" class="img-fluid member-image">
            </div>
            <div class="col-md-6 member-description order-2">
                <h3>Person 4</h3>
                <h5 class="text-muted fst-italic">COO</h5>
                <hr>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis quasi quod impedit hic aut vel sed culpa molestiae, facere vitae eligendi, natus autem, repudiandae obcaecati dolores consequuntur corporis facilis!</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials py-5">
  <div class="container text-center hidden">
    <h2>Testimonials</h2>
      <div id="testimonialCarousel" class="carousel">
            <div class="carousel-inner pt-5 ">
                <div class="carousel-item active">
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body testimonial-box position-relative p-4">
                            <div class="testimonial-img mx-auto rounded-circle" style="background-image: url('assets/kishwar.png');"></div>
                                <h4 class="d-flex justify-content-between" style="margin-top: 20px;">
                                    <span>Kishwar</span>
                                    <span class="text-warning">★★★★★</span>
                                </h4>
                                <p>This handy tool helps you create dummy text for all your layout needs. We are gradually adding.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body testimonial-box position-relative p-4">
                            <div class="testimonial-img mx-auto rounded-circle" style="background-image: url('assets/kishwar.png');"></div>
                                <h4 class="d-flex justify-content-between" style="margin-top: 20px;">
                                    <span>Kishwar</span>
                                    <span class="text-warning">★★★★★</span>
                                </h4>
                                <p>This handy tool helps you create dummy text for all your layout needs. We are gradually adding.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body testimonial-box position-relative p-4">
                            <div class="testimonial-img mx-auto rounded-circle" style="background-image: url('assets/kishwar.png');"></div>
                                <h4 class="d-flex justify-content-between" style="margin-top: 20px;">
                                    <span>Kishwar</span>
                                    <span class="text-warning">★★★★★</span>
                                </h4>
                                <p>This handy tool helps you create dummy text for all your layout needs. We are gradually adding.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body testimonial-box position-relative p-4">
                            <div class="testimonial-img mx-auto rounded-circle" style="background-image: url('assets/kishwar.png');"></div>
                                <h4 class="d-flex justify-content-between" style="margin-top: 20px;">
                                    <span>Kishwar</span>
                                    <span class="text-warning">★★★★★</span>
                                </h4>
                                <p>This handy tool helps you create dummy text for all your layout needs. We are gradually adding.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body testimonial-box position-relative p-4">
                            <div class="testimonial-img mx-auto rounded-circle" style="background-image: url('assets/kishwar.png');"></div>
                                <h4 class="d-flex justify-content-between" style="margin-top: 20px;">
                                    <span>Kishwar</span>
                                    <span class="text-warning">★★★★★</span>
                                </h4>
                                <p>This handy tool helps you create dummy text for all your layout needs. We are gradually adding.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body testimonial-box position-relative p-4">
                            <div class="testimonial-img mx-auto rounded-circle" style="background-image: url('assets/kishwar.png');"></div>
                                <h4 class="d-flex justify-content-between" style="margin-top: 20px;">
                                    <span>Kishwar</span>
                                    <span class="text-warning">★★★★★</span>
                                </h4>
                                <p>This handy tool helps you create dummy text for all your layout needs. We are gradually adding.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow-sm rounded-3">
                        <div class="card-body testimonial-box position-relative p-4">
                            <div class="testimonial-img mx-auto rounded-circle" style="background-image: url('assets/kishwar.png');"></div>
                                <h4 class="d-flex justify-content-between" style="margin-top: 20px;">
                                    <span>Kishwar</span>
                                    <span class="text-warning">★★★★★</span>
                                </h4>
                                <p>This handy tool helps you create dummy text for all your layout needs. We are gradually adding.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
    integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\alcovia\resources\views/about.blade.php ENDPATH**/ ?>
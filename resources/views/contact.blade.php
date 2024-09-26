<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
      .contact-header {
            background-color: #002C45;
            color: white;
            padding: 5vh 0;
            text-align: center;
        }

        .contact-info {
          padding: 5vh 4vw;
          background-color: #e9dfcb;
        }

        .contact-info h2 {
            text-align: center;
            margin-bottom: 3vh;
            font-weight: bold;
        }
        .info-block a{
          text-decoration: none;
          color: inherit;
        }
        .contact-info .icon {
            font-size: 40px;
            color: #234944;
            margin-bottom: 20px;
        }

        .contact-info .info-block {
            text-align: center;
            margin-bottom: 30px;
        }

        .email{
          border-right: 2px #ccc solid;
          border-left: 2px #ccc solid;
        }
        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form .btn-success:hover {
          background-color: #45a049;
        }
        .contact-form h3 {
            margin-bottom: 30px;
            font-weight: bold;
            text-align: center;
        }

        .map-container {
            margin-top: 50px;
            text-align: center;
        }

        .map-container iframe {
            border: 0;
            width: 100%;
            height: 450px;
        }
        @media (max-width: 768px) {
          .email{
            border: none;
          }
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
            <a class="navbar-brand mx-auto" href="{{config('app.baseURL')}}" data-toggle="tooltip" data-placement="top" title="Alcovia">
                <img src="assets/alcovia.png" class="text-center" alt="Alcovia Logo">
            </a>
        </div>
        <div class="col-4 d-flex justify-content-end pe-4">
            <a href="{{config('app.baseURL')}}/application" class="nav-link join">JOIN THE MOVEMENT</a>
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
                  <a class="nav-link out" href="{{config('app.baseURL')}}/index">Home</a>
                  <hr>
              </li>
              <li class="nav-item">
                  <a class="nav-link out" href="{{config('app.baseURL')}}/about">About Us</a>
                  <hr>
              </li>
                <li class="nav-item">
                    <a class="nav-link out" href="{{config('app.baseURL')}}/application">Apply Now</a>
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

<div class="contact-header">
  <h1>Contact Us</h1>
  <p>We're here to help and answer any question you might have. We look forward to hearing from you.</p>
</div>

<div class="container-fluid contact-info">
  <h2>Get in Touch</h2>
  <div class="row">
      <div class="col-md-4 info-block hidden">
          <i class="fas fa-phone-alt icon"></i>
          <h4>Call Us</h4>
          <p><a href="tel:+91 9070606050">+91 9070606050</a></p>
      </div>
      <div class="col-md-4 email info-block hidden">
          <i class="fas fa-envelope icon"></i>
          <h4>Email Us</h4>
          <p><a href="mailto:info@alcovia.life">info@alcovia.life</a></p>
      </div>
      <div class="col-md-4 info-block hidden">
          <i class="fas fa-map-marker-alt icon"></i>
          <h4>Visit Us</h4>
          <p>WeWork, Two Horizon Centre,DLF Phase 5, Gurugram</p>
      </div>
  </div>
</div>

<div class="container map-container">
  <h2>Our Location</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14031.773910946398!2d77.0965147!3d28.4511202!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196a9219452f%3A0x2b7db4e11e0c29d1!2sWeWork%20Two%20Horizon%20Centre!5e0!3m2!1sen!2sin!4v1727258252584!5m2!1sen!2sin%22" width="100%" height="100%" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="pt-3 pb-3 hidden"></iframe>
</div>

<div class="container">
  <h2 class="text-center pb-3">Send Us a Message</h2>

    <!-- Success Message Section -->
  @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif


  <div class="contact-form mb-5 form-column">
    <form action="{{config('app.baseURL')}}/contact" method="POST">
      @csrf <!-- Laravel CSRF Protection -->
      <div class="row">
        <div class="mb-3 col-4">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="mb-3 col-4">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
        <div class="mb-3 col-4">
          <label for="Phone" class="form-label">Phone No</label>
          <input type="tel" pattern="[0-9]{10}" class="form-control" id="Phone" name="Phone" required>
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col-6">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3 col-6">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="2" required></textarea>
      </div>
      <button type="submit" class="btn btn-success">Send Message</button>
    </form>
  </div>
</div>


<!-- Footer Section -->
<footer class="footer text-white pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 align-items-center">
            <div class="row"><img class="float-start" src="assets/walcovia.png" alt=""></div>
              <div class="row">
                <p>Download our apps to start learning.</p>
                <a href="tel:+91458654528" class="text-warning h5" data-toggle="tooltip" data-placement="top" title="Click to Call">Call Us - +91 458 654 528</a>
              </div>
          </div>
          <div class="col-md-6">
            <div></div>
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
            <a href="" target="_blank" data-toggle="tooltip" data-placement="top" title="Click to begin Download"><img src="assets/download.png" alt="Google Play">
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
      <script>
$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        // Prevent the default form submission behavior
        e.preventDefault();
    });
});

    </script>
</body>
</html>
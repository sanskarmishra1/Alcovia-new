<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    .out{
        opacity: 0;
        filter: blur(5px);
        transform: translateX(-100%);
        transition: all 1.5s;
    }
    .in{
        opacity: 1;
        filter: blur(0);
        transform: translateX(0);
    }
    .nav-item:nth-child(2){
        transition-delay: 200ms;
    }
    .nav-item:nth-child(3){
        transition-delay: 400ms;
    }
    .brochure-section {
        background-color: beige;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .brochure-section h3 {
        margin-bottom: 20px;
        font-weight: bold;
    }

    .brochure-section p {
        margin-bottom: 20px;
        color: #666;
    }

    .brochure-section .btn-success {
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .brochure-section .btn-success:hover,.application-form .btn-success:hover {
        background-color: #45a049;
    }
    .application-form {
        background-color: white;
        padding: 1.5rem;
        margin-bottom: 5vw;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .application-form h3 {
        margin-bottom: 3vh;
        font-weight: bold;
        text-align: center;
    }
    h3 {
            text-align: center;
            max-width: 70%; /* Adjust the width as necessary */
            margin: 10vh auto;
            word-wrap: break-word;
            line-height: 1.5; /* Adjusts the spacing between lines */
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
            <a class="navbar-brand mx-auto" href="{{config('app.baseURL')}}/" data-toggle="tooltip" data-placement="top" title="Alcovia">
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
            <li class="nav-item out">
                <a class="nav-link" href="{{config('app.baseURL')}}/">Home</a>
                <hr>
            </li>
              <li class="nav-item out">
                  <a class="nav-link" href="{{config('app.baseURL')}}/about">About Us</a>
                  <hr>
              </li>
              <li class="nav-item out">
                  <a class="nav-link" href="{{config('app.baseURL')}}/contact">Contact</a>
                  <hr>
              </li>
          </ul>
      </div>
  </div>
</header>
  <!-- video -->
  <section class="video-background">
    <video autoplay muted loop>
      <source src="assets/aboutvideo.mp4" type="video/mp4">
    </video>
    <div class="overlay row h-100">
        <div class="col-md-4 left-text hidden">
        Don't play it safe. Join the future leaders who are already getting ahead with personalized guidance.
        </div>
      </div> 
  </section>

<!-- Application Process -->
<section class="application">
    <div class="container application-process pt-4 w-100">
      <h2>Application Process</h2>
      <div class="d-flex gap-4 process-container justify-content-center hidden">
          <div class="col-md-4 mb-4">
              <div class="step out">
                  <i class="fas fa-user-edit step-icon"></i>
                  <h4 class="step-title">Step 1: Career Exploration</h4>
                  <p class="step-description">Students express their interest in joining Alcovia after attending our insightful workshops, marking the first step toward their personalized journey.</p>
              </div>
          </div>
          <div class="col-md-4 mb-4">
              <div class="step out">
                  <i class="fas fa-book-open step-icon"></i>
                  <h4 class="step-title">Step 2: Aptitude Test</h4>
                  <p class="step-description">A customized aptitude test helps us understand the student’s strengths, talents, and areas of potential, allowing us to create a tailored development plan.
                  </p>
              </div>
          </div>
          <div class="col-md-4 mb-4">
              <div class="step out">
                  <i class="fas fa-chalkboard-teacher step-icon"></i>
                  <h4 class="step-title">Step 3: Parent-Child Meeting</h4>
                  <p class="step-description">A meaningful discussion with both parents and the student ensures alignment on goals and introduces our personalized approach to nurturing the student’s growth.</p>
              </div>
          </div>
      </div>
    </div>
  </section>

<div class="container brochure-section mt-5 hidden">
    <h3>Download Our Course Brochure</h3>
    <p>Get detailed information about our courses, instructors, and learning outcomes. Click the button below to download our comprehensive brochure.</p>
    <a href="assets/brochure.pdf" class="btn btn-success" download>Download Brochure</a>
</div>

  
<section class="apply-form">
    <div class="container mt-5">
        <h2 class="text-center mb-3">Apply Now</h2>
        <div class="application-form">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('application.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="education" class="form-label">Educational Background</label>
                        <textarea class="form-control" id="education" name="education" rows="1" required></textarea>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="course" class="form-label">Course Interested In</label>
                        <select class="form-select" id="course" name="course" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="course1">Course 1</option>
                            <option value="course2">Course 2</option>
                            <option value="course3">Course 3</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit Application</button>
            </form>
        </div>
    </div>
</section>



<!-- Footer Section -->
<footer class="footer text-white pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 align-items-center">
            <div class="row"><img class="float-start" src="assets/walcovia.png" alt=""></div>
              <div class="row">
                <p>Download our apps to start learning.</p>
                <a href="tel:+91458654528" class="text-warning h5" data-toggle="tooltip" data-placement="top" title="Click to Call"><i class="fa fa-phone pe-1"></i>+91 458 654 528</a>
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
            $('#applicationForm').on('submit', function (e) {
                // Prevent the default form submission behavior
                e.preventDefault();
            });
        });
      </script>
</body>
</html>
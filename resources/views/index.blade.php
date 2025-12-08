@extends('layouts.app')

@section('title', 'Master Code')

@section('content')
   <div id="preloader">
    <div class="preloader-content">
      <img src="./assets/images/footer-logo.png" alt="MasterCode Logo" class="preloader-logo">
      <h2>Welcome to MasterCode</h2>
      <p>Loading your experience...</p>
      <!-- <div class="spinner"></div> -->
    </div>
  </div>
  <section class="hero">
    <!-- Navbar -->
    @include('includes.nav')
    <!-- content -->
    <div class="container d-flex align-items-center justify-content-center ">
      <div class="row hero-content d-flex align-items-center justify-content-center">

        <div class="col-md-6">
          <img src="./assets/images/slider-img.png" class="img-fluid" alt="img">
        </div>

        <div class="col-md-6 right-side p-3 ">
          <img src="././assets/images/small-logo.png" alt="logo" width="170">
          <h2 class="text-white py-4">Managed Services: Complete Regulatory Reporting Support so You Can Focus on
            Business</h2>
          <button class="consultant-btn">

            Book a consultant session <i class="fa-solid fa-right-long"></i>
          </button>
        </div>

      </div>
    </div>
  </section>

  <!-- about  -->
  <section class="about container mb-5">
    <div class="row">
      <div class="col-md-6 right-side p-5 ">
        <img src="././assets/images/small-logo-colored.png" alt="logo" width="170">
        <h2 class=" py-4">"Master Code is a software solutions company
          delivering tailored apps, ERP systems, cloud
          solutions, and AI tools designed to meet business
          needs across industries."</h2>
        <button class="consultant-btn">

          learn more <i class="fa-solid fa-right-long"></i>
        </button>
      </div>
      <div class="col-md-6">
        <div class="about-img-wrapper">
          <img src="./assets/images/about-img.png" class="img-fluid" alt="img">
        </div>
      </div>



    </div>
  </section>
  <!-- why choose us  -->
 <section class="why-choose-us">
  <div class="container">
      <h4 class="text-center"><img src="././assets/images/mastercode-icon.png" alt="" > Why Choose Us </h4>
    <div class="row text-center">

      <div class="col-md-3">
        <div class="feature-box">
          <img src="./assets/images/shape.png" class="feature-img" alt="">

          <div class="icon-overlay d-block">
           <i class="fa-solid fa-user-group"></i>
             <h5 class="feature-title"> experienced & qualified tech team </h5>
          </div>

         
        </div>
      </div>
       <div class="col-md-3 my-0 my-md-5"> 
        <div class="feature-box my-0 my-md-5">
          <img src="./assets/images/shape.png" class="feature-img" alt="">

          <div class="icon-overlay d-block">
          <i class="fa-solid fa-arrows-split-up-and-left"></i>
             <h5 class="feature-title"> experienced & qualified tech team </h5>
          </div>

         
        </div>
      </div>
       <div class="col-md-3">
        <div class="feature-box">
          <img src="./assets/images/shape.png" class="feature-img" alt="">

          <div class="icon-overlay d-block">
           <i class="fa-solid fa-user-group"></i>
             <h5 class="feature-title"> experienced & qualified tech team </h5>
          </div>

         
        </div>
          <div class="feature-box">
          <img src="./assets/images/shape.png" class="feature-img" alt="">

          <div class="icon-overlay d-block">
           <i class="fa-solid fa-user-group"></i>
             <h5 class="feature-title"> experienced & qualified tech team </h5>
          </div>

         
        </div>
      </div>
       <div class="col-md-3 my-0 my-md-5">
        <div class="feature-box my-0 my-md-5">
          <img src="./assets/images/shape.png" class="feature-img" alt="">

          <div class="icon-overlay d-block">
           <i class="fa-solid fa-user-group"></i>
             <h5 class="feature-title"> experienced & qualified tech team </h5>
          </div>

         
        </div>
      </div>

    </div>
  </div>
</section>

  <!--  Partners Section -->
  <section class="partners-section">
    <div class="container ">
      <h4><img src="././assets/images/mastercode-icon.png" alt=""> Trustful Partners</h4>
      <h4 class="slogan">Our success is powered by strong partnerships built on trust, expertise, and shared goals.</h4>
      <div class="partners-logos d-flex justify-content-between flex-wrap align-items-center">
        <img src="././assets/images/electron.png" alt="Partner 1">
        <img src="././assets/images/elkoot.png" alt="Partner 2">
        <img src="././assets/images/saeeh.png" alt="Partner 3">
        <img src="././assets/images/tamweel.png" alt="Partner 4">
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section class="mission-section position-relative my-3">
    <h3 class="text-center text-white mb-5">“LET’S BUILD YOUR NEXT BIG PROJECT TOGETHER“</h3>
  </section>

  <div class="container position-relative ">
    <div class="row mission-cards justify-content-center">
      <div class="col-md-4">
        <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
          <div class="d-flex justify-content-center ">
            <img src="././assets/images/mission-icon.png" width="50px" alt="mission">
          </div>
          <h5>our mission</h5>
          <p>“To transform businesses with scalable, secure, and innovative technology.”</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
          <div class="d-flex justify-content-center ">
            <img src="././assets/images/values-icon.png" width="50px" alt="vision">
          </div>
          <h5>our vision</h5>
          <p>“To be a trusted tech partner for businesses worldwide.”</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
          <div class="d-flex justify-content-center ">
            <img src="././assets/images/values-icon.png" width="50px" alt="values">
          </div>
          <h5>our values</h5>
          <p>Innovation | Integrity | Excellence | Collaboration</p>
        </div>
      </div>
    </div>
  </div>
  <!-- services-section  -->
  <section class="services-section ">
    <div class="container text-center">

      <div class="section-header mb-4">
        <img src="./assets/images/service-icon.png" width="35" alt="">
        <h4><img src="././assets/images/mastercode-icon.png" alt=""> Our Services</h4>
        <h4 class="text mt-2">
          We provide end-to-end digital solutions including custom software, ERP systems, cloud services,
          AI integrations, and UX-focused design — with continuous maintenance to keep your business running smoothly.
        </h4>
      </div>
      <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">

              <div class="service-card">
                <img src="./assets/images/carousel.jpg" alt="">
                <div class="overlay">
                  <i class="fa-solid fa-computer"></i>
                  <h5>Custom Software Development</h5>
                </div>
              </div>

              <div class="service-card">
                <img src="./assets/images/carousel.jpg" alt="">
                <div class="overlay">
                  <i class="fa-brands fa-ubuntu"></i>
                  <h5>ERP Systems</h5>
                </div>
              </div>

              <div class="service-card">
                <img src="./assets/images/carousel.jpg" alt="">
                <div class="overlay">
                  <i class="fa-brands fa-ubuntu"></i>
                  <h5>Product Design</h5>
                </div>
              </div>


            </div>
          </div>


        </div>

        <div class="carousel-indicators position-static mt-4">
          <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="0" class="active"
            style="width: 64px; height: 8px;border-radius:13px;"></button>
          <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="1"></button>
        </div>

      </div>
    </div>
  </section>
  <!-- testimonial-section -->
  <section class="testimonial-section py-5">
    <div class="container">

      <div class="testimonial-box mx-auto text-center p-5">

        <!-- Quote icon -->
        <div class="quote-icon mb-3">
          <i class="fa-solid fa-quote-left" style="font-size: 2.2rem;"></i>
        </div>

        <!-- Review text -->
        <p class="review-text fw-semibold" id="reviewText">
          “Participating in Paper Middle East exceeded our expectations.<br>
          we’ll definitely be back next year!”
        </p>

        <!-- Stars -->
        <div class="stars my-3" id="starsContainer">
          <i class="fa-regular fa-star text-warning"></i>
          <i class="fa-solid fa-star text-warning"></i>
          <i class="fa-solid fa-star text-warning"></i>
          <i class="fa-solid fa-star text-warning"></i>
          <i class="fa-solid fa-star text-warning"></i>
        </div>

        <!-- Navigation + images -->
        <div class="d-flex justify-content-center align-items-center gap-3 mt-4">

          <!-- Prev Button -->
          <button class="nav-btn" id="prevBtn">
            <i class="fa-solid fa-angle-left"></i>
          </button>

          <!-- Person 1 -->
          <img src="./assets/images/person.png" class="reviewer-img small-img" alt="">

          <!-- Person active -->
          <div class="active-reviewer text-center">
            <img src="./assets/images/person.png" class="reviewer-img active-img" id="activeImg" alt="">
            <h6 class="mt-2 fw-bold" id="activeName">AHMED EL–SAYED</h6>
            <p class="text-muted m-0" id="activeTitle">SALES DIRECTOR</p>
          </div>

          <!-- Person 3 -->
          <img src="./assets/images/person.png" class="reviewer-img small-img" alt="">

          <!-- Next Button -->
          <button class="nav-btn" id="nextBtn">
            <i class="fa-solid fa-angle-right"></i>
          </button>

        </div>

      </div>

    </div>
  </section>

  <!-- info section  -->
  <section class="info-section">
    <div class="container">
      <div class="section-header text-center mb-4">
        <img src="././assets/images/mastercode-icon.png" alt="logo">
        <h4 class="text mt-2">
          Connect with us anytime through our social channels or contact numbers.
          We’re here to answer your questions and help you start your next project with confidence.
        </h4>
      </div>
    </div>
    <div class="info">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-2">
          <img src="./assets/images/info-logo.png" alt="" class="w-100">
        </div>
        <div class="col-md-10">
          <div class="row d-flex  align-items-center flex-wrap">
            <div class="col-md-4 mail d-flex border-start border-white">
              <div class="mail-icon">
                <i class="fa-solid fa-envelope text-white"></i>
              </div>
              <div class="mail-content text-light mx-5">
                <h5>Customersupport@mcodekw.com</h5>
                <h5>Info@mcodekw.com</h5>
              </div>
            </div>
            <div class=" col-md-4 phone d-flex  border-start border-white  ">
              <div class="phone-icon">
                <i class="fa-solid fa-phone text-light"></i>
              </div>
              <div class="phone-content text-light mx-5">
                <h5>+2010158799</h5>
                <h5>+201116987744</h5>
              </div>
            </div>
            <div class="col-md-4 links justify-content-center">
              <h5 class="text-light me-2">Follow Us</h5>
              <div class="links-icons d-flex   flex-wrap">
                <div class="facebook-icon ms-4">
                  <i class="fa-brands fa-facebook text-light"></i>
                </div>
                <div class="insta-icon ms-4">
                  <i class="fa-brands fa-instagram text-light"></i>
                </div>
                <div class="linkedin-icon ms-4">
                  <i class="fa-brands fa-linkedin text-light"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer  -->
  @include('includes.footer')
  
@endsection
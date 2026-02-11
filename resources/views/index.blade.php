@extends('layouts.app')

@section('title', 'Master Code')

<?php

use App\Models\HomePage;

$homeData = HomePage::first();
?>
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
                <a href="{{route('services')}}"><img src="{{ $homeData && !empty($homeData->image_hero) ? $homeData?->image_hero : asset('assets/images/slider-img.png') }}"
                    class="img-fluid" alt="img"></a>
            </div>

            <div class="col-md-6 right-side p-3 ">
                <img src="././assets/images/small-logo.png" alt="logo" width="170">
                <h2 class="text-white py-4">
                    {{ $homeData && !empty($homeData->p_hero)
                        ? '" ' . $homeData->p_hero . '."'
                        : 'Managed Services: Complete Regulatory Reporting Support so You Can Focus on
            Business'
                    }}

                </h2>
                <a class="consultant-btn" href="{{route('book-session')}}">
                    {{ $homeData && !empty($homeData->button_name)
                        ? $homeData->button_name
                        : 'Book a consultant session'
                    }}<i class="fa-solid fa-right-long"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- about  -->
<section class="about  mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 right-side p-md-3  ">
                <img src="././assets/images/small-logo-colored.png" alt="logo" width="170">
                <h2 class=" py-4">
                    {{ $homeData && !empty($homeData->p_hero)
                        ? '" ' . $homeData->p_features . '."'
                        : '"Master Code is a software solutions company
          delivering tailored apps, ERP systems, cloud
          solutions, and AI tools designed to meet business
          needs across industries."'
                    }}

                </h2>

                <a class="consultant-btn" href="{{route('about')}}">
                    {{ $homeData && !empty($homeData->button_features)
                        ? '" ' . $homeData->button_features . '."'
                        : 'learn more'
                    }}
                    <i class="fa-solid fa-right-long"></i>
                </a>
            </div>
            <div class="col-md-6">
                <div class="about-img-wrapper">
                    <img src="{{ $homeData && !empty($homeData->image_features) ? $homeData?->image_features : asset('assets/images/about-img.png') }}"
                        class="img-fluid" alt="img">
                </div>
            </div>



        </div>
    </div>
</section>
<!-- why choose us  -->
<section class="why-choose-us">
    <div class="container">
        <h4 class="text-center"><img src="././assets/images/mastercode-icon.png" alt=""> Why Choose Us </h4>
        <div class="row text-center">

            <div class="col-6 col-md-3">
                <div class="feature-box">
                    <img src="./assets/images/shape.png" class="feature-img" alt="">

                    <div class="icon-overlay d-block">
                        <i class="fa-solid fa-user-group"></i>
                        <h5 class="feature-title"> experienced & qualified tech team </h5>
                    </div>


                </div>
            </div>
            <div class="col-6 col-md-3 my-0 my-md-5">
                <div class="feature-box my-0 my-md-5">
                    <img src="./assets/images/shape.png" class="feature-img" alt="">

                    <div class="icon-overlay d-block">
                        <i class="fa-solid fa-arrows-split-up-and-left"></i>
                        <h5 class="feature-title"> experienced & qualified tech team </h5>
                    </div>


                </div>
            </div>
            <div class="col-6 col-md-3">
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
            <div class="col-6 col-md-3 my-0 my-md-5">
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
        <h4 class="slogan">
            {{ $homeData && !empty($homeData->p_partner)
                        ? '" ' . $homeData->p_partner . '."'
                        : 'Our success is powered by strong partnerships built on trust, expertise, and shared goals.'
                    }}

        </h4>
        <div class="partners-logos d-flex justify-content-between flex-wrap align-items-center">
            <img src="{{ $homeData && !empty($homeData->image_partner[0]) ? $homeData?->image_partner[0] : asset('assets/images/electron.png') }}"
                alt="Partner 1">
            <img src="{{ $homeData && !empty($homeData->image_partner[1]) ? $homeData?->image_partner[1] : asset('assets/images/elkoot.png') }}"
                alt="Partner 2">
            <img src="{{ $homeData && !empty($homeData->image_partner[2]) ? $homeData?->image_partner[2] : asset('assets/images/saeeh.png') }}"
                alt="Partner 3">
            <img src="{{ $homeData && !empty($homeData->image_partner[3]) ? $homeData?->image_partner[3] : asset('assets/images/tamweel.png') }}"
                alt="Partner 4">
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="mission-section position-relative my-3">
    <h3 class="text-center text-white mb-5">“LET’S BUILD YOUR NEXT BIG PROJECT TOGETHER“</h3>
</section>

<div class="container position-relative ">
    <div class="row mission-cards justify-content-center align-items-stretch">
        <div class="col-md-4">
            <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
                <div class="d-flex justify-content-center ">
                    <img src="././assets/images/mission-icon.png" width="50px" alt="mission">
                </div>
                <h5>our mission</h5>
                <p class="text-muted fw-bold">“To transform businesses with scalable, secure, and innovative technology.”</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
                <div class="d-flex justify-content-center ">
                    <img src="././assets/images/values-icon.png" width="50px" alt="vision">
                </div>
                <h5>our vision</h5>
                <p class="text-muted fw-bold">“To be a trusted tech partner for businesses worldwide.”</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
                <div class="d-flex justify-content-center ">
                    <img src="././assets/images/values-icon.png" width="50px" alt="values">
                </div>
                <h5>our values</h5>
                <p class="text-muted fw-bold">Innovation | Integrity | Excellence | Collaboration</p>
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
                AI integrations, and UX-focused design — with continuous maintenance to keep your business running
                smoothly.
            </h4>
        </div>
        <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="service-card">
                            <img src="./assets/images/carousel.jpg" alt="">
                            <div class="overlay">
                                <i class="fa-brands fa-ubuntu"></i>
                                <h5>ERP Systems</h5>
                                <div class="hover-box">
                                    <i class="fa-brands fa-ubuntu"></i>
                                    <h5>ERP Systems</h5>
                                    <p>
                                        inventory, HR, finance, POS for industries(retail, healthcare, restaurants) </p>
                                </div>

                            </div>
                        </div>

                        <div class="service-card">
                            <img src="./assets/images/carousel.jpg" alt="">
                            <div class="overlay">
                                <i class="fa-solid fa-computer"></i>
                                <h5>Custom Software Development</h5>
                                <div class="hover-box">
                                    <i class="fa-solid fa-computer"></i>
                                    <h5>Custom Software Development</h5>
                                    <p>
                                        Tailored solutions built to scale with your business needs.
                                    </p>
                                </div>

                            </div>


                        </div>

                        <div class="service-card">
                            <img src="./assets/images/carousel.jpg" alt="">
                            <div class="overlay">
                                <i class="fa-brands fa-ubuntu"></i>
                                <h5>Product Design</h5>
                                <div class="hover-box">
                                    <i class="fa-brands fa-ubuntu"></i>
                                    <h5>Product Design</h5>
                                    <p>
                                        intuitive, moder, user friendly interfaces. </p>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="cards-wrapper">

                        <div class="service-card">
                            <img src="./assets/images/carousel.jpg" alt="">
                            <div class="overlay">
                                <i class="fa-solid fa-computer"></i>
                                <h5>Custom Software Development</h5>
                                <div class="hover-box">
                                    <i class="fa-solid fa-computer"></i>
                                    <h5>Custom Software Development</h5>
                                    <p>
                                        Tailored solutions built to scale with your business needs.
                                    </p>
                                </div>

                            </div>


                        </div>

                        <div class="service-card">
                            <img src="./assets/images/carousel.jpg" alt="">
                            <div class="overlay">
                                <i class="fa-brands fa-ubuntu"></i>
                                <h5>ERP Systems</h5>
                                <div class="hover-box">
                                    <i class="fa-brands fa-ubuntu"></i>
                                    <h5>ERP Systems</h5>
                                    <p>
                                        inventory, HR, finance, POS for industries(retail, healthcare, restaurants) </p>
                                </div>

                            </div>
                        </div>

                         <div class="service-card">
                            <img src="./assets/images/carousel.jpg" alt="">
                            <div class="overlay">
                                <i class="fa-brands fa-ubuntu"></i>
                                <h5>Product Design</h5>
                                <div class="hover-box">
                                    <i class="fa-brands fa-ubuntu"></i>
                                    <h5>Product Design</h5>
                                    <p>
                                        intuitive, moder, user friendly interfaces. </p>
                                </div>

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

        {{-- Hidden database data for JS --}}
        @if($homeData)
        @foreach ($homeData->name_reviews as $i => $name)
        <div class="testimonial-data d-none" data-text="{!! $homeData->p_reviews[$i] ?? '' !!}"
            data-name="{{ $homeData->name_reviews[$i] ?? '' }}" data-title="{{ $homeData->job_reviews[$i] ?? '' }}"
            data-img="{{ $homeData->image_reviews[$i] ?? asset('assets/images/person.png') }}"
            data-stars="{{ $homeData->rating_reviews[$i] ?? 5 }}">
        </div>
        @endforeach
        @endif

        <div class="testimonial-box mx-auto text-center p-5">

            <!-- Quote icon -->
            <div class="quote-icon mb-3">
                <i class="fa-solid fa-quote-left" style="font-size: 2.2rem;"></i>
            </div>

            <!-- Review text -->
            <p class="review-text fw-semibold" id="reviewText"></p>

            <!-- Stars -->
            <div class="stars my-3" id="starsContainer"></div>

            <!-- Navigation + images -->
            <div class="d-flex justify-content-center align-items-center gap-3 mt-4">

                <!-- Prev Button -->
                <button class="nav-btn" id="prevBtn">
                    <i class="fa-solid fa-angle-left"></i>
                </button>

                <!-- Left image (static for design) -->
                <img src="{{ asset('assets/images/person.png') }}" class="reviewer-img small-img" alt="">

                <!-- Active reviewer -->
                <div class="active-reviewer text-center">
                    <img src="{{ asset('assets/images/person.png') }}" class="reviewer-img active-img" id="activeImg"
                        alt="">
                    <h6 class="mt-2 fw-bold" id="activeName"></h6>
                    <p class="text-muted m-0" id="activeTitle"></p>
                </div>

                <!-- Right image (static for design) -->
                <img src="{{ asset('assets/images/person.png') }}" class="reviewer-img small-img" alt="">

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
                {{ $homeData && !empty($homeData->p_contact)
                        ? '" ' . $homeData->p_contact . '."'
                        : 'Connect with us anytime through our social channels or contact numbers.
        We’re here to answer your questions and help you start your next project with confidence.'
                    }}

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
                        <div class="mail-content text-light mx-md-3 mx-2">
                            <h5>
                                {{ $homeData && !empty($homeData->email)
                        ? $homeData->email
                        : 'Customersupport@mcodekw.com'
                    }}

                            </h5>
                        </div>
                    </div>
                    <div class=" col-md-4 phone d-flex  border-start border-white  ">
                        <div class="phone-icon">
                            <i class="fa-solid fa-phone text-light"></i>
                        </div>
                        <div class="phone-content text-light mx-md-3 mx-2">
                            <h5>{{ $homeData && !empty($homeData->phone_number)
                        ? $homeData->phone_number
                        : '+2010158799'
                    }}</h5>
                        </div>
                    </div>
                    <div class="col-md-4 links justify-content-center">
                        <h5 class="text-light me-2">Follow Us</h5>
                        <div class="links-icons d-flex   flex-wrap">
                            <div class="facebook-icon ms-md-3 ms-1">
                                <a href="{{ !empty($homeData->facebook_link) ? url($homeData->facebook_link) : '#' }}">
                                    <i class="fa-brands fa-facebook text-light"></i>
                                </a>
                            </div>
                            <div class="insta-icon ms-md-3 ms-1">
                                <a
                                    href="{{ !empty($homeData->instagram_link) ? url($homeData->instagram_link) : '#' }}">
                                    <i class="fa-brands fa-instagram text-light"></i>
                                </a>
                            </div>
                            <div class="linkedin-icon ms-md-3 ms-1">
                                <a href="{{ !empty($homeData->linkedin_link) ? url($homeData->linkedin_link) : '#' }}">
                                    <i class="fa-brands fa-linkedin text-light"></i></a>
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
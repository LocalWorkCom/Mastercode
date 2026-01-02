@extends('layouts.app')

@section('title', 'About Us')
<?php

use App\Models\AboutUsPage;

$aboutUsData = AboutUsPage::first();
?>
@section('content')
<section class="hero-inner">
    <!-- Navbar -->
    @include('includes.nav')
    <!-- content -->
    <div class="container d-flex flex-wrap  align-items-center justify-content-center ">
        <h2 class="text-center text-light">
            "Master Code is a software solutions company
            delivering tailored apps, ERP systems, cloud
            solutions, and AI tools designed to meet business
            needs across industries."
        </h2>
    </div>
</section>
<section class="about-section">
    <div class="container">
        <div class="row d-flex flex-wrap  justify-content-center align-items-center">
            <div class="col-md-6">
            
                <h4 class="text-blue fw-bold mb-md-4 "><img src="./assets/images/mastercode-icon.png" alt="">
                    About us </h4>

                <h4 class="text-blue fw-bold mb-md-3 ">
                    {{ $aboutUsData && !empty($aboutUsData->main_hero)
                        ? $aboutUsData->main_hero
                        : 'We deal With The Aspects Of Professional IT Services'
                    }}

                </h4>
                <h4 class="text-muted fw-bold lh-base">
                    {{ $aboutUsData && !empty($aboutUsData->p_hero)
                        ? '" ' . $aboutUsData->p_hero . '."'
                        : 'Master Code was founded with a vision to empower businesses
                    through smart,
                    scalable software. What started as a small team passionate
                    about technology has grown into a full-fledged software studio delivering high-impact solutions.'
                    }}

                </h4>
            </div>
            <div class="col-md-6">
                <div class="video-box position-relative mx-auto my-5">
                    <img src="{{ $aboutUsData?->image_hero ?: asset('assets/images/aboutus-img1.jpg') }}" class="img-fluid main-img">

                    <!-- Play icon -->
                    <div class="play-btn">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <!-- Frame layers -->
                    <span class="frame frame-blue"></span>
                    <span class="frame frame-green"></span>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Mission Section -->
<section class="mission-section mission-section-about position-relative my-3">
    <h3 class="text-center text-white mb-5">“LET’S BUILD YOUR NEXT BIG PROJECT TOGETHER“</h3>
</section>
<div class="container position-relative ">
    <div class="row mission-cards justify-content-center">
        <div class="col-md-4">
            <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
                <div class="d-flex flex-wrap  justify-content-center ">
                    <img src="{{ $aboutUsData && !empty($aboutUsData->image_mission[0]) ? $aboutUsData?->image_mission[0] : asset('assets/images/mission-icon.png') }}" width="50px" alt="mission">
                </div>
                <h5>
                    {{ $aboutUsData && !empty($aboutUsData->main_mission[0])
                        ? '" ' . $aboutUsData->main_mission[0] . '."'
                        : 'our mission'
                    }}
                </h5>
                <p>
                    {{ $aboutUsData && !empty($aboutUsData->p_mission[0])
                        ? '“' . $aboutUsData->p_mission[0] . '”'
                        : '“To transform businesses with scalable, secure, and innovative technology.”'
                    }}

                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
                <div class="d-flex flex-wrap  justify-content-center ">
                    <img src="{{ $aboutUsData && !empty($aboutUsData->image_mission[1]) ? $aboutUsData?->image_mission[1] : asset('assets/images/values-icon.png') }}" width="50px" alt="vision">
                </div>
                <h5>
                    {{ $aboutUsData && !empty($aboutUsData->main_mission[1])
                        ? '" ' . $aboutUsData->main_mission[1] . '."'
                        : 'our vision'
                    }}
                </h5>
                <p>
                    {{ $aboutUsData && !empty($aboutUsData->p_mission[1])
                        ? '“' . $aboutUsData->p_mission[1] . '”'
                        : '“To be a trusted tech partner for businesses worldwide.”'
                    }}
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow p-4" style="transform: translateY(-55%);">
                <div class="d-flex flex-wrap  justify-content-center ">
                    <img src="{{ $aboutUsData && !empty($aboutUsData->image_mission[2]) ? $aboutUsData?->image_mission[2] : asset('assets/images/values-icon.png') }}" width="50px" alt="values">
                </div>
                <h5>
                    {{ $aboutUsData && !empty($aboutUsData->main_mission[2])
                        ? '" ' . $aboutUsData->main_mission[2] . '."'
                        : 'our values'
                    }}
                </h5>
                <p>
                    {{ $aboutUsData && !empty($aboutUsData->p_mission[2])
                        ? '“' . $aboutUsData->p_mission[2] . '”'
                        : '“Innovation | Integrity | Excellence | Collaboration”'
                    }}
                </p>
            </div>
        </div>
    </div>
</div>
<!-- timeline for desktop view  -->
<section class="timeline-section d-none d-md-block">
    <div class="box-title text-center mb-md-5 mb-1 py-md-3 py-1">
        <img src="././assets/images/mastercode-icon.png" alt="" class="d-block mx-auto mb-2">
        <h3 class="fw-bold text-blue">Our Story & Journey Timeline</h3>
    </div>

    <div class="container position-relative my-5">
        <div class="timeline-line"></div>

        <div class="timeline-items position-relative">
            <!-- item 1 -->
            <div class="timeline-item pos-1">
                <div class="year-box">
                    {{ $aboutUsData && !empty($aboutUsData->year_story[0])
                        ? $aboutUsData->year_story[0]
                        : 2022
                    }}
                </div>
                <div class="connector down">
                    <div class="icon-circle"><i class="fa-solid fa-location-dot"></i></div>
                </div>
                <div class="info-box bottom">
                    {{ $aboutUsData && !empty($aboutUsData->p_story[0])
                        ? '“' . $aboutUsData->p_story[0] . '”'
                        : 'We launched Master Code with our first product – a simple app to streamline local businesses'
                    }}
                </div>
            </div>

            <!-- item 2 -->
            <div class="timeline-item pos-2">
                <div class="year-box">{{ $aboutUsData && !empty($aboutUsData->year_story[1])
                        ? $aboutUsData->year_story[1]
                        : 2023
                    }}</div>
                <div class="connector up">
                    <div class="icon-circle"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                </div>
                <div class="info-box top">
                    {{ $aboutUsData && !empty($aboutUsData->p_story[1])
                        ? '“' . $aboutUsData->p_story[1] . '”'
                        : 'Expanded our services to include ERP systems and cloud solutions'
                    }}
                </div>
            </div>

            <!-- item 3 -->
            <div class="timeline-item pos-3">
                <div class="year-box">{{ $aboutUsData && !empty($aboutUsData->year_story[2])
                        ? $aboutUsData->year_story[2]
                        : 2024
                    }}</div>
                <div class="connector down">
                    <div class="icon-circle"><i class="fa-solid fa-building-columns"></i></div>
                </div>
                <div class="info-box bottom">
                    {{ $aboutUsData && !empty($aboutUsData->p_story[2])
                        ? '“' . $aboutUsData->p_story[2] . '”'
                        : 'Delivered our first large-scale ERP project for a restaurant business, integrating POS, HR, and inventory modules'
                    }}

                </div>
            </div>

            <!-- item 4 -->
            <div class="timeline-item pos-4">
                <div class="year-box">{{ $aboutUsData && !empty($aboutUsData->year_story[3])
                        ? $aboutUsData->year_story[3]
                        : 2025
                    }}</div>
                <div class="connector up">
                    <div class="icon-circle"><i class="fa-solid fa-brain"></i></div>
                </div>
                <div class="info-box top">
                    {{ $aboutUsData && !empty($aboutUsData->p_story[3])
                        ? '“' . $aboutUsData->p_story[3] . '”'
                        : 'Introduced AI-powered tools and machine-learning solutions in our portfolio, enabling predictive analytics'
                    }}

                </div>
            </div>
        </div>
    </div>
</section>
<!-- timeline for mobile view  -->
<section class="timeline-mobile d-block d-md-none py-4">
    <div class="box-title text-center mb-4">
        <img src="././assets/images/mastercode-icon.png" alt="" class="d-block mx-auto mb-2">
        <h3 class="fw-bold text-blue">Our Story & Journey Timeline</h3>
    </div>

    <div class="container">

        <div class="mobile-card">
            <h4 class="year text-green fw-bold text-center">{{ $aboutUsData && !empty($aboutUsData->year_story[0])
                        ? $aboutUsData->year_story[0]
                        : 2022
                    }}</h4>
            <p>{{ $aboutUsData && !empty($aboutUsData->p_story[0])
                        ? '“' . $aboutUsData->p_story[0] . '”'
                        : 'We launched Master Code with our first product – a simple app to streamline local businesses'
                    }}</p>
        </div>

        <div class="mobile-card">
            <h4 class="year text-green fw-bold text-center">{{ $aboutUsData && !empty($aboutUsData->year_story[1])
                        ? $aboutUsData->year_story[1]
                        : 2023
                    }}</h4>
            <p>{{ $aboutUsData && !empty($aboutUsData->p_story[1])
                        ? '“' . $aboutUsData->p_story[1] . '”'
                        : 'Expanded our services to include ERP systems and cloud solutions'
                    }}</p>
        </div>

        <div class="mobile-card">
            <h4 class="year text-green fw-bold text-center">{{ $aboutUsData && !empty($aboutUsData->year_story[2])
                        ? $aboutUsData->year_story[2]
                        : 2024
                    }}</h4>
            <p>{{ $aboutUsData && !empty($aboutUsData->p_story[2])
                        ? '“' . $aboutUsData->p_story[2] . '”'
                        : 'Delivered our first large-scale ERP project for a restaurant business, integrating POS, HR, and inventory modules'
                    }}</p>
        </div>

        <div class="mobile-card">
            <h4 class="year text-green fw-bold text-center">{{ $aboutUsData && !empty($aboutUsData->year_story[3])
                        ? $aboutUsData->year_story[3]
                        : 2025
                    }}</h4>
            <p>{{ $aboutUsData && !empty($aboutUsData->p_story[3])
                        ? '“' . $aboutUsData->p_story[3] . '”'
                        : 'Introduced AI-powered tools and machine-learning solutions in our portfolio, enabling predictive analytics'
                    }}</p>
        </div>

    </div>
</section>


<section class="qoute mb-md-5 mb-2">
    <div class="info text-center p-5">
        <img src="./assets/images/small-logo.png" alt="" class="mb-2">
        <h3 class="text-green fw-bold">“ LET’S BUILD YOUR NEXT BIG PROJECT TOGETHER “</h3>
    </div>
</section>
<section class="why-choose-us my-md-5 my-2">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="d-flex flex-wrap  justify-content-center border-start ">
                    <div class="icon">
                        <img src="{{ $aboutUsData && !empty($aboutUsData->image_features[0]) ? $aboutUsData?->image_features[0] : asset('assets/images/innovation.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h2 class="fw-bold">
                            {{ $aboutUsData && !empty($aboutUsData->main_features[0])
                        ? $aboutUsData->main_features[0]
                        : 'Innovation'
                    }}
                        </h2>
                        <h4 class="text-muted">
                            {{ $aboutUsData && !empty($aboutUsData->p_features[0])
                        ? '“' . $aboutUsData->p_features[0] . '”'
                        : 'We constantly explore new technologies (AI, cloud, mobile) to build
                            future-ready solutions'
                    }}

                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-wrap  justify-content-center border-start ">
                    <div class="icon">
                        <img src="{{ $aboutUsData && !empty($aboutUsData->image_features[1]) ? $aboutUsData?->image_features[1] : asset('assets/images/integrity.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h2 class="fw-bold">
                            {{ $aboutUsData && !empty($aboutUsData->main_features[1])
                        ? $aboutUsData->main_features[1]
                        : 'Integrity'
                    }}
                        </h2>
                        <h4 class="text-muted">
                            {{ $aboutUsData && !empty($aboutUsData->p_features[1])
                        ? '“' . $aboutUsData->p_features[1] . '”'
                        : 'Transparency and honesty are at the heart of how we work with our
                            clients'
                    }}

                        </h4>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="d-flex flex-wrap  justify-content-center  ">
                    <div class="icon">
                        <img src="{{ $aboutUsData && !empty($aboutUsData->image_features[2]) ? $aboutUsData?->image_features[2] : asset('/assets/images/customer.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h2 class="fw-bold">
                            {{ $aboutUsData && !empty($aboutUsData->main_features[2])
                        ? $aboutUsData->main_features[2]
                        : 'Customer-Centricity'
                    }}
                        </h2>
                        <h4 class="text-muted">
                            {{ $aboutUsData && !empty($aboutUsData->p_features[2])
                        ? '“' . $aboutUsData->p_features[2] . '”'
                        : 'Transparency and honesty are at the heart of how we work with our
                            clients'
                    }}

                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex flex-wrap  justify-content-center">
            <div class="col-md-4">
                <div class="d-flex flex-wrap  justify-content-center border-start ">
                    <div class="icon">
                        <img src="{{ $aboutUsData && !empty($aboutUsData->image_features[3]) ? $aboutUsData?->image_features[3] : asset('assets/images/collaboration.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h2 class="fw-bold">
                            {{ $aboutUsData && !empty($aboutUsData->main_features[3])
                        ? $aboutUsData->main_features[3]
                        : 'Collaboration'
                    }}
                        </h2>
                        <h4 class="text-muted">
                            {{ $aboutUsData && !empty($aboutUsData->p_features[3])
                        ? '“' . $aboutUsData->p_features[3] . '”'
                        : 'Great software comes from strong teamwork — between us and with you'
                    }}

                        </h4>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="d-flex flex-wrap  justify-content-center  ">
                    <div class="icon">
                        <img src="{{ $aboutUsData && !empty($aboutUsData->image_features[4]) ? $aboutUsData?->image_features[4] : asset('assets/images/excellence.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h2 class="fw-bold">
                            {{ $aboutUsData && !empty($aboutUsData->main_features[4])
                        ? $aboutUsData->main_features[4]
                        : 'Excellence'
                    }}
                        </h2>
                        <h4 class="text-muted">
                            {{ $aboutUsData && !empty($aboutUsData->p_features[4])
                        ? '“' . $aboutUsData->p_features[4] . '”'
                        : 'We don’t settle for “good enough”; we aim for flawless performance,
                            security, and scalability'
                    }}

                        </h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="career-section my-md-5">
    <div class="container">
        <div class="box-title text-center mb-md-5">
            <img src="././assets/images/mastercode-icon.png" alt="" class="d-block mx-auto mb-2">
            <h3 class="fw-bold text-blue">Career Highlights </h3>
        </div>

        <div class="image-grid-container">
            <!-- العمود الأول -   -->
            <div class="col-large">
                <div class="large-image-container image-container">
                    <img src="./assets/images/img1.jpg" alt="Mobile App Development" class="grid-image">
                    <div class="image-overlay">
                        <h3 class="image-title">Full ERP system for SMEs</h3>
                    </div>
                </div>
            </div>

            <!-- العمود الثاني -  -->
            <div class="col-medium">
                <div class="medium-image-container image-container">
                    <img src="./assets/images/img2.jpg" class="grid-image">
                    <div class="image-overlay">
                        <h3 class="image-title"> mobile app (iOS/Android)</h3>
                    </div>
                </div>

                <div class="medium-image-container image-container">
                    <img src="./assets/images/img3.jpg" alt="QA Team" class="grid-image">
                    <div class="image-overlay">
                        <h3 class="image-title">restaurant management</h3>
                    </div>
                </div>
            </div>

            <!-- العمود الثالث -   -->
            <div class="col-small">
                <div class="small-image-container image-container">
                    <img src="./assets/images/img4.jpg" class="grid-image">
                    <div class="image-overlay">

                        <h3 class="image-title">Cloud migration with lower costs</h3>
                    </div>
                </div>

                <div class="small-image-container image-container">
                    <img src="./assets/images/img5.jpg" class="grid-image">
                    <div class="image-overlay">

                        <h3 class="image-title">QA team ensuring the best quality</h3>
                    </div>
                </div>

                <div class="small-image-container image-container">
                    <img src="./assets/images/img6.jpg" class="grid-image">
                    <div class="image-overlay">

                        <h3 class="image-title">Ongoing support & maintenance</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="team-section py-5">
    <div class="box-title text-center mb-md-5">
        <img src="././assets/images/mastercode-icon.png" alt="" class="d-block mx-auto mb-2">
        <h3 class="fw-bold text-blue">Our Team </h3>
    </div>

    <!-- Slider -->
    <div class="team-wrapper" id="teamSlider">

        <div class="team-item side-cropped"
             data-name="{{ $aboutUsData->name_member[0] ?? '-----' }}"
             data-job="{{ $aboutUsData->job_member[0] ?? '' }}">
            <img src="{{ $aboutUsData && !empty($aboutUsData->image_member[0]) ? $aboutUsData?->image_member[0] : asset('assets/images/women.jpg') }}" alt="">
        </div>

        <div class="team-item"
             data-name="{{ $aboutUsData->name_member[1] ?? '-----' }}"
             data-job="{{ $aboutUsData->job_member[1] ?? '' }}">
            <img src="{{ $aboutUsData && !empty($aboutUsData->image_member[1]) ? $aboutUsData?->image_member[1] : asset('assets/images/women1.jpg') }}" alt="">
        </div>

        <div class="team-item active"
             data-name="{{ $aboutUsData->name_member[2] ?? '-----' }}"
             data-job="{{ $aboutUsData->job_member[2] ?? '' }}">
            <img src="{{ $aboutUsData && !empty($aboutUsData->image_member[2]) ? $aboutUsData?->image_member[2] : asset('assets/images/man.jpg') }}" alt="">
        </div>

        <div class="team-item"
             data-name="{{ $aboutUsData->name_member[3] ?? '-----' }}"
             data-job="{{ $aboutUsData->job_member[3] ?? '' }}">
            <img src="{{ $aboutUsData && !empty($aboutUsData->image_member[3]) ? $aboutUsData?->image_member[3] : asset('assets/images/women1.jpg') }}" alt="">
        </div>

        <div class="team-item side-cropped"
             data-name="{{ $aboutUsData->name_member[4] ?? '-----' }}"
             data-job="{{ $aboutUsData->job_member[4] ?? '' }}">
            <img src="{{ $aboutUsData && !empty($aboutUsData->image_member[4]) ? $aboutUsData?->image_member[4] : asset('assets/images/women.jpg') }}" alt="">
        </div>

    </div>

    <div class="team-arrows">
        <button class="team-arrow-btn" onclick="moveSlide(-1)">❮</button>
<div class="active-name" id="activeName">
    <h2 class="fw-bold">
        {{ $aboutUsData->name_member[2] ?? '-----' }}
    </h2>
    <h4 class="text-muted fw-bold">
        {{ $aboutUsData->job_member[2] ?? '' }}
    </h4>
</div>


        <button class="team-arrow-btn" onclick="moveSlide(1)">❯</button>
    </div>
</section>



<!-- footer  -->
@include('includes.footer')
<script>
    function updateSlider() {
        const items = document.querySelectorAll(".team-item");

        items.forEach(item => item.classList.remove("active"));

        const middleIndex = Math.floor(items.length / 2);
        items[middleIndex].classList.add("active");

        updateActiveName();
    }

    function moveSlide(step) {
        const slider = document.getElementById("teamSlider");
        const items = document.querySelectorAll(".team-item");

        if (step === 1) {
            slider.appendChild(items[0]);
        } else {
            slider.insertBefore(items[items.length - 1], items[0]);
        }

        updateSlider();
    }

    function updateActiveName() {
        const activeItem = document.querySelector(".team-item.active");

        const name = activeItem.getAttribute("data-name");
        const job  = activeItem.getAttribute("data-job");

        document.querySelector("#activeName h2").innerText = name && name.trim() !== '' ? name : '-----';
        document.querySelector("#activeName h4").innerText = job && job.trim() !== '' ? job : '';
    }

    document.addEventListener("DOMContentLoaded", updateSlider);
</script>



@endsection
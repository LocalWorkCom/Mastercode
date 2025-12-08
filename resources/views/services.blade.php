@extends('layouts.app')

@section('title', 'Services')
<?php

use App\Models\ServicesPage;

$servicesData = ServicesPage::first();
?>
@section('content')

<section class="hero-inner">
    @include('includes.nav')
    <!-- Hero content -->
    <div class="container d-flex align-items-center justify-content-center ">
        <h2 class="text-center text-light">
            {{ $servicesData && !empty($servicesData->p_hero)
                    ? '“ ' . $servicesData->p_hero . '.”'
                    : '“ We provide end-to-end technology solutions designed to help businesses grow, streamline operations, and
                stay ahead in a fast-moving digital world. From custom software and ERP systems to cloud services, AI
                integrations, and modern UX design, our team builds scalable,
                high-quality products tailored to every business need—backed by reliable maintenance and ongoing support.”'
                }}
        </h2>
    </div>
</section>
<!-- services section  -->
<section class="services">
    <div class="container">
        <div class="row align-items-center my-md-5 mb-1">
            <div class="col-md-6">
                @if($servicesData && !empty($servicesData->p_content[0]))
                <div class="item d-flex align-items-start gap-2 mb-md-5 mb-2">
                    <i class="fa-solid fa-circle-check text-success mt-1 fs-5"></i>
                    <h4 class="text-blue fw-bold mb-0 lh-base">
                        {{ $servicesData->p_content[0] }}
                    </h4>
                </div>
                @else
                <div class="item d-flex align-items-start gap-2 mb-md-5 mb-2">
                    <i class="fa-solid fa-circle-check text-success mt-1 fs-5"></i>
                    <h4 class="text-blue fw-bold mb-0 lh-base">
                        Digitally replaces printed order tickets in the kitchen.
                    </h4>
                </div>
                <div class="item d-flex align-items-start gap-2 mb-md-5 mb-2">
                    <i class="fa-solid fa-circle-check text-success mt-1 fs-5"></i>
                    <h4 class="text-blue fw-bold mb-0 lh-base">
                        The cashier or point of sale ( POS ) system is the operational care taking and payment processing.
                    </h4>
                </div>
                <div class="item d-flex align-items-start gap-2 mb-md-5 mb-2">
                    <i class="fa-solid fa-circle-check text-success mt-1 fs-5"></i>
                    <h4 class="text-blue fw-bold mb-0 lh-base">
                        A mobile - based - solution enabling waitstaff to manage orders , tables , customer requests efficiently.
                    </h4>
                </div>
                @endif
            </div>

            <div class="col-md-6 d-flex justify-content-end">
                <img src="{{ $servicesData?->image_content[0] ?: asset('assets/images/services-img1.png') }}" alt="" class="img-fluid h-100 w-100">
            </div>
        </div>
        <div class="terms-page-img">


            <div class="row align-items-center my-md-5 mb-1">
                <div class="col-md-6 mt-md-5 mt-0">
                    <img src="{{ $servicesData?->image_content[1] ?: asset('assets/images/services-img2.png') }}" alt="" class="img-fluid h-100 w-100">
                </div>
                <div class="col-md-6 mt-md-5 mt-0">
                    <h4 class="text-blue lh-base">
                        {{ $servicesData && !empty($servicesData->p_content[1])
                    ? $servicesData->p_content[0]
                    : 'A well-implemented ERP system eliminates data silos, enhances
                        collaboration, improves accuracy, and empowers
                        management with real-time insights for strategic decision-making.
                        Our ERP solution is specifically tailored for restaurants, hospitality chains, and related
                        industries,
                        with modular scalability to support a variety of business models and operational complexities.'
                }}
                    </h4>
                </div>
            </div>
        </div>

        <div class="row align-items-center my-md-5 mb-1">
            <div class="col-md-8 mt-md-5 mt-0">
                @if($servicesData && !empty($servicesData->p_content[2]))
                <h3 class="text-blue lh-base fw-bold">
                    {{ $servicesData->p_content[2] }}
                </h3>
                @else
                <h3 class="text-blue lh-base fw-bold">Centralizes all restaurant operations under one management layer:
                </h3>
                <ul>
                    <li class="mb-md-4 mb-1 text-blue fw-bold fs-4">menu configuration , pricing and recipe linking
                    </li>
                    <li class="mb-md-4 mb-1 text-blue fw-bold fs-4">table layout management</li>
                    <li class="mb-md-4 mb-1 text-blue fw-bold fs-4">coordination between waiter ,kitchen and pos systems
                    </li>
                    <li class="mb-md-4 mb-1 text-blue fw-bold fs-4">real - time monitoring of branch - level performance
                    </li>
                </ul>
                @endif
            </div>
            <div class="col-md-4 mt-md-5 mt-0">
                <img src="{{ $servicesData?->image_content[2] ?: asset('assets/images/services-img3.png') }}" alt="" class="img-fluid h-100 w-100">
            </div>
        </div>
    </div>
</section>
<!-- footer -->
@include('includes.footer')

@endsection
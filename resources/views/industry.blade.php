@extends('layouts.app')

@section('title', 'Industry')

<?php

use App\Models\industryPage;

$industryData = industryPage::latest()->first();
?>
@section('content')
<div class="terms-page-img">
    <section class="hero-inner">
        @include('includes.nav')
        <!-- content -->
        <div class="container d-flex align-items-center justify-content-center ">
            <h2 class="text-center text-light">
                {{ $industryData && !empty($industryData->p_hero)
                    ? '"' . $industryData->p_hero . '."'
                    : 'We serve diverse industries with flexible, scalable solutions designed to streamline operations, improve
                    efficiency,
                    and adapt to each sector’s unique needs — from hospitality and retail to healthcare and service
                    businesses.'
                }}

            </h2>
        </div>
    </section>
    <section class="industry-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title custom-title">
                        <h5 class="text-green fw-bold">most popular</h5>
                        <h3 class="fw-bold mb-4">industries</h3>
                        <h4 class="text-muted fw-bold mb-md-4">
                            {{ $industryData && !empty($industryData->title_content)
                    ? '"' . $industryData->title_content . '."'
                    : '"We offer industry-specific, scalable tools that streamline processes,
                            boost accuracy, and adapt to each sector’s needs for efficient, sustainable growth."'
                }}

                        </h4>
                        <div class="image-wrapper">
                            <img src="{{ $industryData && !empty($industryData->image_content) ? $industryData?->image_content : asset('assets/images/industry-img.jpg') }}" alt="" class="w-100 form-img">
                            <div class="overlay"></div>
                            <div class="img-content">
                                <h3 class="text-white fw-bold">
                                    {{ $industryData && !empty($industryData->p_content)
                    ? '"' . $industryData->p_content . '."'
                    : '"Interested in our services? Reach out to us
                                    today and let\'s discuss how we can support your business."'
                }}

                                </h3>
                                <a class="btn btn-green" href="{{route('book-session')}}">
                                    {{ $industryData && !empty($industryData->button_content)
                    ? $industryData->button_content
                    : 'book a session'
                }}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 p-md-5  p-0">
                    <div class="card-info w-100 pt-md-5 pt-0 mb-md-3 mb-0 p-2 ">
                        <i class="fa-solid fa-store text-blue mb-md-3 mb-0"></i>
                        <h4 class="text-green fw-bold mb-md-3 mb-0">SMEs</h4>
                        <h5 class="text-muted fw-bold "> "We support SMEs with flexible, cost-effective solutions that
                            help them grow and operate more efficiently."</h5>
                    </div>
                    <div class="card-info w-100 pt-md-5 pt-0 mb-md-3 mb-0 p-2">
                        <i class="fa-solid fa-utensils text-blue mb-md-3 mb-0"></i>
                        <h4 class="text-green fw-bold mb-md-3 mb-0">Restaurant</h4>
                        <h5 class="text-muted fw-bold "> "We help restaurants streamline operations, improve service,
                            and enhance overall efficiency."</h5>
                    </div>
                    <div class="card-info w-100 pt-md-5 pt-0 mb-md-3 mb-0 p-2">
                        <i class="fa-solid fa-person-booth text-blue mb-md-3 mb-0"></i>
                        <h4 class="text-green fw-bold mb-md-3 mb-0">Kiosks</h4>
                        <h5 class="text-muted fw-bold "> "We support SMEs with flexible, cost-effective solutions that
                            help them grow and operate more efficiently."</h5>
                    </div>
                </div>
                <div class="col-md-4 p-md-5  p-0">
                    <div class="card-info w-100 pt-md-5 pt-0 mb-md-3 mb-0 p-2 ">
                        <i class="fa-solid fa-people-line text-blue mb-md-3 mb-0"></i>
                        <h4 class="text-green fw-bold mb-md-3 mb-0">Startups</h4>
                        <h5 class="text-muted fw-bold ">"We empower startups with agile, scalable tools that accelerate
                            growth and support fast, efficient operations."</h5>
                    </div>
                    <div class="card-info w-100 pt-md-5 pt-0 mb-md-3 mb-0 p-2">
                        <i class="fa-solid fa-mug-saucer text-blue mb-md-3 mb-0"></i>
                        <h4 class="text-green fw-bold mb-md-3 mb-0">Cafe</h4>
                        <h5 class="text-muted fw-bold "> "We support cafes with tools that simplify operations, boost
                            efficiency, and enhance customer experience."</h5>
                    </div>
                    <div class="card-info w-100 pt-md-5 pt-0 mb-md-3 mb-0 p-2">
                        <i class="fa-brands fa-dropbox text-blue mb-md-3 mb-0"></i>
                        <h4 class="text-green fw-bold mb-md-3 mb-0">Selling points</h4>
                        <h5 class="text-muted fw-bold "> "We highlight key selling points that attract customers, boost
                            sales, and differentiate your business."</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('includes.footer')

@endsection
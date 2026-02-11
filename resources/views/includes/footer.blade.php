<?php

use App\Models\HomePage;

 $footerData = HomePage::first(); ?>
<footer>
    <div class="row">
        <div class="col-md-6 col-12 border-start border-white p-4">
            <img src="{{ asset('assets/images/footer-logo.png') }}" alt="" class="mb-md-5 mb-0 px-md-5 px-0">
            <h4 class="text-light px-md-5 px-0">
                {{ $footerData && !empty($footerData->p_footer)
                        ? '" ' . $footerData->p_footer . '."'
                        : '"Master Code is a software solutions company delivering tailored apps, ERP systems, cloud solutions, and AI tools designed to meet business needs across industries."'
                    }}
                
            </h4>
            <div class="links-icons d-flex pt-4 flex-wrap px-md-5 px-0">
                <div class="facebook-icon ms-4"><i class="fa-brands fa-facebook text-light fs-3"></i></div>
                <div class="insta-icon ms-4"><i class="fa-brands fa-instagram text-light fs-3"></i></div>
                <div class="linkedin-icon ms-4"><i class="fa-brands fa-linkedin text-light fs-3"></i></div>
            </div>
        </div>
        <div class="col-md-3 border-start border-white p-4">
            <h4 class="text-uppercase text-light text-center mb-md-4 mb-3">Quick Links</h4>
            <div class="d-flex flex-wrap">
                <div>
                    <ul class="list-unstyled mb-0 text-light">
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ $footerData && !empty($footerData->about_link) ? url($footerData->about_link) : route('about') }}">About</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ $footerData && !empty($footerData->services_link) ? url($footerData->services_link) : route('services') }}">Services</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route(name: 'home') }}">Portfolio</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ $footerData && !empty($footerData->contact_link) ? url($footerData->contact_link) : route('contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <ul class="list-unstyled mb-0 text-light">
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ $footerData && !empty($footerData->plolicy_link) ? url($footerData->plolicy_link) : route('term-policy') }}">Privacy & Terms</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('industry') }}">Industries</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('book-session') }}">Book a Session</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12 p-4">
            <h4 class="text-uppercase text-light mb-md-4 mb-3">Support</h4>
            <ul class="list-unstyled mb-0 text-light">
                <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="#">Help center</a></li>
                <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ $footerData && !empty($footerData->contact_link) ? url($footerData->contact_link) : route('contact-us') }}">Contact us</a></li>
                <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="#">FAQ</a></li>
            </ul>
        </div>
    </div>
        <div class="text-center">
        <h5 class="mb-0 text-light fw-bold pt-3 pt-md-5">
            ©copyrights @mastercode.com
        </h5>
    </div>

</footer>
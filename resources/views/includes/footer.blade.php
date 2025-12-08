<footer>
    <div class="row">
        <div class="col-md-4 col-12 border-start border-white p-5">
            <img src="{{ asset('assets/images/footer-logo.png') }}" alt="" class="mb-md-5 mb-0">
            <h4 class="text-light">"Master Code is a software solutions company delivering tailored apps, ERP systems, cloud solutions, and AI tools designed to meet business needs across industries."</h4>
            <div class="links-icons d-flex pt-4 flex-wrap">
                <div class="facebook-icon ms-4"><i class="fa-brands fa-facebook text-light fs-3"></i></div>
                <div class="insta-icon ms-4"><i class="fa-brands fa-instagram text-light fs-3"></i></div>
                <div class="linkedin-icon ms-4"><i class="fa-brands fa-linkedin text-light fs-3"></i></div>
            </div>
        </div>
        <div class="col-md-4 border-start border-white p-4">
            <h4 class="text-uppercase text-light text-center mb-md-4 mb-3">Quick Links</h4>
            <div class="row">
                <div class="col-md-6 col-12">
                    <ul class="list-unstyled mb-0 text-light">
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('about') }}">About</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('services') }}">Services</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route(name: 'home') }}">Portfolio</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-12">
                    <ul class="list-unstyled mb-0 text-light">
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('term-policy') }}">Privacy & Terms</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('industry') }}">Industries</a></li>
                        <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('book-session') }}">Book a Session</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 p-5">
            <h4 class="text-uppercase text-light mb-md-4 mb-3">Support</h4>
            <ul class="list-unstyled mb-0 text-light">
                <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="#">Help center</a></li>
                <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="{{ route('contact-us') }}">Contact us</a></li>
                <li class="mb-md-4 mb-0"><a class="text-light text-decoration-none fs-4" href="#">FAQ</a></li>
            </ul>
        </div>
    </div>
</footer>
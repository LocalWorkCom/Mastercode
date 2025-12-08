<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid nav-grid">
        <a class="navbar-brand d-none d-lg-block" href="#">
            <img src="{{ asset('assets/images/logo.png') }}" alt="MasterCode Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse nav-links" id="navbarNav">
            <ul class="navbar-nav justify-content-center w-100">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About
                        Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}"
                        href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('industries') ? 'active' : '' }}"
                        href="{{ route('industry') }}">Industries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}"
                        href="{{ route('contact-us') }}">Contact Us</a>
                </li>
            </ul>

        </div>
        <a class="btn btn-session " href="{{route('book-session')}}">Book A Session</a>
    </div>
</nav>

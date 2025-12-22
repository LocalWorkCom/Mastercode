<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mastercode Company')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Naskh+Arabic:wght@400..700&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('assets/images/info-logo.png')}}"></head>

<body>

    {{-- Include Navbar --}}
    {{-- @include('includes.nav') --}}

    {{-- Content --}}
    {{-- <div class="main-content"> --}}
        @yield('content')
    {{-- </div> --}}

    {{-- Include Footer --}}
    {{-- @include('includes.footer') --}}

    <script src="{{ asset('scripts/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

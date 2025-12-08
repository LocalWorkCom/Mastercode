<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles/styledash.css">
</head>

<body>

    <div class="layout">

        <!-- Sidebar -->
        @include('includes.sidebar')

        <!-- Main area -->
        <main class="main">

            <!-- Top bar -->
            <div class="top-nav">
                <input type="text" placeholder="Search">
                <div class="user">
                    <img src="user.png" class="avatar">
                    <span>admin</span>
                </div>
            </div>

            <!-- Page Title -->
            <div class="page-header">
                <p class="breadcrumb">facility info</p>
                <h2>Page Content</h2>
                <p class="subtitle">Manage all content displayed on the home page</p>
            </div>

            <!-- Select -->
            <div class="selector">
                <select id="pageRedirectSelect">
                    <option value="{{ route('pageContent') }}" @selected(Route::currentRouteName()=='pageContent' )>
                        Page
                    </option>
                    <option value="{{ route('dashboard-contact-us') }}" @selected(Route::currentRouteName()=='dashboard-contact-us' )>
                        Contact us page
                    </option>
                    <option value="{{ route('dashboard-policy') }}" @selected(Route::currentRouteName()=='dashboard-policy' )>
                        Policy page
                    </option>
                    <option value="{{ route('dashboard-services') }}" @selected(Route::currentRouteName()=='dashboard-services' )>
                        Services page
                    </option>
                    <option value="{{ route('dashboard-book-session') }}" @selected(Route::currentRouteName()=='dashboard-book-session' )>
                        Book A Session page
                    </option>
                    <option value="{{ route('dashboard-about-us') }}" @selected(Route::currentRouteName()=='dashboard-about-us' )>
                        About us page
                    </option>
                </select>
            </div>


            @yield('content')

        </main>


    </div>
    <script>
        document.getElementById('pageRedirectSelect').addEventListener('change', function() {
            var url = this.value;
            if (url) {
                window.location.href = url;
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
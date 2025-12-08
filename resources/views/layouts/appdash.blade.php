<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page Content</title>
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
                <select>
                    <option>Contact us page</option>
                </select>
            </div>

            @yield('content')

        </main>


    </div>
</body>

</html>
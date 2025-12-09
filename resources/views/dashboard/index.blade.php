<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles/styledash.css')}}">
</head>

<body>
    <div class="layout">

        <!-- Sidebar -->
        @include('includes.sidebar')

        <!-- Main area -->
        <main class="main">


            <h2>Pages Management</h2>
            <p>Manage website pages and their visibility</p>
            <button class="add-page-btn">+ Add Page</button>

            <input type="text" class="search-input" placeholder="search for page">

            <div class="cards">
                <div class="card">
                    <i class="fas fa-globe"></i>
                    <strong>Total Pages</strong>
                    <div>5</div>
                </div>
                <div class="card">
                    <i class="fas fa-eye"></i>
                    <strong>Published</strong>
                    <div>3</div>
                </div>
                <div class="card">
                    <i class="fas fa-eye-slash"></i>
                    <strong>Draft</strong>
                    <div>2</div>
                </div>
                <div class="card">
                    <i class="fas fa-globe"></i>
                    <strong>Visible</strong>
                    <div>5</div>
                </div>
            </div>

            <div class="page-list">
                <div class="page-item">
                    <div class="page-info">
                        <h4>Home page <span class="status published">Published</span></h4>
                        <p>Last updated: 2025-11-29</p>
                    </div>
                    <div class="actions">
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                        <i class="fas fa-trash delete-btn"></i>
                    </div>
                </div>
                <div class="page-item">
                    <div class="page-info">
                        <h4>About us page <span class="status published">Published</span></h4>
                        <p>Last updated: 2025-11-29</p>
                    </div>
                    <div class="actions">
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                        <i class="fas fa-trash delete-btn"></i>
                    </div>
                </div>
                <div class="page-item">
                    <div class="page-info">
                        <h4>Services page <span class="status published">Published</span></h4>
                        <p>Last updated: 2025-11-29</p>
                    </div>
                    <div class="actions">
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                        <i class="fas fa-trash delete-btn"></i>
                    </div>
                </div>
                <div class="page-item">
                    <div class="page-info">
                        <h4>Contact us page <span class="status published">Published</span></h4>
                        <p>Last updated: 2025-11-29</p>
                    </div>
                    <div class="actions">
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                        <i class="fas fa-trash delete-btn"></i>
                    </div>
                </div>
                <div class="page-item">
                    <div class="page-info">
                        <h4>Industries page <span class="status draft">Draft</span></h4>
                        <p>Last updated: 2025-11-29</p>
                    </div>
                    <div class="actions">
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <i class="fas fa-trash delete-btn"></i>
                    </div>
                </div>
                <div class="page-item">
                    <div class="page-info">
                        <h4>Pricing <span class="status draft">Draft</span></h4>
                        <p>Last updated: 2025-11-29</p>
                    </div>
                    <div class="actions">
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <i class="fas fa-trash delete-btn"></i>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
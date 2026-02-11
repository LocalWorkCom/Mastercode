<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <div class="login-wrapper">
        <div class="login-card">

            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
            </div>

            <h2>تسجيل الدخول</h2>
            <p class="subtitle">مرحبا بك</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-group">
                    <input type="text" name="email"
                        placeholder="البريد الإلكتروني"
                        value="{{ old('email') }}" required>
                </div>

                <div class="input-group password-group">
                    <input type="password"
                        id="password"
                        name="password"
                        placeholder="كلمة المرور"
                        required>

                    <i class="fa-regular fa-eye" id="togglePassword"></i>
                </div>


                <button type="submit" class="btn-login">
                    تسجيل الدخول
                </button>

            </form>

        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function() {

            // غير نوع الحقل
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // غير شكل الأيقونة
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>


</body>

</html>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles/login.css') }}">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <h2>تسجيل الدخول</h2>
            <p>مرحبا بك</p>

            <!-- @if(session('error'))
                <div class="error">{{ session('error') }}</div>
            @endif -->

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <input type="text" name="email" placeholder="البريد الإلكتروني أو الهاتف" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="ادخل كلمة المرور" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn">تسجيل الدخول</button>
            </form>
        </div>
    </div>
</body>
</html>

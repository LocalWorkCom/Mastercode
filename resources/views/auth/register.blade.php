<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل حساب جديد</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles/login.css') }}">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <h2>تسجيل حساب جديد</h2>
            <p>مرحبا بك، قم بإنشاء حسابك</p>

            @if(session('error'))
                <div class="error">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" placeholder="الاسم الكامل" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group">
                    <input type="email" name="email" placeholder="البريد الإلكتروني" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group">
                    <input type="password" name="password" placeholder="كلمة المرور" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group">
                    <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
                </div>

                <button type="submit" class="btn">تسجيل</button>
            </form>

        </div>
    </div>
</body>
</html>

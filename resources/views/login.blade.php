<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تسجيل الدخول</title>
  <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
    <div class="card-body">
      <h4 class="card-title text-center mb-4">تسجيل الدخول</h4>
      @if (session()->get('error'))
        <div class="alert alert-danger text-center">
            {{ session()->get('error') }}
        </div>
      @endif

      <form action="{{ route('check') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">البريد الإلكتروني</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="example@email.com" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">كلمة المرور</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">تذكرني</label>
          </div>
          <a href="#" class="text-decoration-none small">نسيت كلمة المرور؟</a>
        </div>

        <button type="submit" class="btn btn-primary w-100">دخول</button>
      </form>
    </div>
  </div>

</body>
</html>

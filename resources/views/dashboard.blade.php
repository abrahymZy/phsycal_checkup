<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>لوحة التحكم</title>
  <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
</head>
<body class="bg-light">

  <!-- رأس الصفحة -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
      <a class="navbar-brand" href="#">لوحة التحكم</a>

      <!-- زر تسجيل الخروج -->
      <form action="{{ route('logout') }}" method="POST" class="mb-0">
        @csrf
        <button type="submit" class="btn btn-outline-light btn-sm">تسجيل الخروج</button>
      </form>
    </div>
  </nav>

  <!-- المحتوى -->
  <div class="container py-5">
    <div class="text-center mb-5">
      <h2>مرحباً بك في لوحة الإدارة</h2>
      <p class="text-muted">اختر القسم الذي تريد إدارته</p>
    </div>

    <div class="row justify-content-center g-4">
      
      <!-- بطاقة المنتجات -->
      <div class="col-md-4">
        <div class="card text-center border-0 shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-3">إدارة الفحوص</h4>
            <p class="card-text text-muted mb-4">إضافة، تعديل أو حذف الفحوص</p>
            <a href="{{ route('checkup.index') }}" class="btn btn-primary w-100">الانتقال إلى الفحوص</a>
          </div>
        </div>
      </div>

      <!-- بطاقة الفئات -->
      <div class="col-md-4">
        <div class="card text-center border-0 shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-3">إدارة العينات</h4>
            <p class="card-text text-muted mb-4">إضافة أو تعديل العينات</p>
            <a href="{{ route('simples.index') }}" class="btn btn-danger w-100">الانتقال إلى العينات</a>
          </div>
        </div>
      </div>

      <!-- بطاقة الفئات -->
      <div class="col-md-4">
        <div class="card text-center border-0 shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-3">إدارة المرضى</h4>
            <p class="card-text text-muted mb-4">إضافة أو تعديل المرضى</p>
            <a href="{{ route('sickest.index') }}" class="btn btn-success w-100">الانتقال إلى المرضى</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>

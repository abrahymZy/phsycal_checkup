<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عرض المنتج</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-body">
      <h2 class="text-center mb-4">تفاصيل المنتج</h2>

      <table class="table table-bordered text-center align-middle">
        <tr>
          <th class="table-dark">نوع الفحص</th>
          <td>{{ $check->type_checkup }}</td>
        </tr>
        <tr>
          <th class="table-dark">تاريخ الفحص</th>
          <td>{{ $check->date }}</td>
        </tr>
        <tr>
          <th class="table-dark">العينة</th>
          <td>{{ $check->simples->name }}</td>
        </tr>
        
         <tr>
          <th class="table-dark">المريض</th>
          <td>{{ $check->sickest->name }}</td>
        </tr>
      </table>

      <div class="text-center mt-3">
        <a href="{{ route('checkup.index') }}" class="btn btn-secondary">رجوع إلى القائمة</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

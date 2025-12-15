<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عرض عينة</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-body">
      <h2 class="text-center mb-4">تفاصيل العينة</h2>

      <table class="table table-bordered text-center align-middle">
        <tr>
          <th class="table-dark"> الإسم</th>
          <td>{{ $simple->name }}</td>
        </tr>

      </table>

      <div class="text-center mt-3">
        <a href="{{ route('simples.index') }}" class="btn btn-secondary">رجوع إلى القائمة</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

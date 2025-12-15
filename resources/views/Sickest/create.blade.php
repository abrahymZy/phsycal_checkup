<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>إضافة مريض</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-body">
      <h3 class="card-title text-center mb-4">إضافة مريض</h3>

      <form action="{{ route('sickest.store') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">الاسم</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">العمر</label>
          <input type="number" id="name" name="age" class="form-control" required>
        </div>

       
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>

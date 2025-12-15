<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>إضافة عينة</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-body">
      <h3 class="card-title text-center mb-4">إضافة عينة</h3>

      <form action="{{ route('simples.update',$simple->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="name" class="form-label">الاسم</label>
          <input type="text" id="name" name="name" class="form-control" value="{{ $simple->name }}" required>
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

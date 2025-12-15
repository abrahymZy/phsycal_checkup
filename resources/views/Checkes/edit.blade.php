<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تحديث المنتج</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-body">
      <h3 class="card-title text-center mb-4">تحديث المنتج</h3>

      <form action="{{ route('checkup.update',$check->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put'); 
        <div class="mb-3">
          <label for="name" class="form-label">نوع الفحص</label>
          <input type="text" id="name" name="type_checkup" class="form-control" value="{{ $check->type_checkup }}" required>
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">تاريخ الفحص</label>
          <input type="date" step="0.01" id="price" name="date" class="form-control" value="{{ $check->date }}" required>
        </div>

         <div class="mb-3">
          <label for="quantity" class="form-label">العينات</label>
          <select name="simple_id" id="" class="form-control">
            @foreach ($simple as $cat)
               <option value={{ $cat->id }} {{ $check->simple_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
            @endforeach
           
          </select>
         <div class="mb-3">
          <label for="quantity" class="form-label">المرضى</label>
          <select name="sik_id" id="" class="form-control">
            @foreach ($sick as $cat)
               <option value={{ $cat->id }} {{ $check->sik_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
            @endforeach
           
          </select>
        </div>



        <div class="d-grid">
          <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

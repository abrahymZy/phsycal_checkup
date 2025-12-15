<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>قائمة العينات</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4 text-center">قائمة العينات</h2>

  <div class="mb-3 text-end">
    <a href="{{ route('dashboard') }}" class="btn btn-primary"> العودة إلى لوحة التحكم</a>
  </div>
  <div class="mb-3 text-end">
    <a href="{{ route('simples.create') }}" class="btn btn-primary">إضافة عينة</a>
  </div>

  <table class="table table-bordered table-striped align-middle text-center">
    <thead class="table-dark">
      <tr>
        <th>الاسم</th>

        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($simples as $c)
      <tr>
        <td>{{ $c->name }}</td>
       
        <td>
          <a href="{{ route('simples.show', $c->id) }}" class="btn btn-info btn-sm">عرض</a>
          <a href="{{ route('simples.edit', $c->id) }}" class="btn btn-warning btn-sm">تعديل</a>
          <form action="{{ route('simples.destroy', $c->id) }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

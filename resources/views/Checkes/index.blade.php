<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>قائمة الفحوص</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container mt-5">
    <h2 class="mb-4 text-center">قائمة الفحوص</h2>
    <div class="mb-3 text-end">
      <a href="{{ route('dashboard') }}" class="btn btn-primary"> العودة إلى لوحة التحكم</a>
    </div>
    <div class="mb-3 text-end">
      <a href="{{ route('checkup.create') }}" class="btn btn-primary">إضافة فحص</a>
    </div>

    <table class="table table-bordered table-striped align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>نوع الفحص</th>
          <th>التاريخ</th>
          <th>العينة</th>
          <th>المريض</th>
          <th>العمليات</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($check as $p)
          <tr>
            <td>{{ $p->type_checkup }}</td>
            <td>{{ $p->date }}</td>
            <td>{{ $p->simples->name }}</td>
            <td>{{$p->sickest->name }}</td>
            <td>
              <a href="{{ route('checkup.show', $p->id) }}" class="btn btn-info btn-sm">عرض</a>
              <a href="{{ route('checkup.edit', $p->id) }}" class="btn btn-warning btn-sm">تعديل</a>
              <form action="{{ route('checkup.destroy', $p->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm"
                  onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
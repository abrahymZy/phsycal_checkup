<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>قائمة المرضى</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container mt-5">
    <h2 class="mb-4 text-center">قائمة المرضى</h2>
    <div class="mb-3 text-end">
      <a href="{{ route('dashboard') }}" class="btn btn-primary"> العودة إلى لوحة التحكم</a>
    </div>
    <div class="mb-3 text-end">
      <a href="{{ route('sickest.create') }}" class="btn btn-primary">إضافة مريض</a>
    </div>

    <table class="table table-bordered table-striped align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>الاسم</th>
          <th>العمر</th>

          <th>العمليات</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sick as $c)
          <tr>
            <td>{{ $c->name }}</td>
            <td>{{ $c->age }}</td>

            <td>
              <a href="{{ route('sickest.show', $c->id) }}" class="btn btn-info btn-sm">عرض</a>
              <a href="{{ route('sickest.edit', $c->id) }}" class="btn btn-warning btn-sm">تعديل</a>
              <form action="{{ route('sickest.destroy', $c->id) }}" method="post" class="d-inline">
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

</body>

</html>
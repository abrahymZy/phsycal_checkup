<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>قائمة المستخدمين</title>
  <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4 text-center">قائمة المستخدمين</h2>

  <div class="mb-3 text-end">
    <a href="{{ route('user.create') }}" class="btn btn-primary">إضافة مستخدم</a>
  </div>

  <table class="table table-bordered table-striped align-middle text-center">
    <thead class="table-dark">
      <tr>
        <th>الاسم</th>
        <th>البريد الالكتروني</th>
        <th> كلمة المرور</th>
        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $c)
      <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->email }}</td>
        <td>{{ $c->password }}</td>
       
        <td>
          <a href="{{ route('user.show', $c->id) }}" class="btn btn-info btn-sm">عرض</a>
          <a href="{{ route('user.edit', $c->id) }}" class="btn btn-warning btn-sm">تعديل</a>
          <form action="{{ route('user.destroy', $c->id) }}" method="post" class="d-inline">
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

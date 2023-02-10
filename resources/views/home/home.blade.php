<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    .horizontal-spacer{
      padding-left: 250px;
      padding-right: 250px;
    }
  </style>
</head>

<body>
<nav class="navbar bg-body-tertiary horizontal-spacer">
  <div class="container-fluid">
    <a class="navbar-brand">Employee</a>
    <form class="d-flex" action="employee" method="GET" role="search">
      <input class="form-control me-2" name="q"  type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>
  <div class="container horizontal-spacer">
    <a href="/employee/insert" type="button" class="btn btn-success">Tambah</a>
    <div class="row">
      @if($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No telepon</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $index => $employee)
          <tr>
            <th scope="row">{{ $index + $data->firstItem() }}</th>
            <td>{{$employee->nama}}</td>
            <td>
              <img src="{{ asset('photoemployee/'.$employee->foto) }}" alt="" style="max-width: 50px;">
            </td>
            <td>{{$employee->jenis_kelamin}}</td>
            <td>{{$employee->no_telepon}}</td>
            <td>{{$employee->created_at->diffForHumans()}}</td>
            <!-- untuk hari dan tanggal -->
            <!-- <td>{{$employee->created_at->format('D M Y')}}</td> -->
            <td>
              <a href="/employee/{{ $employee->id }}" type="button" class="btn btn-primary">Edit</a>
              <a href="/delete/{{ $employee->id }}" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
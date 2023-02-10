<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Religion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    .horizontal-spacer {
      padding-left: 250px;
      padding-right: 250px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid horizontal-spacer">
      <a class="navbar-brand" href="#">Company Database</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/employee">Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Religion</a>
          <li class="nav-item">
            <a class="nav-link">More</a>
          </li>
        </ul>
        <form action="/religion" method="GET" class="d-flex" role="search">
          <input name="q" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  <div class="container horizontal-spacer">
    <a href="/religion/insert" type="button" class="btn btn-success">Tambah</a>
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
            <th scope="col">Agama</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1
          @endphp
          @foreach($data as $religion)
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{$religion->nama}}</td>
            <td>{{$religion->created_at->diffForHumans()}}</td>
            <td>
              <a href="/religion/{{ $religion->id }}" type="button" class="btn btn-primary">Edit</a>
              <a href="/religion/delete/{{ $religion->id }}" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
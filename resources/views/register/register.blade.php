<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .horizontal-spacer {
            padding-left: 450px;
      padding-right: 450px;
        }
    </style>
</head>

<body>
    <form action="/register/post" method="POST">
        @csrf
        <div class="container horizontal-spacer position-absolute top-50 start-50 translate-middle">
            <h2 class="text-center">Register</h2>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
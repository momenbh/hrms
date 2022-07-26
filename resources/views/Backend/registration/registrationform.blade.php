<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>


    <div class="row my-5">
        <div class="col-md-2 col-lg-2">

        </div>
        <div class="col-md-8 col-lg-8 my-5">
            <form action="{{route('store.registration')}}" method="POST">
                @csrf
                <label for="name">User Nmae</label>
                <input id="name" type="text" class="form-control" name='name'>

                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name='email'>
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password">

                <button type="reset" class="btn btn-danger mx-5 my-2 align-center">Cancel</button>
                <button type="submit" class="btn btn-danger mx-5 my-2 align-center">Create</button>
            </form>
        </div>
        <div class="col-md-2 col-lg-2">

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>

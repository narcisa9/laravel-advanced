<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <br>
            <div class="col-lg-offset-4 col-lg-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              <form action=""  method="post">
               {{ csrf_field() }}
               <div class="form-group">
                 <input class="form-control" type="text" name="name" placeholder="Name">
               </div>
               <div class="form-group">
                 <input class="form-control" type="text" name="email" placeholder="Email">
               </div>
               <div class="form-group">
                 <input class="btn btn-success" type="submit" >
               </div>

              </form>
            </div>
        </div>
    </div>
</body>
</html>
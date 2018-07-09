<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <br>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              <form action=""  method="post" id="form">
               {{ csrf_field() }}
               <div class="form-group">
                 <input class="form-control" type="text" name="name" placeholder="Name">
               </div>
               @captcha
               <div class="form-group">
                 <input class="btn btn-success" type="submit" >
               </div>

              </form>
            </div>
        </div>
    </div>
</body>
<script>
$(document).ready(function(){
    $('#form').submit;
})
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Form</title>
</head>
<body class="container">
    
    
    <!-- <form class="form" action="{{$url}}" method="post"> -->


    {!! Form::open(['url' => $url, 'method' => 'post']) !!} 

    <h1 class="text-center">{{$title}}</h1>
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control "type="text" name="name" placeholder="Enter Your Name" value="{{$student->name ?? ''}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control "type="email" name="email" placeholder="Enter Your Email" value="{{$student->email ?? ''}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control "type="password" name="password" placeholder="Enter Your Password">
            </div>
            <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>

    {!! Form::close() !!}

    <!-- </form> -->
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>
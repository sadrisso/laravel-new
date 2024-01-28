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
    
    <h1 class="text-center">User Registration</h1>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container">
            <x-input type="text" name="name" label="Enter Your Name" value="{{$student->name ?? '' }}"/>
            <x-input type="email" name="email" label="Enter Your Email" value="{{$student->email ?? '' }}"/>
            <x-input type="password" name="password" label="Enter Your Password"/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>
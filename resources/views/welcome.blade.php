<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Home Page</title>
</head>
<body class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="nav ">
    <li class="nav-item">
    <a class="nav-link active" href="{{url('register')}}">Register</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{url('student/view')}}">View</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{url('/')}}">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{route('file.upload')}}">File Upload</a>
    </li>
    </ul>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Upload File</title>
</head>
<body class="container">

    <form action="{{route('file.upload')}}" mothod="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="form-group mt-3">
                <label for="file">Upload File</label><br>
                <input type="file" placeholder="Upload File" class="fileClass" name="file" id="fileId">
            </div>
            <button type="submit" class="btn btn-dark">Upload</button>
        </div>
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <title>Document</title>
    <style>
        body{
            background-image: url("{{asset('salamoji_project_images/contact_back.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form-group{
            font-size:20px;
            text-align:center;
            width:50%;
            margin:40px auto;
            padding:10px;
            font-family:cursive;
            font-weight:bold;
        }
        p{
            background-color: #A9A9A9;
            padding:10px;
            opacity:.7;
            margin:30px 0px;

        }
        #header{
            background-color: #A9A9A9;
            padding:10px;
            font-size: 50px;
            margin: 30px auto;
            width:80%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1 id="header">Contact details</h1>
        <div class="form-group">
            <h1>Fisrt Name</h1>
            <p>{{$first_name}}</p>
        </div>
        <div class="form-group">
            <h1>Last Name</h1>
            <p>{{$last_name}}</p>
        </div>
        <div class="form-group">
            <h1>Email</h1>
            <p>{{$email}}</p>
        </div>
        <div class="form-group">
            <h1>Message</h1>
            <p>{{$subject}}</p>
        </div>
    </div>
</body>
</html>

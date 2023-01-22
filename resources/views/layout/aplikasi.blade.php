<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('Template/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Template/dist/css/adminlte.min.css')}}">
    <title>Document</title>
</head>
<body>
    @include('komponen.menu')
    @include('komponen.pesan')
    <div class="container-sm">@yield('konten')</div>    
</body>
<script src="{{asset('Template/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Template/dist/js/adminlte.min.js')}}"></script>
</html>
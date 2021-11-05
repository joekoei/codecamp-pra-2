<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeCamp PRA | Home </title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaHwaW9v8rfqQuNJ9OIbQ4TxzbIK3a9XE&callback=initMap">
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=LatoMedium&display=swap');
    </style>


</head>
<body>
@include('parts.nav')
@yield('content')
@include('parts.footer')
@yield('script')
</body>
</html>

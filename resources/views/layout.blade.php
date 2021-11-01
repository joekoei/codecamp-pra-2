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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=LatoMedium&display=swap');
    </style>


</head>
<body>
<div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="#contact">Contact</a>
    <div class="subnav">
        <a href="generalItems/books">Books</a>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Overig <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('items.dalton')}}">Timothy Dalton</a>
            <a href="{{route('items.dv')}}">Darth vader</a>
            <a href="{{route('items.luke')}}">Luke Skywalker</a>
            <a href="{{route('items.james')}}">James Bond</a>
            <a href="{{route('itemms.streaming')}}">Streaming Diensten</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Dranken <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('drinks.wd')}}">Warme Dranken</a>
            <a href="{{route('drinks.f')}}">Frisdrank</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Gereedschappen <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('items.chain')}}">Kettingzaag</a>
            <a href="{{route('items.hamers')}}">Hamers</a>
            <a href="{{route('items.circular')}}">Cirkelzaag</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Songteksten <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('song.br')}}">Bohemian Rhapsody</a>
            <a href="{{route('song.kq')}}">Killer Queen</a>
            <a href="{{route('song.watc')}}">We are the champions</a>
            <a href="{{route('song.im')}}">Iron Maiden</a>
            <a href="{{route('song.pib')}}">Plug in Baby</a>
            <a href="{{route('song.u')}}">Uprising</a>
            <a href="{{route('song.umb')}}">Uprising my baby</a>
            <a href="{{route('song.mm')}}">Madness</a>
        </div>
    </div>
    <a href="/">Home</a>
</div>

@yield('content')
<div class="footer" id="homepage">
    <div class="footer-text">
        <p>&copy; CodeCamp | Made by DevByte</p>
    </div>
</div>@yield('script')
</body>
</html>

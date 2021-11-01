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
            <a href="generalItems/dalton">Timothy Dalton</a>
            <a href="generalItems/darthVader">Darth vader</a>
            <a href="generalItems/lukeSkywalker">Luke Skywalker</a>
            <a href="generalItems/jamesBond">James Bond</a>
            <a href="generalItems/streaming">Streaming Diensten</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Gereedschappen <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="generalItems/chainsaw">Kettingzaag</a>
            <a href="generalItems/hamers">Hamers</a>
            <a href="generalItems/circularSaw">Cirkelzaag</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Songteksten <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="songtexts/bohemianRhapsody">Bohemian Rhapsody</a>
            <a href="songtexts/killerQueen">Killer Queen</a>
            <a href="songtexts/weAreTheChampions">We are the champions</a>
            <a href="songtexts/ironMaiden">Iron Maiden</a>
            <a href="songtexts/plugInBaby">Plug in Baby</a>
            <a href="songtexts/uprising">Uprising</a>
            <a href="songtexts/uprisingMyBaby">Uprising my baby</a>
        </div>
    </div>
    <a href="/">Home</a>
</div>

@yield('content')
@yield('footer')
@yield('script')
</body>
</html>

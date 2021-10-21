@extends('layout')

@section('nav')
<div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="#contact">Contact</a>
    <div class="subnav">
        <a href="books">Books</a>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Overig <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="../generalItems/dalton">Timothy Dalton</a>
            <a href="../generalItems/darthVader">Darth vader</a>
            <a href="../generalItems/lukeSkywalker">Luke Skywalker</a>
            <a href="../generalItems/jamesBond">James Bond</a>
            <a href="../generalItems/streaming">Streaming Diensten</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Gereedschappen <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="../generalItems/chainsaw">Kettingzaag</a>
            <a href="../generalItems/hamers">Hamers</a>
            <a href="../generalItems/circularSaw">Cirkelzaag</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Songteksten <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="bohemianRhapsody">Bohemian Rhapsody</a>
            <a href="killerQueen">Killer Queen</a>
            <a href="weAreTheChampions">We are the champions</a>
            <a href="ironMaiden">Iron Maiden</a>
            <a href="plugInBaby">Plug in Baby</a>
            <a href="uprising">Uprising</a>
            <a href="uprisingMyBaby">Uprising my baby</a>
        </div>
    </div>
    <a href="/">Home</a>
    </div>
@endsection
@section('content')
<body>
    <div class="container">
            <div class="general">
                <h1>Streamingdiensten</h1>
                <div class="streaming">
                    <a href="https://www.imdb.com/">IMDB</a><br>
                    <a href="https://www.videoland.com/nl/">Videoland</a><br>
                    <a href="https://dan.com/nl-nl/domeinnaam-kopen/movies.nl">Movies.nl</a><br>
                </div>
            </div>
    </div>
</body>
@endsection

@section('footer')
    <div class="footer">
        <div class="footer-text">
            <p>&copy; CodeCamp | Made by DevByte</p>
        </div>
    </div>


@endsection

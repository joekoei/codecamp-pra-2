@extends('layout')

@section('nav')
<div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="#contact">Contact</a>
    <div class="subnav">
        <button class="subnavbtn">Overig <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
        <a href="../generalItems/dalton">Dalton</a>
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
        <a href="../generalItems/dalton">Cirkelzaag</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">songteksten <i class="fa fa-caret-down"></i></button>
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
    <a href="#home">Home</a>
    </div>
@endsection
@section('content')
<body class="orange">
    <div class="container">
        <div class="songtext">
                <h1>Uprising My Baby Lyric</h1>
                <p>
                    Allow me in your tub<br>
                    Allow me in your club<br>
                    Allow me to drink from your cup<br>
                    I'll be coming back for more<br>
                    <br>
                    Allow me in your dream<br>
                    Allow me in your scene<br>
                    Allow me on your knees<br>
                    I'll be coming back for more<br>
                    <br>
                    Sisters, keep on rising<br>
                    Brothers, keep on rising<br>
                    This girl keeps on rising<br>
                    Keep on rising up<br>
                    <br>
                    I Believe in your school<br>
                    I Believe in your rules<br>
                    I Believe in your truth<br>
                    I'll be coming back for more<br>
                    <br>
                    I Believe in your land<br>
                    I Believe in that man<br>
                    I Believe in your command<br>
                    I'll be coming back for more<br>
                    <br>
                    Sisters, Brothers, Lovers<br>
                    Keep on rising up<br>
                    <br>
                    Sisters, keep on rising<br>
                    Brothers, keep on rising<br>
                    This girl keeps on rising<br>
                    Keep on rising up<br>
                    <br>
                    Uprising, uprising<br>
                </p>
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
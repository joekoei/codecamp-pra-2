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
<body class="orange">
    <div class="container">
        <div class="songtext">
            <div class="plugInBaby">
                <h1>Plug in baby Lyric</h1>
                <p>
                    I've exposed your lies, baby<br>
                    The underneath no big surprise<br>
                    Now it's time for changing<br>
                    And cleansing everything<br>
                    To forget your love<br>
                    My plug in baby<br>
                    Crucifies my enemies<br>
                    When I'm tired of giving<br>
                    My plug in baby<br>
                    In unbroken virgin realities<br>
                    Is tired of living<br>
                    Don't confuse<br>
                    Baby you're gonna lose<br>
                    Your own game<br>
                    Change me<br>
                    And replace the envying<br>
                    To forget your love<br>
                    My plug in baby<br>
                    Crucifies my enemies<br>
                    When I'm tired of giving<br>
                    My plug in baby<br>
                    In unbroken virgin realities<br>
                    And tired of living<br>
                    And I've seen your loving<br>
                    Mine is gone<br>
                </p>
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
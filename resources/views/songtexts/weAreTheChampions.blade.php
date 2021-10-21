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
        <a href="../generalItems/circularSaw">Cirkelzaag</a>
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
    <a href="/">Home</a>
    </div>
@endsection
@section('content')
<body class="blue">
        <div class="container">
            <div class="songtext">
                <div class="bohemianRhapsody">
                    <h1>We are the champions Lyric</h1>
                    <p>
                        I've paid my dues<br>
                        Time after time<br>
                        I've done my sentence<br>
                        But committed no crime<br>
                        And bad mistakes<br>
                        I've made a few<br>
                        I've had my share of sand<br>
                        Kicked in my face<br>
                        But I've come through<br>
                        And we mean to go on and on and on and on<br>
                        We are the champions, my friends<br>
                        And we'll keep on fighting till the end<br>
                        We are the champions<br>
                        We are the champions<br>
                        No time for losers<br>
                        'Cause we are the champions of the World<br>
                        I've taken my bows<br>
                        And my curtain calls<br>
                        You brought me fame and fortune<br>
                        And everything that goes with it<br>
                        I thank you all<br>
                        But it's been no bed of roses<br>
                        No pleasure cruise<br>
                        I consider it a challenge before<br>
                        The human race<br>
                        And I ain't gonna lose<br>
                        And we mean to go on and on and on and on<br>
                        We are the champions, my friends<br>
                        And we'll keep on fighting till the end<br>
                        We are the champions<br>
                        We are the champions<br>
                        No time for losers<br>
                        'Cause we are the champions of the World<br>
                        We are the champions, my friends<br>
                        And we'll keep on fighting till the end<br>
                        We are the champions<br>
                        We are the champions<br>
                        No time for losers<br>
                        'Cause we are the champions of the World<br>
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
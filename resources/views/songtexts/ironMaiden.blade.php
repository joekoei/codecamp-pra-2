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
    <a href="#home">Home</a>
    </div>
@endsection
@section('content')
<body class="red">
        <div class="container">
            <div class="songtext">
                <div class="bohemianRhapsody">
                    <h1>Iron maiden Lyric</h1>
                    <p>
                        Alright<br>
                        Won't you come into my room?<br>
                        I wanna show you all my wares<br>
                        I just want to see your blood<br>
                        I just want to stand and stare<br>
                        See the blood begin to flow<br>
                        As it falls upon the floor<br>
                        Iron Maiden can't be fought<br>
                        Iron Maiden can't be sought<br>
                        Oh well, wherever, wherever you are<br>
                        Iron Maiden's gonna get you no matter how far<br>
                        See the blood flow, watching it shed up above my head<br>
                        Iron Maiden wants you for dead<br>
                        Alright<br>
                        Won't you come into my room?<br>
                        I wanna show you all my wares<br>
                        I just want to see your blood<br>
                        I just want to stand and stare<br>
                        See the blood begin to flow<br>
                        As it falls upon the floor<br>
                        Iron Maiden can't be fought<br>
                        Iron Maiden can't be sought<br>
                        Oh well, wherever, wherever you are<br>
                        Iron Maiden's gonna get you no matter how far<br>
                        See the blood flow, watching it shed up above my head<br>
                        Iron Maiden wants you for dead<br>
                        Alright<br>
                        Won't you come into my room?<br>
                        I wanna show you all my wares<br>
                        I just want to see your blood<br>
                        I just want to stand and stare<br>
                        See the blood begin to flow<br>
                        As it falls upon the floor<br>
                        Iron Maiden can't be fought<br>
                        Iron Maiden can't be sought<br>
                        Oh well, wherever, wherever you are<br>
                        Iron Maiden's gonna get you no matter how far<br>
                        See the blood flow, watching it shed up above my head<br>
                        Iron Maiden wants you for dead<br>
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
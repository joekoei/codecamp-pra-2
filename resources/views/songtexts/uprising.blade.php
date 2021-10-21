@extends('layout')

@section('nav')
<div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="#contact">Contact</a>
    <div class="subnav">
        <a href="../generalItems/books">Books</a>
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
<body class="greenSpecial">
    <div class="container">
        <div class="containerUprising">
            <div class="songtext">
                    <h1>Uprising Lyric</h1>
                    <p>
                        Paranoia is in bloom<br>
                        The PR transmissions will resume<br>
                        They'll try to push drugs that keep us all dumbed down<br>
                        And hope that we will never see the truth around<br>
                        (So come on)<br>
                        Another promise, another scene<br>
                        Another packaged lie to keep us trapped in greed<br>
                        And all the green belts wrapped around our minds<br>
                        And endless red tape to keep the truth confined<br>
                        (So come on)<br>
                        They will not force us<br>
                        They will stop degrading us<br>
                        They will not control us<br>
                        We will be victorious<br>
                        (So come on)<br>
                        Interchanging mind control<br>
                        Come, let the revolution take its toll<br>
                        If you could flick the switch and open your third eye<br>
                        You'd see that we should never be afraid to die<br>
                        (So come on)<br>
                        Rise up and take the power back<br>
                        It's time the fat cats had a heart attack<br>
                        You know that their time's coming to an end<br>
                        We have to unify and watch our flag ascend<br>
                        (So come on)<br>
                        They will not force us<br>
                        They will stop degrading us<br>
                        They will not control us<br>
                        We will be victorious<br>
                        (So come on)<br>
                        They will not force us<br>
                        They will stop degrading us<br>
                        They will not control us<br>
                        We will be victorious<br>
                        (So come on)<br>
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
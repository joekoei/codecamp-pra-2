@extends('layout')

@section('nav')
    <!-- <div class="navbar" id="home">
        <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
        <a id="sec-1" href="#">Home</a>
        <a id="sec-2" href="#">Songteksten</a>
        <a id="sec-3" href="#">Gereedschappen</a>
        <a id="sec-4" href="#">Contacten</a>
    </div> -->
    <!-- The navigation menu -->
    <!-- The navigation menu -->
    <div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="#contact">Contact</a>
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
        <button class="subnavbtn">songteksten <i class="fa fa-caret-down"></i></button>
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

@endsection
@section('content')

    <div class="time">

    </div>
@endsection

@section('footer')
    <div class="footer">
        <div class="footer-text">
            <p>&copy; CodeCamp | Made by DevByte</p>
        </div>
    </div>

@endsection
@section('script')
    <script>
        const updateTime = function(){
            $.ajax({url: "time.php", success: function(response){
                    $('.time').html(response);
                }});
        }
        setInterval(updateTime, 1000);

        updateTime();
    </script>
@endsection

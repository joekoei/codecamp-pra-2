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
        <a href="..l/generalItems/chainsaw">Kettingzaag</a>
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
<body class="blue">
        <div class="container">
            <div class="songtext">
                <div class="bohemianRhapsody">
                    <h1>Killer Queen Lyric</h1>
                    <p>
                        She keeps her Moet et Chandon<br>
                        In her pretty cabinet<br>
                        "Let them eat cake", she says<br>
                        Just like Marie Antoinette<br>
                        A built-in remedy<br>
                        For Khrushchev and Kennedy<br>
                        At anytime an invitation<br>
                        You can't decline<br>
                        Caviar and cigarettes<br>
                        Well versed in etiquette<br>
                        Extraordinarily nice<br>
                        She's a Killer Queen<br>
                        Gunpowder, gelatine<br>
                        Dynamite with a laser beam<br>
                        Guaranteed to blow your mind<br>
                        Anytime<br>
                        Recommended at the price<br>
                        Insatiable an appetite<br>
                        Wanna try?<br>
                        To avoid complications<br>
                        She never kept the same address<br>
                        In conversation<br>
                        She spoke just like a baroness<br>
                        Met a man from China<br>
                        Went down to Geisha Minah<br>
                        Then again incidentally<br>
                        If you're that way inclined<br>
                        Perfume came naturally from Paris (naturally)<br>
                        For cars she couldn't care less<br>
                        Fastidious and precise<br>
                        She's a Killer Queen<br>
                        Gunpowder, gelatinev
                        Dynamite with a laser beam<br>
                        Guaranteed to blow your mind<br>
                        Anytime<br>
                        Drop of a hat she's as willing as<br>
                        Playful as a pussy cat<br>
                        Then momentarily out of action<br>
                        Temporarily out of gas<br>
                        To absolutely drive you wild, wildv
                        She's all out to get you<br>
                        She's a Killer Queen<br>
                        Gunpowder, gelatine<br>
                        Dynamite with a laser beam<br>
                        Guaranteed to blow your mind<br>
                        Anytime<br>
                        Recommended at the price<br>
                        Insatiable an appetite<br>
                        Wanna try?<br>
                        You wanna try<br>
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
@extends('layout')

@section('nav')
    <div class="navbar" id="home">
        <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
        <a id="sec-1" href="#">Home</a>
        <a id="sec-2" href="#">Songteksten</a>
        <a id="sec-3" href="#">Gereedschappen</a>
        <a id="sec-4" href="#">Contacten</a>
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
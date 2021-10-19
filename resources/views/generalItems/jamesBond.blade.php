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
<body>
    <div class="container">
            <div class="general">
                <h1>Roger Moore's James Bond</h1>

                <h2>Films</h2>
                <p>
                    The Spy Who Loved Me<br>
                    Octopussy<br>
                    A View To A Kill<br>
                    Moonraker<br>
                    The Man With The Golden Gun<br>
                    Live And Let Die<br>
                    For Your Eyes Only<br>
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
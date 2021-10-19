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
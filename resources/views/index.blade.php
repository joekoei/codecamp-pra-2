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
@endsection
@section('content')
<div class="container">
    <div class="content">
        <img src="{{asset("img/logo.png")}}" alt="logo">
        <ul class="ulInfo">
            <div class="plaats">
                <li>Plaats:</li>
                <li>Breda</li>
            </div>
            <div class="telefoon">
                <li>Telefoon:</li>
                <li>0612345678</li>
            </div>
            <div class="straat">
                <li>Straat</li>
                <li>Rondweg 78</li>
            </div>
        </ul>
    </div>
</div>
    <div class="time">

    </div>
@endsection

<!-- @section('script')
    <script>
        const updateTime = function(){
            $.ajax({url: "time.php", success: function(response){
                    $('.time').html(response);
                }});
        }
        setInterval(updateTime, 1000);

        updateTime();
    </script>
@endsection -->

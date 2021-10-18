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

    <div class="time">

    </div>
@endsection

@section('footer')

@endsection
@section('script')
    <script>
        const updateTime = function(){
            $.ajax({url: "time.php", success: function(response){
                    $('.time').html(response);
                }});
            setInterval(updateTime, 1000);
        }

        updateTime();
    </script>
@endsection

@extends('layout')

@section('nav')
    <div class="navbar" id="home">
        <ul>
            <li><img class="navbar-img" src="{{asset("img/logo-wit.png")}}" alt="logo" width="60px" height="60px"></li>
            <li><a id="sec-1" href="#home">home</a></li>
            <li><a id="sec-2" href="#over-ons">over ons</a></li>
            <li><a id="sec-3" href="#media">portfolio</a></li>
            <li class="uitlijning-rechts-nav"><a id="sec-4" href="#contact">contact</a></li>
        </ul>
    </div>
@endsection

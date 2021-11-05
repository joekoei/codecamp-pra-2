<div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="{{route('login')}}">Dashboard</a>
    <a href="#contact">Contact</a>
    <div class="subnav">
        <a href="{{route('items.book')}}">Books</a>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Overig <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('items.dalton')}}">Timothy Dalton</a>
            <a href="{{route('items.dv')}}">Darth vader</a>
            <a href="{{route('items.luke')}}">Luke Skywalker</a>
            <a href="{{route('items.james')}}">James Bond</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Dranken <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('drinks.wd')}}">Warme Dranken</a>
            <a href="{{route('drinks.f')}}">Frisdrank</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Gereedschappen <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('items.hamers')}}">Hamers</a>
            <a href="{{route('items.circular')}}">Cirkelzaag</a>
            <a href="{{route('items.screwDriver')}}">Schroevendraaier</a>
            <a href="{{route('items.handSaw')}}">Handzaag</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Songteksten <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('song.br')}}">Bohemian Rhapsody</a>
            <a href="{{route('song.kq')}}">Killer Queen</a>
            <a href="{{route('song.watc')}}">We are the champions</a>
            <a href="{{route('song.pib')}}">Plug in Baby</a>
            <a href="{{route('song.u')}}">Uprising</a>
            <a href="{{route('song.umb')}}">Uprising my baby</a>
            <a href="{{route('song.mm')}}">Madness</a>
        </div>
    </div>
    <a href="/">Home</a>
</div>

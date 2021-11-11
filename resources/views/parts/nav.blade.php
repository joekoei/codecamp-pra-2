<div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="{{route('login')}}">Dashboard</a>
    <div class="subnav">
        <a href="{{route('items.book')}}">Boeken</a>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Overig <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('personenAndPersonages.personen')}}">Personen</a>
            <a href="{{route('personenAndPersonages.personages')}}">Personages</a>
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
            <a href="{{route('items.screwDriver')}}">Schroevendraaier</a>
            <a href="{{route('items.saws')}}">Zagen</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Songteksten <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="{{route('song.br')}}">Bohemian Rhapsody - Queen</a>
            <a href="{{route('song.kq')}}">Killer Queen - Queen</a>
            <a href="{{route('song.watc')}}">We are the champions - Queen</a>
            <a href="{{route('song.pib')}}">Plug in Baby - Muse</a>
            <a href="{{route('song.u')}}">Uprising - Muse</a>
            <a href="{{route('song.umb')}}">Uprising - MyBaby</a>
            <a href="{{route('song.mm')}}">Madness - Muse</a>
        </div>
    </div>
    <a href="/">Home</a>
</div>

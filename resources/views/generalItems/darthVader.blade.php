@extends('layout')

@section('nav')
<div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="#contact">Contact</a>
    <div class="subnav">
        <button class="subnavbtn">Overig <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
        <a href="dalton">Dalton</a>
        <a href="darthVader">Darth vader</a>
        <a href="lukeSkywalker">Luke Skywalker</a>
        <a href="jamesBond">James Bond</a>
        <a href="streaming">Streaming Diensten</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Gereedschappen <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
        <a href="chainsaw">Kettingzaag</a>
        <a href="hamers">Hamers</a>
        <a href="circularSaw">Cirkelzaag</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">songteksten <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
        <a href="../songtexts/bohemianRhapsody">Bohemian Rhapsody</a>
        <a href="../songtexts/killerQueen">Killer Queen</a>
        <a href="../songtexts/weAreTheChampions">We are the champions</a>
        <a href="../songtexts/ironMaiden">Iron Maiden</a>
        <a href="../songtexts/plugInBaby">Plug in Baby</a>
        <a href="../songtexts/uprising">Uprising</a>
        <a href="../songtexts/uprisingMyBaby">Uprising my baby</a>
        </div>
    </div>
    </div>
    <a href="/">Home</a>
    </div>
@endsection
@section('content')
<body class="yellow">
    <div class="container">
            <div class="general">
                <h1>Darth vader</h1>

                <h2>Origineel</h2>
                <p>
                    Darth Vader is een personage uit de Star Wars-films. Hij is als Sith-leerling ondergeschikt aan keizer Palpatine, ook bekend als Darth Sidious.
                    In de jaren 1977, 1980 en 1983 werd Darth Vader gespeeld door acteur David Prowse en stuntman Bob Anderson. Zijn stem werd echter ingesproken door James Earl Jones, omdat diens stem veel zwaarder, duisterder en dreigender klonk.
                </p>
                <h2>Personage | acteurs</h2>
                    <p>
                        Darth Vader is een dienaar van de kwaadaardige keizer Palpatine (Darth Sidious) en een wreed persoon. Hij is vooral te herkennen aan zijn donkere kostuum, zijn zware stem, en zijn enorme omvang. Hij wordt zowel gevreesd door de Rebellen, als door zijn eigen troepen.
                    </p>
                    <h3>acteurs</h3>
                    <p>
                        In de eerste drie opgenomen films (Episodes IV, V en VI) speelt David Prowse de rol van Darth Vader (behalve in enkele gevechtsscènes, waar Bob Anderson hem speelt). De stem wordt gedubd door de acteur James Earl Jones. In deze films is het gezicht van Darth Vader slechts twee keer te zien. Vlak voordat Darth Vader overlijdt, in Episode VI, wordt zijn masker afgedaan en wordt hij gespeeld door Sebastian Shaw. Later is hij te zien als geest. In de oorspronkelijke versie is Shaw hier opnieuw te zien, maar in de opnieuw uitgebrachte dvd-versie is deze geestverschijning aangepast, zodat Hayden Christensen te zien is. Hayden speelde Anakin Skywalker in de prequeltrilogie (Episodes I, II en III), het personage wat aan het eind van Episode III transformeert in Darth Vader.
                        Daarnaast wordt Darth Vader ook nog door andere acteurs gespeeld in een aantal videospellen. In een hoorspel uit de jaren 80 en 90 werd zijn stem door Brock Peters ingesproken. Voor verschillende videospellen werd zijn stem ingesproken door Matt Sloan en later door Scott Lawrence
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
@extends('layout')

@section('nav')
<div class="navbar">
    <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
    <a href="#contact">Contact</a>
    <div class="subnav">
        <a href="books">Books</a>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Overig <i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
        <a href="dalton">Timothy Dalton</a>
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
        <button class="subnavbtn">Songteksten <i class="fa fa-caret-down"></i></button>
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
    <a href="/">Home</a>
</div>
@endsection
@section('content')
<body class="green">
    <div class="container">
            <div class="general">
                <h1>Luke Skywalker</h1>

                <h2>Origineel</h2>
                <p>
                    Luke Skywalker is een personage uit de Star Warssaga, gespeeld door acteur Mark Hamill. Luke is de tweelingbroer van prinses Leia. Hun ouders zijn Padmé Amidala en Anakin Skywalker. Skywalker werd opgevoed door zijn oom Owen Lars en tante Beru Whitesun Lars.
                </p>
                <h2>Expanded universe</h2>
                    <p>
                        Luke speelt een grote rol in het Star Wars Expanded Universe. Hierin is het leven van Luke Skywalker zeer uitgebreid (ook over de periodes door de films worden overlapt, maar niet worden getoond). Het is bijvoorbeeld Luke die de locatie op Hoth vindt, waar de rebellen zich hebben gehergroepeerd in Episode V. Tevens wordt hij tussentijds verliefd op Shira Brie, die hij kort daarna per ongeluk zou doden, tijdens een gevecht waarbij hij wederom moest vertrouwen op zijn kracht als Jedi. Maar later zou blijken dat Brie een geheim agente van het Keizerrijk was.
                        Na de slag op Endor gaat zijn verhaal verder. Zo zou Luke na de films een zeer gerespecteerd Jedi-meester worden en vele generaties Padawan opleiden om de eeuwenoude traditie van de Jedi opnieuw te doen opleven. Tevens ontmoet hij Mara Jade, die in eerste instantie erop uit is om hem te doden, maar later krijgen ze gevoelens voor elkaar en trouwen ze.
                    </p>
                    <h3>The mandelorian</h3>
                    <p>
                        Luke Skywalker speelt een kleine rol in seizoen 2 aflevering 8 van The Mandalorian. Luke komt het Yoda-achtige kindje Grogu halen bij de reddingsactie op de Light Emperial Cruiser.
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

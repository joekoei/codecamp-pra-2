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
    <a href="/">Home</a>
</div>
@endsection
@section('content')
<body>
    <div class="container">
            <div class="general">
                <h1>Cirkelzaag</h1>

                <h2>Wat is een Cirkelzaag</h2>
                <p>
                (of radiaalzaag) is een zaag met een blad in de vorm van een stalen schijf, die met een motor tot een zeer hoog toerental wordt aangedreven. De schijf kan in een zaagtafel zijn gemonteerd waarover het te zagen materiaal wordt aangevoerd, of ingebouwd in een constructie samen met een elektromotor tot draagbare handcirkelzaag. Deze heeft een minder krachtige motor en kan ook dunner materiaal zagen.
                </p>
                <h2>verschillendeTypen</h2>
                    <h3>Cirkelzaag voor non-ferromaterialen</h3>
                    <p>
                        Een cirkelzaag voor non-ferromaterialen wordt meestal gebruikt om hout mee te zagen. Op de tanden van de zaag wordt een stukje snelstaal gesoldeerd, waardoor de slijtage sterk afneemt. De belangrijkste veiligheidsvoorzieningen zijn het spouwmes en de kap. Het spouwmes zorgt ervoor dat de zaagsnede open gehouden wordt en voorkomt daardoor terugslag van het werkstuk. Het is gemonteerd achter het zaagblad, dus daar waar de tanden van de zaag omhoog gaan. De voorzijde, waar de tanden van de zaag naar beneden gaan, is waar het te zagen hout aangevoerd wordt.

                        Een paneelzaag is een tafelcirkelzaag, zoals op de afbeelding, waarvan de geleiding zowel in de breedte als in de lengte enkele meters groot is, om grote werkstukken te kunnen zagen. Hiervoor bestaat ook de formaatzaag. In een formaatzaag staat het te zagen paneel rechtop in een frame, aan dit frame is een geleiding gemonteerd waarlangs een handcirkelzaag over het paneel beweegt. Dit type wordt veel gebruikt in bouwmarkten.

                        Het woordgebruik is niet eenduidig, de benamingen paneelzaag en formaatzaag worden soms als synoniemen gebruikt.
                    </p>
                    <h3>Metaalcirkelzaag</h3>
                    <p>
                        Bij cirkelzagen horen ook machines die metalen met lage toerentallen kunnen doorzagen. Vaak wordt het zaagblad dan hydraulisch door het werkstuk gedrukt. Hefboombediening komt ook vaak voor. 
                        Deze zagen hebben een hardstalen blad, dat tijdens het zagen gekoeld wordt met een koelmiddel. Dit koelmiddel stroomt langs het zaagblad, wordt opgevangen en vervolgens gezeefd en hergebruikt. Een metaalafkortmachine kan ook met een doorslijpschijf werken.
                    </p>
                    <h3>Steencirkelzaag</h3>
                    <p>
                    Voor het zagen van steen, beton en asfalt wordt gebruikgemaakt van een diamantcirkelzaag. Het zaagblad is voorzien van diamantslijpsel. Tijdens het zagen wordt veel water op de cirkelzaag gesproeid om verhitting en overmatige slijtage tegen te gaan. 
                    Diamantcirkelzaagmachines worden vaak pneumatisch aangedreven via een compressor.
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
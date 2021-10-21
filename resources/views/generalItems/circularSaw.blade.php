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
                    Een kettingzaag (ook motorzaag, motorkettingzaag of boomzaag genoemd) is een draagbare machine om mee te zagen. De belangrijkste functie is hout zagen.
                </p>
                <h2>verschillendeTypen</h2>
                    <p>
                        Er zijn verschillende typen aandrijving voor kettingzagen: pneumatisch, hydraulisch, elektrisch en door middel van een verbrandingsmotor (vaak ook motorkettingzaag genoemd). De elektrische kettingzaag en de motorkettingzaag zijn het meest gangbaar.
                    </p>
                    <h3>Elektrische Kettingzaag</h3>
                    <p>
                        Elektrische kettingzagen zijn met name bedoeld voor particulier gebruik. Ze zijn milieuvriendelijker en maken doorgaans minder lawaai dan kettingzagen op benzine. Ze zijn praktischer in gebruik doordat ze lichter zijn. Elektrische kettingzagen zijn vaak goedkoper in aanschaf. Nadeel is het snoer bij sommige elektrische kettingzagen waardoor de actieradius beperkt is, maar draadloze elektrische kettingzagen bestaan ook. Deze werken op een accu.
                    </p>
                    <h3>Kettingzaag met brandstofmotor</h3>
                    <p>
                        Benzinekettingzagen hebben bijna zonder uitzondering een tweetaktmotor. Benzine-aangedreven kettingzagen hebben het voordeel dat ze een grotere mobiliteit hebben en krachtiger zijn dan elektrische kettingzagen.

                        Er zijn verschillende typen benzine-kettingzaag verkrijgbaar:

                        Gewone motorkettingzaag = variërend van 30 cc tot 121 cc.
                        Tophandle = licht type kettingzaag. Hoewel deze machines bediend kunnen worden met één hand, is dit verboden. Wordt vooral gebruikt in de fruitteelt en de boomverzorging.
                        motorstokzaag = kettingzaag op een stok om takken op hoogte door te zagen.
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
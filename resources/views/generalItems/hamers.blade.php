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
</div>
@endsection
@section('content')
<body>
    <div class="container">
            <div class="general">
                <h1>Hamer</h1>

                <h2>Wat is een hamer</h2>
                <p>
                    Een hamer is een klop- of slagwerktuig. Een hamer bestaat uit een steel, het handvat, met aan het eind de zogenaamde hamerkop.
                    De vorm en grootte en het materiaal van de hamerkop en de lengte van de steel hangen sterk af van het type hamer. Bij hamers met een ijzeren hamerkop staat vaak het aantal grammen in het metaal geslagen. Voor speciale uitvoeringen, zoals voor percussie-instrumenten, wordt ook de term mallet (uit het Engels) gebruikt.
                </p>
                <h2>verschillendeTypen</h2>
                <p>
                    <h3>gewone hamer</h3><br>
                        <p>Een metalen hamerkop van 50-300 gram op een houten steel van ca. 30 cm lang die onder meer wordt gebruikt om spijkers (draadnagels) in houten voorwerpen te slaan.</p><br>
                    <h3>klauwhamer</h3><br>
                        <p>Zoals een gewone hamer, maar de achterkant van de hamer heeft een platte V-groef waarin spijkers geklemd kunnen worden. De bovenkant is afgerond zodat de geklemde spijker uit het object gerold kan worden.</p><br>
                    <h3>vuist of moker</h3><br>
                        <p>Een zware hamer met een vierkante hamerkop van 1000-1500 gram op een steel van 30 cm lang, voor zwaar werk. Met een rubberen opzetstuk wordt een vuisthamer gebruikt om tegels of straatstenen in het zand te leggen voor het maken van bestrating.</p><br>
                    <h3>tegelhamer</h3><br>
                        <p>Houten hamer met grote houten kop en een korte steel. Om tegels te leggen.</p><br>
                    <h3>straathamer</h3><br>
                        <p>Een hamer om te straten, met een kromme zijde om stenen door midden te slaan, en een rechte afgeplatte zijde om stenen aan te slaan (bestraten).</p><br>
                    <h3>voorhamer</h3><br>
                        <p>Een hamer om sloopwerkzaamheden uit te voeren. Een hamerkop van een paar kilo op een steel van een meter lang.</p><br>
                    <h3>rubberen hamer</h3><br>
                        <p>Een rubberen hamer wordt vooral gebruikt bij het leggen van tegels op grond. Een kleine hamer met een rubberen gewicht die kan worden gebruikt voor voorzichtig werk, zoals het aankloppen van kleine lijmverbindingen in de houtbewerking. Kampeerders gebruiken een rubber hamer om de tentpinnen in de grond te slaan.</p><br
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

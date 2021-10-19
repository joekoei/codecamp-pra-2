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
        <a href="dalton">Cirkelzaag</a>
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
    <a href="#home">Home</a>
    </div>
@endsection
@section('content')
<body>
    <div class="container">
            <div class="general">
                <h1>Kettingzaag</h1>

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
                        <p>Een rubberen hamer wordt vooral gebruikt bij het leggen van tegels op grond. Een kleine hamer met een rubberen gewicht die kan worden gebruikt voor voorzichtig werk, zoals het aankloppen van kleine lijmverbindingen in de houtbewerking. Kampeerders gebruiken een rubber hamer om de tentpinnen in de grond te slaan. Door (para)medici wordt soms een kleine hamer gebruikt met een zacht gedeelte. Deze heeft meestal twee gekleurde uiteinden.</p><br>
                    <h3>houten hamer</h3><br>
                     <p>Een hamer met een houten hamerkop die kan worden gebruikt voor voorzichtig werk zoals het vooruithelpen van een guts of beitel in de houtbewerking. De hamerkop is gemaakt van een harde houtsoort, meestal beukenhout. De steel is gemaakt van een taaie houtsoort. Dit is nodig om de klappen goed op te kunnen vangen. De hamerkop kan rond (cilindervormig) zijn of een blokvorm hebben.</p><br>
                    <h3>smidshamer</h3><br>
                     <p>Een hamer met een gevormd gewicht die kan worden gebruikt om (heet) ijzer op een aambeeld vorm te geven.</p><br>
                    <h3>bikhamer</h3><br>
                      <p>Een hamer om te bikken, bijvoorbeeld om slakken te verwijderen, ontstaan bij het elektrisch lassen.</p><br>
                    <h3>sleg, slegge of slei</h3><br>
                      <p>Een langstelige houten hamer, onder meer in gebruik om wiggen in boomstammen te drijven en palen in de grond te slaan.</p><br>
                    <h3>zandhamer</h3><br>
                      <p>Een (kunststoffen) hamer met diverse hamerkoppen en grootte, waarvan de kop gevuld is met zand, teneinde de terugslag te verkleinen. Wordt toegepast wanneer het werkstuk met zo min mogelijke beschadiging vervormd moet worden of om lagers op assen te tikken.</p><br>
                    <h3>bankhamer</h3><br>
                      <p>Een bankhamer heeft aan één kant een iets bolvormig baanvlak en aan de andere kant een pen die haaks staat op de langsrichting van de steel. Hij is verkrijgbaar met een gewicht van 50 tot 2000 gram. Deze hamer wordt veel gebruikt door bank- en plaatwerkers.</p><br>
                    <h3>haarhamer</h3><br>
                       <p>Een haarhamer is een hamer, waarbij de beide kanten uitlopen in een dun plat vlak. Hiermee wordt een zeis gehaard (scherp gemaakt).</p><br>
                    <h3>bolhamer</h3><br>
                     <p>Een bol- of bolkophamer is een hamer voor het bewerken van metaal, met name het hameren (strekken) van bijvoorbeeld koper- of zilverplaat.</p><br>
                    <h3>bilhamer of zwaaispits</h3><br>
                     <p>Een bilhamer is een hamer voor het bewerken van molenstenen. Door steenhouwers wordt deze hamer zwaaispits genoemd en werd voorheen gebruikt voor het ruw voorhakken van blokken natuursteen.</p><br>
                    <h3>pletsteenhamer</h3><br>
                     <p> Een pletsteenhamer of bouchardhamer is een hamer voor het vlak maken van molenstenen en andere natuursteen</p><br>
                    <h3>loodhamer</h3><br>
                       <p> Een loodhamer is een hamer die in de beeldhouwkunst gebruikt wordt, bestaande uit een (veelal) koperen of messing band gevuld met lood. De boven- en onderkant van de band zijn open. Met die open – loden – kant wordt geslagen op een beitel. Het lood dempt de slagkracht door de relatieve zachtheid. De koperen band houdt het lood bijeen en is noodzakelijk om de kop aan een (houten) steel te bevestigen. Aldus kan zeer fijn scharreer- of bouchardeerwerk gedaan worden in natuursteen.<br>
                    <h3>noodhamer</h3><br>
                       <p>Een noodhamer is bedoeld om, bijvoorbeeld bij een ongeluk, een ruit in te slaan om een voertuig (trein, auto) of een ruimte snel te kunnen verlaten.</p><br>
                    <h3>stemhamer</h3><br>
                     <p>Eigenlijk geen hamer maar een sleutel (daarom ook stemsleutel genoemd). Wordt gebruikt bij het stemmen van piano's en andere snaarinstrumenten.</p><br>
                    <h3>reflexhamer</h3><br>
                       <p>Hamertje met een rubber kop waarmee bij een medisch onderzoek de reflexen, vooral de kniepeesreflex, worden getest.</p><br>
                    <h3>krijgshamer</h3><br>
                       <p>Hamer die als wapen gebruikt wordt.
                        terugslagvrije hamer (dead blow)
                        Een hamer gevuld met hagel (lood).</p>
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
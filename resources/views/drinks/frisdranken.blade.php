@extends('layout')

@section('content')
<body class="orange">
    <div class="container">
        <div class="general">
            <div class="frisDranken">
                <h1>Frisdranken</h1>
                <p>Hier komt een stuk over de drie frisdranken Cola, Up en Sinas</p>
                <div class="cola">
                    <H3>Cola</H3>
                    <p>
                        Cola is een koolzuurhoudende frisdrank. Het smaakt zoet (maar is qua pH zuur) en bevat circa 28-32 mg cafeïne per 33 cl.[1] Andere belangrijke ingrediënten zijn vanille, kaneel, karamel en citroen. Anders dan de meeste frisdranken bevat het geen citroenzuur, maar fosforzuur. Dieetcola bevat zowel fosforzuur als citroenzuur. Er bestaan naast suikervrije ook cafeïnevrije colavarianten.
                    </p>
                    <div class="Button-Dranken">
                        <a href="{{route('items.james')}}">Roger Moore</a>
                    </div>
                </div>
                <div class="up">
                    <H3>Up</H3>
                    <p>Up (of Seven-Up) is een frisdrankmerk van Dr Pepper Snapple Group in de Verenigde Staten en PepsiCo in de rest van de wereld.</p>
                </div>
                <div class="sinas">
                    <H3>Sinas</H3>
                    <p>Sinas is in Nederland de benaming voor de doorgaans gele of oranje, meestal koolzuurhoudende frisdrank met sinaasappelsmaak. Zoals de meeste frisdranken bevat sinas veel suiker of in de light-versie kunstmatige zoetstoffen. Het gehalte aan sinaasappelsap bedraagt ten minste 4%. Bekende merken zijn Fanta (van de Coca-Cola Company) en Sisi (Vrumona); Orangina onderscheidt zich doordat er werkelijk vruchtvlees in zit.</p>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
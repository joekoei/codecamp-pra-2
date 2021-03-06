@extends('layout')

@section('content')
<body>
    <div class="container">
        <div class="general">
            <h1>Handzaag</h1>

            <h2>Wat is een Handzaag</h2>
            <img class="Hand-Saw-Foto" id="Hand-Saw-Foto"src="{{asset("img/Hand-Saw-Foto.png")}}" alt="handSaw" width="350px">
            <p>
                Een handzaag is een zaag met een taps toelopend,<br>
                veerkrachtig stalen zaagblad dat voorzien is van een handvat.<br>
                Tegenwoordig gebruikt men zagen voor verschillende, zoals:<br>
                men kan ermee afkorten en mee schulpen. <br>
                In Vlaanderen noemt men de handzaag ook wel "Sint-Jozefszaag",<br>
                of afgekort "jefzaag", een verwijzing naar Sint Jozef,<br>
                patroonheilige van schrijnwerkers en timmerlui.<br>
            </p>

            <h2>Kenmerken</h2>
            <p>
            Het blad is ongeveer 1 mm dik, 400 à 500 mm lang, en circa 100 mm breed.
            De tanden van de zaag (met een lengte van circa 5 mm elk) zijn 'gezet', dat wil zeggen dat ze om beurten naar links en naar rechts zijn gebogen.
            De zetting bedraagt een derde van de bladdikte naar links en een derde naar rechts.
            Dit zorgt voor een bredere zaagsnede zodat het zaagblad niet in het hout klemt en vastloopt.
            Om gemakkelijk te kunnen zagen dienen de tanden niet alleen gezet, maar ook scherp te zijn.
            De zaag kan voorzien zijn van zowel geharde, als ongeharde vertanding.
            Niet geharde tanden zijn opnieuw te zetten en te scherpen met behulp van een zaagvijl en zaagklem.
            </p>

            <h2>Zagen</h2>
            <p>
            Voor het zagen van hout in de lengterichting dienen de tanden onder een andere hoek geslepen te zijn dan bij het afkorten, waarbij dwars op de lengterichting van de vezels wordt gezaagd.
            Bij zagen die geschikt zijn voor het schulpen zijn de tanden haaks geslepen, waardoor deze tijdens het zagen een krul vormen. 
            Bij het afkorten dient de hoek van de tanden tussen de 65 en 75° te liggen. 
            Deze werken dan als een soort mesjes en snijden de houtvezels dwars door.
            </p>
        </div>
    </div>
</body>
@endsection

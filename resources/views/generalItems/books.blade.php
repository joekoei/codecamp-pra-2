@extends('layout')

@section('content')
<div class="container">
    <div class="books">
        <h1>Boeken</h1>
        <p>
            Het boek is een veelgebruikte manier om informatie vast te leggen in de vorm van tekst en afbeeldingen en om deze informatie weer te geven, op te slaan en te verspreiden. Het is een document van vaak niet al te kleine omvang.
        </p>
        <h2>Geschiedenis</h2>
        <p>
        Voor de huidige boekvorm met pagina's, de codex, werd uitgevonden, bestond geschreven informatieoverdracht al in de vorm van inbeiteling op steen, boekrollen van papyrus of perkament, kleitabletten, stukken bot, leren vellen en dergelijke. Korte notities die niet bewaard hoefden te blijven, werden meestal op potscherven geschreven. Dit kwam zo omdat in ieder huishouden schalen, bekers en voorraadvaten van keramiek gebruikt werden en er geregeld wat brak zodat er aan scherven geen gebrek was.
        </p>

        <table id="books">
            <tr>
                <th>Naam van het boek</th>
                <th>Auteur</th>
                <th>Aantal Blz.</th>
                <th>Prijs in €</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->auteur}}</td>
                    <td>{{$book->pages}}</td>
                    <td>{{$book->price}}</td>
                </tr>
            @endforeach
        </table>


    </div>
</div>
@endsection

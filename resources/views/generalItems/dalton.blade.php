@extends('layout')

@section('nav')
    <div class="navbar" id="home">
        <img class="navbar-img" src="{{asset("img/logo.png")}}" alt="logo" width="240px">
        <a id="sec-1" href="#">Home</a>
        <a id="sec-2" href="#">Songteksten</a>
        <a id="sec-3" href="#">Gereedschappen</a>
        <a id="sec-4" href="#">Contacten</a>
    </div>
@endsection
@section('content')
<div class="backgroundcolorGreen">
    <div class="container">
            <div class="dalton">
                <h1>Dalton</h1>

                <h2>Biografie</h2>
                <p>
                    Dalton groeide op in Manchester. Nadat hij zijn school had afgemaakt, ging hij naar het National Youth Theatre. Hij studeerde twee jaar lang aan de Royal Academy of Dramatic Art. In 1966 ging hij naar het Birmingham Repertory Theatre, waar hij hoofdrollen speelde.
                </p>
                <h2>Carriere</h2>
                <div class="daltonLastP">
                    <p>
                        Dalton werd bekend door zijn eerste film, The Lion in Winter, waarin hij de koning van Frankrijk speelde. Omdat Pierce Brosnan door contractuele verplichtingen niet in aanmerking kwam als de opvolger van Roger Moore, werd Dalton gevraagd om de hoofdrol te spelen in de James Bondfilms. Hij zette zich er persoonlijk voor in om de Bondfilms in de geest van de boeken van Ian Fleming te maken. Hij las de boeken en zette een Bond neer die sterk overeenkwam met de persoon zoals Fleming die bedacht had. Hij speelde in de The Living Daylights (1987, met Bondmeisje Maryam d'Abo) en in Licence to Kill (1989, Bondmeisjes Talisa Soto en Carey Lowell). Daarna stopte Dalton met Bond, ging hij acteren in de televisieserie Scarlett en had hij een bijrol in de film Hot Fuzz. Hij speelde verder Julius Caesar in de televisiefilm Cleopatra uit 1999.
                        Hij speelde ook in veel Britse kostuumdrama's, waaronder Wuthering Heights (1970) en Jane Eyre (1983).
                    </p>
                </div>
            </div>
    </div>
</div>
@endsection

@section('footer')
    <div class="footer">
        <div class="footer-text">
            <p>&copy; CodeCamp | Made by DevByte</p>
        </div>
    </div>


@endsection
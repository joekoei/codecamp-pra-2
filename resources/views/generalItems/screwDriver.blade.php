@extends('layout')

@section('content')
<body>
    <div class="container">
        <div class="general">
            <h1>Schroevendraaier</h1>

            <h2>Wat is een Schroevendraaier</h2>
            <img id="schroevedraaier" class="screwdriverFoto" src="{{asset("img/schroevedraaierFoto.jpg")}}" alt="gereedschap" width="250px" height="250px">
            <p>
                Een schroevendraaier is een stuk gereedschap waarmee<br> schroeven worden aangebracht en verwijderd. Het bestaat<br> uit een handvat met een metalen steel waarvan het uiteinde<br> zo gevormd is dat het in de kop van een schroef past.
            </p>
            <h2>verschillende Typen</h2>
                <h3>sleufkopschroevendraaier schroevendraaier</h3>
                <p>
                    Dit wordt meestal de platkop schroevendraaier genoemt. Dit is dus een platte schroevendraaier die je kan ook kan gebruiken met een kruiskop schroef als je het goede formaat hebt, maar het verstandigste is om het met de bijpassende schroef te gebruiken.
                </p>
                <h3>phillipsschroevendraaier PH - of pozidrivschroevendraaier PZ  schroevendraaier</h3>
                <p>
                    Dit zijn schroevendraaiers met heen kruiskop. Het enige verschil is dat je bij de pozidrivschroevendraaier PZ schroevendraaier een extra kruis mankering hebt.
                </p>
                <h3>Torx schroevendraaier</h3>
                <p>
                    Torx is een type schroef- en boutkop; de insparing in de kop lijkt op een zespuntige ster. Dus deze is weer net anders dan de kruiskop.
                </p>

        </div>
    </div>
</body>
@endsection

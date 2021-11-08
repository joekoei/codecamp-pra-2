@extends('layout')

@section('content')
<body>
    <div class="grid-container">
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/handzaagCard.jpg")}}" alt="Zaag" style="width:100%">
                <h1>Handzaag</h1>
                <p><button><a href="{{route('items.handSaw')}}">Handzaag</a></button></p>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/cirkelzaagCard.jpg")}}" alt="Denim Jeans" style="width:100%">
                <h1>Cirkelzaag</h1>
                <p><button><a href="{{route('items.circular')}}">Cirkelzaag</a></button></p>
            </div>
        </div>
    </div>
</body>
@endsection
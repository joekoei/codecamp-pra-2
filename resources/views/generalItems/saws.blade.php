@extends('layout')

@section('content')
<body>
    <div class="grid-container">
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/handzaagCard.jpg")}}" alt="Zaag" style="width:100%">
                <h1>Handzaag</h1>
                <a href="{{route('items.handSaw')}}"><p><button>Handzaag</button></p></a>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/cirkelzaagCard.jpg")}}" alt="Denim Jeans" style="width:100%">
                <h1>Cirkelzaag</h1>
                <a href="{{route('items.circular')}}"><p><button>Cirkelzaag</button></p></a>
            </div>
        </div>
    </div>
</body>
@endsection
@extends('layout')

@section('content')
<body>
    <div class="grid-container-personenAndPersonages">
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/George-Clooney-Card.jpg")}}" alt="George Clooney" style="width:100%">
                <h1>George Clooney</h1>
                <p><button><a href="{{route('items.george')}}">George Clooney</a></button></p>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/Roger-Moore-Card.jpg")}}" alt="RogerMoore" style="width:100%">
                <h1>Roger Moore</h1>
                <p><button><a href="{{route('items.james')}}">Roger Moore</a></button></p>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/Timothy-Dalton-Foto.jpg")}}" alt="Timothy Dalton" style="width:100%">
                <h1>Timothy Dalton</h1>
                <p><button><a href="{{route('items.dalton')}}">Timothy Dalton</a></button></p>
            </div>
        </div>
    </div>
</body>
@endsection
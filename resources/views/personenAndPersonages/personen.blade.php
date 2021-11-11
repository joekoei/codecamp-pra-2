@extends('layout')

@section('content')
<body>
    <div class="grid-container-personenAndPersonages">
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/George-Clooney-Card.jpg")}}" alt="George Clooney" style="width:100%">
                <h1>George Clooney</h1>
                <a href="{{route('items.george')}}"><p><button>George Clooney</button></p></a>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/Roger-Moore-Card.jpg")}}" alt="RogerMoore" style="width:100%">
                <h1>Roger Moore</h1>
                <a href="{{route('items.james')}}"><p><button>Roger Moore</button></p></a>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <img src="{{asset("img/Timothy-Dalton-Foto.jpg")}}" alt="Timothy Dalton" style="width:100%">
                <h1>Timothy Dalton</h1>
                <a href="{{route('items.dalton')}}"><p><button>Timothy Dalton</button></p></a>
            </div>
        </div>
    </div>
</body>
@endsection
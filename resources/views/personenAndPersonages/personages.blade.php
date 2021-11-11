@extends('layout')

@section('content')
<body>
    <div class="grid-container">
        <div class="grid-item">
            <div class="card">
                    <img src="{{asset("img/Luke-Skywalker-Card.jpg")}}" alt="Luke Skywalker" style="width:100%">
                    <h1>Luke Skywalker</h1>
                    <p><button><a href="{{route('items.luke')}}">Luke Skywalker</a></button></p>
                </div>
            </div>
            <div class="grid-item">
                <div class="card">
                    <img src="{{asset("img/Darth-Vader-Card.jpg")}}" alt="Darth Vader" style="width:100%">
                    <h1>Darth Vader</h1>
                    <p><button><a href="{{route('items.dv')}}">Darth Vader</a></button></p>
                </div>
            </div> 
        </div> 
    </div>
</body>
@endsection
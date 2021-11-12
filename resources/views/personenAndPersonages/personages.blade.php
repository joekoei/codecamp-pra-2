@extends('layout')

@section('content')
<body>
    <div class="grid-container">
        <div class="grid-item">
            <div class="card">
                    <img src="{{asset("img/Luke-Skywalker-Card.jpg")}}" alt="Luke Skywalker" style="width:100%">
                    <h1>Luke Skywalker</h1>
                    <a href="{{route('items.luke')}}"><p><button>Luke Skywalker</button></p></a>
                </div>
            </div>
            <div class="grid-item">
                <div class="card">
                    <img src="{{asset("img/Darth-Vader-Card.jpg")}}" alt="Darth Vader" style="width:100%">
                    <h1>Darth Vader</h1>
                    <a href="{{route('items.dv')}}"><p><button>Darth Vader</button></p></a>
                </div>
            </div> 
        </div> 
    </div>
</body>
@endsection
@extends('layout')
@section('content')
<div class="container">
    <div class="content">
        <div class="homePageStyle">
            <img class="Logo-Home-Page" src="{{asset("img/logo.png")}}" alt="logo">
        </div>

        <div id="map"></div>

        <div class="contactInfoHp">
            <div class="contactInfoHpList">
                <ul id="first">
                    <li>Straat:</li>
                    <li>Postcode:</li>
                    <li>Telefooon:</li>
                    <li>Mobiel:</li>
                </ul>
                <ul id="second">
                    <li>Koestraat 1</li>
                    <li>5223AG Den Bosch</li>
                    <li>073-123321123</li>
                    <li>06 987789987</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div class="time">

    </div>
<script>
    function myMap() {
        const db = { lat: 51.697363, lng: 5.293600 };
        var mapProp= {
            center: new google.maps.LatLng(51.697363,5.293600),
            zoom: 16,
        };
        var map = new google.maps.Map(document.getElementById("map"),mapProp);

        const marker = new google.maps.Marker({
            position: db,
            map: map,
        });
    }
</script>
<script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOvxSN9EBp_NzqW5wXNrQAX5pPAV9fiGQ&callback=myMap">
</script>
@endsection

<!-- @section('script')
    <script>
        const updateTime = function(){
            $.ajax({url: "time.php", success: function(response){
                    $('.time').html(response);
                }});
        }
        setInterval(updateTime, 1000);

        updateTime();
    </script>
@endsection -->

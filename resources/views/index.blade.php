@extends('layout')
@section('content')
<div class="container">
    <div class="content">
        <div class="homePageStyle">
            <img src="{{asset("img/logo.png")}}" alt="logo">
        </div>

        <div id="map"></div>

        <div class="tabelHomePage">
                <table id="homePageTable">
                    <tr>
                        <th>Plaats:</th>
                        <th>Adres:</th>
                    </tr>
                    <tr>
                        <td>Den Bosch</td>
                        <td>Koestraat 1</td>
                    </tr>
                </table>

            </div>
    </div>
</div>
    <div class="time">

    </div>
<script>
    function myMap() {
        var mapProp= {
            center: new google.maps.LatLng(51.697363,5.293600),
            zoom: 16,
        };
        var map = new google.maps.Map(document.getElementById("map"),mapProp);
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

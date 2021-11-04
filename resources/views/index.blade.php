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
    const uluru = { lat: 51.697363, lng: 5.293600 };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 16,
        center: uluru,
    });
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
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

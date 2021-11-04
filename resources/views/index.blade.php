@extends('layout')
@section('content')
<div class="container">
    <div class="content">
        <div class="homePageStyle">
            <img src="{{asset("img/logo.png")}}" alt="logo">
        </div>
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

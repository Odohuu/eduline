@extends('layouts.master')

@section('home')
    <div class="container">
        <div class="page-header">
            <h4>Хаяг</h4>
        </div>
        <div class="row">
            <div class="container">
            <div id="map" style="width: 100%; height: 500px;"></div>
            
            <script>
              var panorama;
              function initPano() {
                panorama = new google.maps.StreetViewPanorama(
                    document.getElementById('map'),
                    {
                      position: {lat: 47.9197801, lng: 106.9065383},
                      pov: {heading: 145, pitch: 10},
                      zoom: 0.4
                    });
              }
            </script>

                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP_Yjfd3uYDur8UYZ5nBgkKOZOs0AmcH0&callback=initPano">
                </script>
            <br />
                <div class="address-contact">
                    <address>
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="font-size:20px; padding:6px 6px 6px 0;"> </span><b>   Хаяг:</b> Урт цагаан зүүн талд Дельта төв 302 тоот<br>
                        <span class="glyphicon glyphicon-phone" aria-hidden="true" style="font-size:20px; padding:6px 6px 6px 0;"> </span><b>   Утас:</b>  7011-0503<br>    
                        <span class="glyphicon glyphicon-print" aria-hidden="true" style="font-size:20px; padding:6px 6px 6px 0;"> </span><b>   Факс:</b>  11-320-535<br>  
                        <span class="glyphicon glyphicon-hand-right" aria-hidden="true" style="font-size:14px; padding:6px 6px 6px 0;"> </span><b>   Имэйл:</b>  edulinellc@gmail.com<br>
                        </address>
                    <hr />
                    
                    </div>
            </div>
        </div>
    </div>
    <div class="space"></div>
@stop
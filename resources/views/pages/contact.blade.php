@extends('app2')

@section('welcome')
    <div class="container">
        <div class="page-header">
            <h3>Хаяг</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
            	<iframe width="470" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=47.9194608651526%20106.90686192673638&key=AIzaSyAP_Yjfd3uYDur8UYZ5nBgkKOZOs0AmcH0"></iframe>
            </div>
            <div class="col-md-6">
                <div class="address-contact">
                    <address>
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="font-size:20px; padding:6px 6px 6px 0;"> </span><b>   Хаяг:</b> Урт цагаан зүүн талд Дельта төв 302 тоот<br>
                        <span class="glyphicon glyphicon-phone" aria-hidden="true" style="font-size:20px; padding:6px 6px 6px 0;"> </span><b>   Утас:</b>  7011-0503<br>    
                        <span class="glyphicon glyphicon-print" aria-hidden="true" style="font-size:20px; padding:6px 6px 6px 0;"> </span><b>   Факс:</b>  11-320-535</address>
                    <hr />
                    <img width="455" src="{{url('/images/sites/eduline-address-photo.jpg')}}">
                    </div>
            </div>
        </div>
    </div>
    <div class="space"></div>
@stop
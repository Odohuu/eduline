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
                <div class="address">
                    <address><b>Хаяг:</b> Улаанбаатар Чингэлтэй дүүрэг 1-р хороо Жуулчны гудамж Дельта төв 302 тоот<br><b>Утас:</b>  7011-0503<br>    <b>Факс:</b>  11-320-535</address>
                    <hr />
                    <img width="455" src="{{url('/images/sites/eduline-address-photo.jpg')}}">
                    </div>
            </div>
        </div>
    </div>
    <div class="space"></div>
@stop
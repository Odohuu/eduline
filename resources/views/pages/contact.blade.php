@extends('app2')

@section('welcome')

    <div class="container">
        <div class="page-header">
            <h2>Хаяг</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <iframe width="470" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=47.9194608651526%2C%20106.90686192673638&key=AIzaSyD75z4j9vzLgkS7nwS5xnb-YA_cw-3Zxfo&zoom=17"></iframe>
            </div>
            <div class="col-md-6">
                <div class="address">
                    <span>Улаанбаатар Чингэлтэй дүүрэг 1-р хороо Жуулчны гудамж Дельта төв 302 тоот Утас:  7011-0503     Факс:  11-320-535</span>
                    <hr />
                    <img width="455" src="{{url('/images/sites/eduline-address-photo.jpg')}}">
                    </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
    <hr />
@stop

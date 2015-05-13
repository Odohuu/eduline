@extends('app2')

@section('welcome')
    <div class="">
        <div style="height:200px;background:url('../images/school/Seoul-national-university.jpg') no-repeat center top;"></div>
        <div class="container">
            {{--<img src="{{url('/images/school/INHA-university.jpg')}}">--}}

        </div>
    </div>
    <div class="container">
        <div class="page-header">
        <h1>Seoul National University</h1>
            </div>
        <div class="row page-header">
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li class="master_class__meta"><strong>Зэрэглэл:</strong> 6</li>
                    <li class="master_class__meta"><strong>Вэб сайт:</strong><a href="https://eng.inha.ac.kr/"> eng.inha.ac.kr</a></li>
                    <li class="master_class__meta"><strong>Байршил:</strong> 1 Gwanak-ro, Gwanak-gu, Seoul, South Korea</li>
                </ul>
                <div class="content master_class_intro">
                    <p class="master_class__meta"><strong>Танилцуулга:</strong></p>
                    <p>Сөүлийн их сургууль нь анх 1945 оны 11 сард 100 хүний бүрэлдэхүүнтэй үйл ажиллагаа болон сургалтаа эхлүүлэх саналаа тавьж байсан. Ингээд 1946 оны 8 сард Сөүлийн их сургууль маань байгуулагдсан талаарх хууль тунхаглагдаж 10 сард 9 факультеттай байгуулагдсан. Түүнээс хойш сөүлийн их сургууль нь 16 салбарын 84 тэнхим факультетыг шинээр нээжээ. </p>
                </div>
                <p class="program__link" data-show="courses_1">
                    {{--<a href="#" class="btn btn-green btn-box_color btn-arrow">Course Outline</a>--}}
                </p>
            </div>
            <div class="col-md-6">
                <div class="">
                    <iframe width="455" height="260" src="//www.youtube.com/embed/z8JoRkBczUM" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
@stop
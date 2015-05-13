@extends('app2')

@section('welcome')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myTab li:eq(1) a").tab('show');
        });
    </script>
<div class="container">
    <div class="page-header">
        <h2>Бидний тухай</h2>
    </div>

    <ul class="nav nav-tabs" id="myTab">
        <li><a data-toggle="tab" href="#sectionA">Компаний тухай</a></li>
        <li><a data-toggle="tab" href="#sectionB">Захиралын мэндчилгээ</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Үйл ажиллагаа<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#dropdown1">Түүнийн хуудас</a></li>
                <li><a data-toggle="tab" href="#dropdown2">Үйл ажиллагааны онцлог</a></li>
            </ul>
        </li>
    </ul>

    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <br />
            <h3>Edu-Line LLC</h3>
            <img width="300" src="{{url('/images/sites/logo21.png')}}">
            <p>Edu Line олон улсын сургалтын компанийн үндсэн үйл ажиллагаа нь оюутан залуус, сурагчдыг гадаадад суралцуулан, өндөр чанартай боловсрол олгоход чиглэгддэг. Манай салбар оффис Америк, Канад, Австрали, Солонгос зэрэг улсуудад байрлаж тогтмол үйл ажиллагаа явуулдаг. Edu Line олон улсын сургалтын компани нь Америк, Канад, Австрали, Солонгос зэрэг улс орнуудын дэлхийд хүлээн зөвшөөрөгдсөн их дээд сургууль, коллеж, ахлах сургуулиудтай хамтран ажилладаг.
                Бидний үйл ажиллагаа 2004 оноос эхлэлтэй бөгөөд дээрх хугацаанд БНСУ-ын 50 гаруй их дээд сургууль, коллежид 500 гаруй оюутан залуусыг, Америк, Канад, Австрали улсын 90 орчим их дээд сургууль, коллежид 450 гаруй оюутан залуусыг амжилттай суралцуулж, дэлхийн түвшинд дүйцэхүйц мэдлэг боловсрол эзэмшихэд нь дэмжлэг үзүүлэн, Монгол улсын боловсролын салбарт үнэтэй хувь нэмэр оруулж ирсэн билээ.</p>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Section B</h3>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div id="dropdown1" class="tab-pane fade">
            <h3>Dropdown 1</h3>
            <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros.</p>
        </div>
        <div id="dropdown2" class="tab-pane fade">
            <h3>Dropdown 2</h3>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis dis parturient.</p>
        </div>
    </div>

</div>


@stop

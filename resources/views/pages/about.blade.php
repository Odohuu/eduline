@extends('layouts.master')

@section('welcome')


<div class="container">
    <div class="page-header">
        <h2>Бидний тухай</h2>
    </div>
<embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="800" height="533" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F104355233903604105075%2Falbumid%2F5961198965304655201%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCLumjOiAxpaMUA%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
    <div class="row">
        <div class="tabpanel">
            <div class="col-md-8">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <h2>Eduline ХХК</h2>
                        <p>Edu Line олон улсын сургалтын компанийн үндсэн үйл ажиллагаа нь оюутан залуус, сурагчдыг гадаадад суралцуулан, өндөр чанартай боловсрол олгоход чиглэгддэг. Манай салбар оффис Америк, Канад, Австрали, Солонгос зэрэг улсуудад байрлаж тогтмол үйл ажиллагаа явуулдаг. Edu Line олон улсын сургалтын компани нь Америк, Канад, Австрали, Солонгос зэрэг улс орнуудын дэлхийд хүлээн зөвшөөрөгдсөн их дээд сургууль, коллеж, ахлах сургуулиудтай хамтран ажилладаг.
                            Бидний үйл ажиллагаа 2004 оноос эхлэлтэй бөгөөд дээрх хугацаанд БНСУ-ын 50 гаруй их дээд сургууль, коллежид 500 гаруй оюутан залуусыг, Америк, Канад, Австрали улсын 90 орчим их дээд сургууль, коллежид 450 гаруй оюутан залуусыг амжилттай суралцуулж, дэлхийн түвшинд дүйцэхүйц мэдлэг боловсрол эзэмшихэд нь дэмжлэг үзүүлэн, Монгол улсын боловсролын салбарт үнэтэй хувь нэмэр оруулж ирсэн билээ.</p>
                        <p>
                        <ul>
                            @foreach($people as $porsen)
                                <li>{{ $porsen }}</li>
                            @endforeach
                        </ul>
                        </p>                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <ul id="myTab" class="nav nav-pills nav-stacked" role="tablist">
                    <li role="presentation" class="active" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                    <li role="presentation" ><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">messages</a></li>
                    <li role="presentation" ><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">settings</a></li>
                </ul>
            </div>
            <script>
                $(function () {
                    $('#myTab a:last').tab('show')
                })
            </script>
        </div>
    </div>
    <div id="tabContainer">
        <div id="tabscontent">
            <div class="tabpage" id="tabpage_1">
                <h2>Eduline ХХК</h2>
                <p>Edu Line олон улсын сургалтын компанийн үндсэн үйл ажиллагаа нь оюутан залуус, сурагчдыг гадаадад суралцуулан, өндөр чанартай боловсрол олгоход чиглэгддэг. Манай салбар оффис Америк, Канад, Австрали, Солонгос зэрэг улсуудад байрлаж тогтмол үйл ажиллагаа явуулдаг. Edu Line олон улсын сургалтын компани нь Америк, Канад, Австрали, Солонгос зэрэг улс орнуудын дэлхийд хүлээн зөвшөөрөгдсөн их дээд сургууль, коллеж, ахлах сургуулиудтай хамтран ажилладаг.
                    Бидний үйл ажиллагаа 2004 оноос эхлэлтэй бөгөөд дээрх хугацаанд БНСУ-ын 50 гаруй их дээд сургууль, коллежид 500 гаруй оюутан залуусыг, Америк, Канад, Австрали улсын 90 орчим их дээд сургууль, коллежид 450 гаруй оюутан залуусыг амжилттай суралцуулж, дэлхийн түвшинд дүйцэхүйц мэдлэг боловсрол эзэмшихэд нь дэмжлэг үзүүлэн, Монгол улсын боловсролын салбарт үнэтэй хувь нэмэр оруулж ирсэн билээ.</p>
                <p>
                <ul>
                    @foreach($people as $porsen)
                        <li>{{ $porsen }}</li>
                    @endforeach
                </ul>
                </p>

            </div>
            <div class="tabpage" id="tabpage_2">
                <h2>Захиралын мэндчилгээ</h2>
                <p>Сайн байна уу? Edu-Line Компанид тавтай морилно уу. Манай компани анх байгуулагдахдаа зөвхөн Солонгос улсын их сургуулиудад оюутан залуусаа суралцуулдаг байсан бол өдгөө Америк, Австрали, Канад, Солонгос, Франц, Тайвань, Сингапур, Хятад, Энэтхэг, Малайз зэрэг 10 гаруй улсын 50 гаруй нэр хүнд бүхий сургуулиудад Монголынхоо 1000 гаруй оюунлаг залуусыг хэлний бэлтгэл болон мэргэжлийн бүх чиглэлээр амжилттай суралцуулаад 8 дахь жилтэйгээ золгож байна. Бидний эрхэм зорилт бол нийгэмд хэрэгцээтэй байгаа боловсролын чиг хандлагыг тодорхойлж оюутан сурагчдыг мэргэжлийн сонголтоо зөв хийж чанартай олон улсад хүлээн зөвшөөрөгдсөн боловсрол эзэмшүүлэх дэлхийд үнэлэгдэхүйц боловсон хүчин бэлтгэн гаргахад хувь нэмрээ оруулах явдал билээ. Монголын ирээдүйн хөгжлийн гарц, оюунлаг өндөр боловсролтой хүүхэд залуус та бүхний гарт байна. Ингээд амжилттай суралцаж байгаа оюутан залуус, тэднийг байнга дэмждэг эцэг эх та бүхэнд баярлаж явдгаа илэрхийлэн улам өндөр амжилт хүсье.</p>

            </div>
            <div class="tabpage" id="tabpage_3">
                <h2>Page 3</h2>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                    placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                    elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>
                <p>Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                    erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>
            </div>
            <div class="tabpage" id="tabpage_4">
                <h2>Page 4</h2>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                    placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                    elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>
                <p>Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                    erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>
            </div>
        </div>
        <div id="tabs">
            <ul>
                <li id="tabHeader_1">Компаний тухай</li>
                <li id="tabHeader_2">Захиралын мэндчилгээ</li>
                <li id="tabHeader_3">Түүнийн хуудас</li>
                <li id="tabHeader_4">Үйл ажиллагааны онцлог</li>
            </ul>
        </div>
    </div>
</div>
<script src="{{ asset('js/tabs_old.js') }}"></script>
@stop

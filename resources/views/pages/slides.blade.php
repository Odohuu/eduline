        <div class="main-slide">
        <div class="container-slide">
            <!-- <div class="cloud1"><a href="#" class="btn-link">Нийт онцлох</a></div> -->
            <div class="owl-carousel" style="position: relative;">
                <div class="slide01">
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 480px; bottom: 30px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <img src="{{url('http://eduline.dev/images/articles/20150526-1920x390.jpg')}}">
                </div>
                <div class="slide02" >
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 480px; bottom: 30px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <div style="height:390px;background:url('http://eduline.dev/images/slides/20150503-1920x360-slide.jpg') no-repeat center top;"></div>
                    <!-- <img src="{{url('/images/slides/niseh.jpg')}}"> -->
                </div>
                <div class="slide03">
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 480px; bottom: 30px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <img src="{{url('/images/slides/usa-study.jpg')}}">
                </div>
                <div class="slide04" >
                    <a href="#" class="btn btn-info btn-xs" style="position: absolute; right: 480px; bottom: 30px; z-index: 1; ">Дэлгэрэнгүй</a>
                    <img src="{{url('/images/slides/niseh.jpg')}}">
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    var owl = $('.owl-carousel');
                    owl.owlCarousel({
                        center: true,
                        items: 1,
                        merge:true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsive:{
                            0:{
                                items:1
                            }
                        }
                    });
                })
            </script>
        </div>
    </div>
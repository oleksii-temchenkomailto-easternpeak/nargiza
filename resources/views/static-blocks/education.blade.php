<section class="education" id="education">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="header-block">{{__('common.education')}}</h3>
                <div class="d-flex justify-content-center">
                    <img src="/lib/wp-content/themes/psychologist/img/wave.png" alt="" class="header-block-wave header-block-wave-education">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                @foreach($education->text as $text)
                <div class="block-education d-flex">
                    <div>
                        <img src="/lib/wp-content/themes/psychologist/img/circle.png" alt="" class="education-circle">
                    </div>
                    <p class="education-text">{{$text}}</p>
                </div>
                @endforeach
            </div>
            <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12">
                <div class="education-slider-relative d-flex justify-content-sm-center">
                    <div class="education-slider">
                        @foreach($education->images as $image)
                            <div class="education-slider-in"><a href="{{$image}}" data-fancybox="gallery"><img src="/lib/wp-content/themes/psychologist/img/education-1-big.jpg" alt="" class="education-slider-img"></a></div>
                        @endforeach
                    </div>
                    <div class="block-slider-button">
                        <img src="/lib/wp-content/themes/psychologist/img/button-left.jpg" alt="" class="slider-button-left">
                        <img src="/lib/wp-content/themes/psychologist/img/button-right.jpg" alt="" class="slider-button-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
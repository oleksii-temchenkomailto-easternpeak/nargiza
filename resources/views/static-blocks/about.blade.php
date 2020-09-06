
<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="header-block">{{__('common.about-me')}}</h3>
                <div class="d-flex justify-content-center">
                    <img src="/lib/wp-content/themes/psychologist/img/wave.png" alt="" class="header-block-wave header-block-wave-about">
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                <div class="d-flex justify-content-md-start justify-content-sm-center justify-content-center">
                    <img src="/lib/wp-content/themes/psychologist/img/about.jpg" alt="" class="about-img">
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="block-about-text">
                    @foreach($about->teaser as $index => $teaser)
                    <p class="about-text @if($index+1 ==count($about->teaser)) about-next-none @endif">{{$teaser}}</p>
                    @endforeach
                    <div class="block-about-next">
                        @foreach($about->text as $index => $text)
                            <p class="about-text @if($index+1 ==count($about->text)) about-text-last @endif">{!! $text !!}</p>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-end">
                        <p class="about-text-more">{{__('about.more')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
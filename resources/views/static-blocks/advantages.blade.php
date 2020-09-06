
<section class="advantages" id="advantages">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="header-block">{{__('common.advantage-title-1')}}<br>
                    <span class="header-block-weight">{{__('common.advantage-title-2')}}</span>
                </h3>
                <div class="d-flex justify-content-center">
                    <img src="/lib/wp-content/themes/psychologist/img/wave.png" alt="" class="header-block-wave header-block-wave-advantages">
                </div>
            </div>
            @foreach($advantages as $advantage)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="block-advantages">
                    <div class="d-flex justify-content-center align-items-center block-advantages-img"><img src="{{$advantage->img}}" alt="" class="advantages-img advantages-img-4"></div>
                    <p class="block-advantages-header">{{$advantage->title}}</p>
                    <p class="block-advantages-text">{!! $advantage->text !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
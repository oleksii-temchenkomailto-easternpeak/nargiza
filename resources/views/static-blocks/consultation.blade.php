<section class="consultation" id="service">
    <div class="parallax-consultation" data-type="background" data-speed="40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="header-block header-block-white">{{__('common.consultation-title-1')}} <br>
                        <span class="header-block-weight">{{__('common.consultation-title-2')}}</span>
                    </h3>
                    <div class="d-flex justify-content-center">
                        <img src="/lib/wp-content/themes/psychologist/img/wave.png" alt="" class="header-block-wave header-block-wave-consultation">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    @foreach($consultation as $index => $text)
                        @php
                            $last = ($index+1 == count($consultation));
                        @endphp
                        <div class="block-consultation d-flex @if(!$last) align-items-center @endif">
                            <img src="/lib/wp-content/themes/psychologist/img/circle.png" alt="" class="consultation-circle @if($last) consultation-circle-5 @endif">
                            <p class="consultation-text">{{$text}}</p>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center"><button class="btn-consultation" onClick="_gaq.push(['_trackEvent','Knopka','Zapisatyaobratnui']);">{{__('common.order')}}</button></div>
                </div>
            </div>
        </div>
    </div>
</section>
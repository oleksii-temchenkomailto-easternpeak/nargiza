@php

    $causes = isset($causes)? $causes: [];
    $count = count($causes);
    $split = (int)$count/2;
@endphp
<section class="causes">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="header-block">{{ $count }} {{ trans_choice('common.causes-title-1', $count) }}<br>
                    <span class="header-block-weight">{{ __('common.causes-title-2') }}</span>
                </h3>
                <div class="d-flex justify-content-center">
                    <img src="/lib/wp-content/themes/psychologist/img/wave.png" alt="" class="header-block-wave">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">

            @foreach ($causes as $indexKey => $text)
                <div class="block-cause block-cause-{{1+($indexKey%3)}}{{($indexKey+1 == $count)? ' block-cause-last':''}} d-flex align-items-center">
                    <div class="block-cause-circle d-flex justify-content-center align-items-center">
                        <p class="cause-circle-count">{{$indexKey+1}}</p>
                    </div>
                    <p class="block-cause-text">{!! $text !!}</p>
                </div>
                @if(!(($indexKey+1)%$split))
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                @endif
            @endforeach
            </div>
        </div>
    </div>
</section>


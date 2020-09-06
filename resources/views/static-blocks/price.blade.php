@php
    $priceContacts = [ 'phone', 'email', 'skype'];
@endphp
<section class="price" id="contacts">
    <div class="parallax-price" data-type="background" data-speed="40">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="block-price-left">
                        <h3 class="price-header-left">{{__('common.price-left-title')}}<br>
                        </h3>
                        <div class="d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center justify-content-center">
                            <img src="/lib/wp-content/themes/psychologist/img/wave.png" alt="" class="price-wave">
                        </div>
                        <p class="price-text-left">{!! __('common.price-left-text-1') !!}</p>
                        <p class="price-text-left">{!! __('common.price-left-text-2') !!}</p>
                        <p class="price-text-left">{!! __('common.price-left-text-3') !!}</p>
                        <div class="block-price-contacts">
                            @foreach($priceContacts as $network)
                                @if(!isset($networks->$network))
                                    @continue
                                @endif
                                    <div class="d-flex align-items-center price-contact">
                                        <img src="{{$networks->$network->smallImg}}" alt="" class="price-contact-img">
                                        <a href="{{$networks->$network->href}}" class="price-contact-text">{{$networks->$network->text}}</a>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="block-price-right">
                        <h3 class="price-header-left"> {{__('common.price-right-title-1')}}<br>
                            <span class="price-header-left-weight">{{__('common.price-right-title-2')}}</span></h3>
                        <div class="d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center justify-content-center">
                            <img src="/lib/wp-content/themes/psychologist/img/wave.png" alt="" class="price-wave">
                        </div>
                        <div role="form" class="wpcf7" id="wpcf7-f8-p6-o2" lang="ru-RU" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/#wpcf7-f8-p6-o2" method="post" class="wpcf7-form" novalidate="novalidate">
                                @csrf
                                <p><span class="wpcf7-form-control-wrap text-109"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required price-input" aria-required="true" aria-invalid="false" placeholder="{{__('common.price-placeholder-name')}}"/></span><br/>
                                    <span class="wpcf7-form-control-wrap tel-839"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel price-input tel" aria-required="true" aria-invalid="false" placeholder="+380 __ - ___ - __ - __"/></span><br/>
                                    <span class="wpcf7-form-control-wrap text-110"><input type="text" name="skype" value="" size="40" class="wpcf7-form-control wpcf7-text price-input" aria-invalid="false" placeholder="{{__('common.price-placeholder-skype')}}"/></span></p>
                                <p><input type="submit" value="{{__('common.order')}}" class="wpcf7-form-control wpcf7-submit price-submit"/></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>            </div>
                </div>
            </div>
        </div>
    </div>
</section>
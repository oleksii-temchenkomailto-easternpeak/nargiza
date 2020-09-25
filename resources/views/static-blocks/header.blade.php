@php
    $headerContacts = [ 'phone', 'email'];
@endphp
<header id="main">
    <div class="header-top-relative menu-hide-mobile">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3  col-lg-2 col-md-1 col-sm-12 col-12">
                        <div class="d-flex align-items-center block-header-left">
                            <a href="{{ url('/')}}"><img src="/themes/psychologist/img/logo.png" alt="" class="logo-header"></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-11 col-sm-12 col-12">
                        <div class="d-flex justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-sm-center justify-content-center block-header-right-bottom">
                            <ul id="menu-menu" class="menu-header"><li id="menu-item-11" class="active menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#main">{{ __('navigation.main') }}</a></li>
                                <li id="menu-item-12" class="mobile-visible menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#advantages">{{ __('navigation.advantages') }}</a></li>
                                <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="#service">{{ __('navigation.service') }}</a></li>
                                <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="#about">{{ __('navigaabout.main') }}</a></li>
                                <li id="menu-item-15" class="mobile-visible menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="#education">{{ __('navigation.education') }}</a></li>
                                <li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a href="#questions">{{ __('navigation.questions') }}</a></li>
{{--                                <li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="#article">{{ __('navigation.article') }}</a></li>--}}
                                <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="#contacts">{{ __('navigation.contacts') }}</a></li>
                            </ul>              </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-contacts">
                        @foreach($headerContacts as $network)
                            @if(!isset($networks->$network))
                                @continue
                            @endif
                            <div class="block-header-contacts d-flex justify-content-end">
                                <div class="d-flex align-items-center header-contact">
                                    <img src="{{$networks->$network->smallImg}}" alt="" class="header-contact-img">
                                    <a href="{{$networks->$network->href}}" class="header-contact-text">{{$networks->$network->text}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="header-text-main">{!! str_replace("\n", '<br />', e(__('common.quote_text'))) !!}
                    </h2>
                    <p class="header-text-small">{{ __('common.quote_sign') }}</p>
                    <div class="d-flex justify-content-center">
                        <button onClick="/*ga('send', 'event', 'Knopka', 'Zapisatyaobratnui');*/" class="btn-header">{{ __('common.order') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

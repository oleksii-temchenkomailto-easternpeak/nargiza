@php
    $networksList = [ 'whatsapp', 'viber', 'telegram', 'instagram'];
@endphp
<section class="networks">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="block-networks">
                    <img src="/lib/wp-content/themes/psychologist/img/rectangle.png" alt="" class="networks-rectangle">
                    <h3 class="header-block-networks">{{__('common.network-title-1')}}<br>
                        <span class="header-block-weight-networks">{{__('common.network-title-2')}}</span> {{__('common.network-title-3')}}<br>
                        {{__('common.network-title-4')}}
                    </h3>
                    <div class="d-flex justify-content-center block-position-relative">
                        @foreach($networksList as $network)
                            @if(!isset($networks->$network))
                                @continue
                            @endif
                            <img src="/lib/wp-content/themes/psychologist/img/wave-network.png" alt="" class="wave-network">
                            <div class="block-network d-flex justify-content-center flex-wrap">
                                <a href="{{$networks->$network->href}}"><img src="{{$networks->$network->img}}" alt="" class="network"></a>
                                <a href="{{$networks->$network->href}}" target="_blank" class="network-text">{{$networks->$network->text}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
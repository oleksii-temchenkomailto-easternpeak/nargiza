@php
//    $contactsFooter = ['skype', 'whatsapp', 'viber', 'facebook', 'instagram', 'telegram', ];

    $contactsFooter = [ 'phone'/*,'email'*/, 'viber', 'facebook', 'instagram', 'telegram'];
@endphp
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="d-flex justify-content-between align-items-center block-footer">
                    <p class="footer-text">{{ __('common.copyright', ['year' => date("Y")]) }}</p>
                    <div class="d-flex justify-content-sm-center justify-content-center">
                        @foreach($contactsFooter as $network)
                            @if(!isset($networks->$network))
                                @continue
                            @endif
                        <a href="{{$networks->$network->href}}" class="footer-network" target="_blank"><img src="{{$networks->$network->smallImg}}" alt="" class="footer-network-img"></a>
                        -- @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
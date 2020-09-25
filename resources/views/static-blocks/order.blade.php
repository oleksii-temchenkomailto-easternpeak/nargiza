<!-- BOX-MODAL -->
<section class="box-modal">
    <div class="d-flex justify-content-center align-items-center box-modal-flex">
        <div class="block-box-modal">
            <img src="/lib/wp-content/themes/psychologist/img/close.jpg" alt="" class="close-box-modal">
            <h2 class="box-modal-header">{{__('common.order-title')}}</h2>
            <div role="form" class="wpcf7" id="wpcf7-f54-o3" lang="ru-RU" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="/order" method="post" class="wpcf7-form d-flex justify-content-center flex-wrap box-modal-form" novalidate="novalidate">
                    @csrf
                    <p><span class="wpcf7-form-control-wrap span-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required box-modal-input" aria-required="true" aria-invalid="false" placeholder="Ваше имя"/></span><br/>
                        <span class="wpcf7-form-control-wrap span-phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel box-modal-input tel" aria-required="true" aria-invalid="false" placeholder="+380 __ - ___ - __ - __"/></span><br/>
                        <input type="submit" value="{{__('common.order')}}" class="wpcf7-form-control wpcf7-submit box-modal-submit"/></p>
                    <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>      </div>
    </div>
</section>
<!-- BOX-MODAL END -->


<!-- BOX-MODAL-SUCCESS -->
<div class="box-modal-success">
    <div class="d-flex justify-content-center align-items-center box-modal-flex">
        <div class="block-box-modal block-box-modal-success">
            <img src="/lib/wp-content/themes/psychologist/img/close.jpg" alt="" class="close-box-modal">
            <p class="modal-success-text">{{__('common.order-success-text-1')}}</p>
            <p class="modal-success-text-connect">{!! __('common.order-success-text-2') !!}</p>
            <div class="d-flex justify-content-center"><button class='modal-success-good'>{{__('common.order-success-button')}}</button></div>
        </div>
    </div>
</div>
<!-- BOX-MODAL-SUCCESS END -->
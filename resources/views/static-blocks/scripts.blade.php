<script>
    $('.education-slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        loop: false,
        infinite: false,
        slidesToShow: 1,
        nextArrow: '.slider-button-right',
        prevArrow: '.slider-button-left',
        dots: false,
        speed: 700,
    });
    $('[data-fancybox="gallery"]').fancybox({
        thumbnails: false,
    });
</script>
<script type="text/javascript">
    document.body.onload = function() {
        var preloader = document.getElementById('page-preloader');
        var body = document.getElementById('body');
        setTimeout(function() {
            if (!preloader.classList.contains('done')) {
                preloader.classList.add('done');
                body.classList.add('scroll');
            }
        }, 1000);
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        // SHOW AND HIDE
        $('.block-article').click(function() {
            $(this).parents('.block-portfolio-main').find('.box-modal-work').show(600);
            $('body').addClass('body-fixed');
        });
        $('.close-box-modal, .modal-success-good').click(function() {
            $('.box-modal, .box-modal-success, .box-modal-work').hide(600);
            $('body').removeClass('body-fixed');
            $('body').removeClass('body-fixed-2');
        });
    });
</script>
<script type="text/javascript">
    jQuery( function($){
        $(".data").mask("99/99/9999");
        $(".tel").mask("+380 99 - 999 - 99 - 99");
        $(".cpf").mask("999.999.999-99");
        $(".cnpj").mask("99.999.999/9999-99");
    });
</script>
<script type="text/javascript">
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '8' == event.detail.contactFormId ) {
            _gaq.push(['_trackEvent', 'Knopka2','Zapisatyapolnui']);
        }
    }, false );
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"{{ str_replace('/', '\\/', url('/')) }}\/contact-form","namespace":"contact-form-7\/v1"}};
    /* ]]> */
</script>
<script type='text/javascript' src='/lib/js/contact-form-7-scripts.js'></script>
<script type='text/javascript' src='/lib/js/wp-embed.min.js'></script>

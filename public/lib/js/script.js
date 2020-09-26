var menu_selector = ".menu-header"; // РџРµСЂРµРјРµРЅРЅР°СЏ РґРѕР»Р¶РЅР° СЃРѕРґРµСЂР¶Р°С‚СЊ РЅР°Р·РІР°РЅРёРµ РєР»Р°СЃСЃР° РёР»Рё РёРґРµРЅС‚РёС„РёРєР°С‚РѕСЂР°, РѕР±РµСЂС‚РєРё РЅР°С€РµРіРѕ РјРµРЅСЋ.
function onScroll(){
    var scroll_top = $(document).scrollTop();
    $(menu_selector + " a").each(function(){
        var hash = $(this).attr("href");
        var target = $(hash);
        if (target.position().top-2 <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
            $(menu_selector + " a.active").removeClass("active");
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });
}
$(document).ready(function() {
    // MENU SLIDE
    $('.navbar-toggle-menu').click(function() {
        $('.menu-header').slideDown(600);
        $('.navbar-toggle-menu').animate({
            'opacity':'hide'
        },0);
        $('.close-navbar-toggle-menu').animate({
            'opacity':'show'
        },0);
    });
    $('.close-navbar-toggle-menu').click(function() {
        $('.menu-header').slideUp(600);
        $('.navbar-toggle-menu').animate({
            'opacity':'show'
        },0);
        $('.close-navbar-toggle-menu').animate({
            'opacity':'hide'
        },0);
    });

    var wid3 = $(window).width();
    $('.footer-link-img').mouseover(function() {
        $('.footer-link-img').attr("src", 'https://www.yanova.in.ua/wp-content/uploads/2018/09/shafem-active-1.png');
    });
    $('.footer-link-img').mouseout(function() {
        $('.footer-link-img').attr("src", 'https://www.yanova.in.ua/wp-content/uploads/2018/09/shafem-1.png');
    });
// SHOW AND HIDE
    $('.btn-header, .btn-consultation').click(function() {
        $('.box-modal').show(600);
        $('body').addClass('body-fixed-2');
    });
    $('.block-article').click(function() {
        $(this).parents('.block-portfolio-main').find('.box-modal-work').show(600);
        $('body').addClass('body-fixed');
        if(wid3<992) {
            $('.btn-close-box-modal').show(0);
        }
        else {
        }
    });
    $('.close-box-modal, .modal-success-good, .btn-close-box-modal').click(function() {
        $('.btn-close-box-modal').hide(0);
        $('.box-modal, .box-modal-success, .box-modal-work,.box-modal-success-sub,.btn-close-box-modal').hide(600);
        $('body').removeClass('body-fixed');
        $('body').removeClass('body-fixed-2');
        $('.wpcf7-form-control').removeClass('wpcf7-not-valid');
    });

    $(".about-text-more").click(function() {
        $('.about-next-none').hide(0);
        $('.block-about-next').show(0);
        $('.about-text-more').hide(0);
    });
// ACCORDION


    $('.acc-link').click(function(event){

        var link = $(this);
        var block = link.closest('.block-question');
        var text = $('.acc-text', block);
        var icon = $('.acc-block-icon', block);

        var isOpened = text.is(':visible');

        $('.acc-text').slideUp(500);
        $('.acc-block-icon').attr('src','https://www.yanova.in.ua/wp-content/uploads/2018/09/add-1.png');

        if(!isOpened){
            text.slideDown(500);
            icon.attr('src','https://www.yanova.in.ua/wp-content/uploads/2018/09/minus-1.png');
        }

    });

    $('.acc-link').first().click();

// SCROLL
    var wid = $(window).width();

    $('.menu-header a').click(function() {
        if(wid<768) {
            $('.menu-header').slideUp(600);
            $('.navbar-toggle-menu').animate({
                'opacity':'show'
            },0);
            $('.close-navbar-toggle-menu').animate({
                'opacity':'hide'
            },0);
        }
        else {
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 600 && wid>768) {
            $('.logo-header').addClass('logo-header-fixed');
            $('.header-top').addClass('header-top-fixed');
            $('.header-contact-img').addClass('header-contact-img-fixed');
            $('.header-contact-text').addClass('header-contact-text-fixed');
            $('.menu-header').addClass('menu-header-fixed');
            $('.col-contacts').addClass('col-contacts-fixed');
        }
        else if ($(this).scrollTop() >= 600 && wid<=768) {
            $('.logo-header-xs').addClass('logo-header-fixed');
            $('.header-top').addClass('header-top-fixed');
            $('.header-contact-img').addClass('header-contact-img-fixed');
            $('.header-contact-text').addClass('header-contact-text-fixed');
            $('.menu-header').addClass('menu-header-fixed');
            $('.col-contacts').addClass('col-contacts-fixed');
            $('.col-menu-mobile').addClass('col-menu-mobile-fixed');
        }
        else {
            $('.logo-header').removeClass('logo-header-fixed');
            $('.header-top').removeClass('header-top-fixed');
            $('.header-contact-img').removeClass('header-contact-img-fixed');
            $('.header-contact-text').removeClass('header-contact-text-fixed');
            $('.menu-header').removeClass('menu-header-fixed');
            $('.col-contacts').removeClass('col-contacts-fixed');
            $('.col-menu-mobile').removeClass('col-menu-mobile-fixed');
            $('.logo-header-xs').removeClass('logo-header-fixed');
        }
    });

    $(document).on("scroll", onScroll);
    $("a[href^=#]").click(function(e){
        e.preventDefault();
        $(document).off("scroll");
        $(menu_selector + " a.active").removeClass("active");
        $(this).addClass("active");
        var hash = $(this).attr("href");
        var target = $(hash);
        $("html, body").animate({
            scrollTop: target.offset().top
        }, 1000, function(){
            window.location.hash = hash;
            $(document).on("scroll", onScroll);
        });
    });
});

$(document).mouseup(function (e) {
    var wid1 = $(window).width();
    var mobile = $('.menu-hide-mobile');
    var container = $(".box-modal-flex-work");
    if (container.has(e.target).length === 0){
        $('.box-modal-work').hide(600);
        $('body').removeClass('body-fixed');
        $('.btn-close-box-modal').hide(0);
    }
    else {

    }
    if (mobile.has(e.target).length === 0 && wid1<768){
        $('.menu-header').slideUp(600);
        $('.navbar-toggle-menu').animate({
            'opacity':'show'
        },0);
        $('.close-navbar-toggle-menu').animate({
            'opacity':'hide'
        },0);
    }
    else {
    }
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    var id = event.detail.contactFormId;
    if ( id == 8 || id == 54 ) {
        $('.box-modal-success').show(600);
        $('body').addClass('body-fixed-2');

        $('.box-modal, .box-modal-work').hide(600);
        $('body').removeClass('body-fixed');
        $('body').removeClass('body-fixed-2');
    } else if (id == 55)
        $('.box-modal-success-sub').show(600);
}, false );
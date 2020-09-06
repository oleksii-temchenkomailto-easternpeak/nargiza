@php

    $networks = new \StdClass;


    $networks->phone = new \StdClass;
    $networks->phone->href = 'tel:+380503031910';
    $networks->phone->smallImg = '/lib/wp-content/themes/psychologist/img/phone.png';
    $networks->phone->text = '+38 (050) 303 1910';

    $networks->email = new \StdClass;
    $networks->email->href = 'mailto:?subject=' . e('common.email-subject');
    $networks->email->smallImg = '/lib/wp-content/themes/psychologist/img/mail.png';
    $networks->email->text = 'yanova.psi@gmail.com';


    $networks->skype = new \StdClass;
    $networks->skype->href = 'skype:EUG_PRO';
    $networks->skype->text = 'skype';
    $networks->skype->smallImg = '/lib/wp-content/themes/psychologist/img/footer-skype.png';

    $networks->whatsapp = new \StdClass;
    $networks->whatsapp->href = 'https://wa.me/380503031910';
    $networks->whatsapp->smallImg = '/lib/wp-content/themes/psychologist/img/footer-whatsapp.png';
    $networks->whatsapp->img = '/lib/wp-content/themes/psychologist/img/whatsapp.png';
    $networks->whatsapp->text = 'Whatsapp';

    $networks->viber = new \StdClass;
    $networks->viber->href = 'viber://add?number=+380503031910';
    $networks->viber->smallImg = '/lib/wp-content/themes/psychologist/img/footer-viber.png';
    $networks->viber->img = '/lib/wp-content/themes/psychologist/img/viber.png';
    $networks->viber->text = 'Viber';

    $networks->facebook = new \StdClass;
    $networks->facebook->href = 'https://www.facebook.com/%D0%9B%D1%8E%D0%B1%D0%BE%D0%B2%D1%8C-%D0%AF%D0%BD%D0%BE%D0%B2%D0%B0-%D0%BF%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3-296616707800319/?modal=admin_todo_tour';
    $networks->facebook->smallImg = '/lib/wp-content/themes/psychologist/img/fb.png';

    $networks->instagram = new \StdClass;
    $networks->instagram->href = 'https://www.instagram.com/lyubov.yanova/?r=nametag';
    $networks->instagram->smallImg = '/lib/wp-content/themes/psychologist/img/insta.png';
    $networks->instagram->img = '/lib/wp-content/themes/psychologist/img/insta-main.png';
    $networks->instagram->text = 'Instagram';

    $networks->telegram = new \StdClass;
    $networks->telegram->href = 'tg://resolve?domain=@lyubov_yanova';
    $networks->telegram->smallImg = '/lib/wp-content/themes/psychologist/img/footer-telegram.png';
    $networks->telegram->img = '/lib/wp-content/themes/psychologist/img/telegram.png';
    $networks->telegram->text = 'Telegram';

$causes = [];
$causes[] = 'Если вам кажется, что все вокруг <br>
                    рушится, что вы ходите по кругу.';
$causes[] = 'Есть понимание того, что с проблемой <br>
                    нельзя жить и надо что-то делать, но ЧТО?';
$causes[] = 'Сложные отношения с семьей,  <br>
                    коллегами и друзьями.';
$causes[] = 'Столкнулись с кризисом среднего возраста <br>
                    и Вам нужна поддержка.';
$causes[] = 'Низкая самооценка, комплексы, <br>
                    неуверенность в себе.';
$causes[] = 'Отсутствие радости в жизни, плохое <br>
                    настроение, раздражительность, усталость.';

$advantages = new \StdClass;
$advantages->advantage1 = new \StdClass;
$advantages->advantage1->title = 'Свободу';
$advantages->advantage1->img = '/lib/wp-content/themes/psychologist/img/advantages-1.png';
$advantages->advantage1->text = 'Сможете сами выбирать,<br>
                    что делать. Ставить и<br>
                    достигать цели.';
$advantages->advantage2 = new \StdClass;
$advantages->advantage2->title = 'Радость к жизни';
$advantages->advantage2->img = '/lib/wp-content/themes/psychologist/img/advantages-2.png';
$advantages->advantage2->text = 'Увидеть себя и<br>
                    мир в новом свете.<br>
                    Адекватно реагировать<br>
                    на трудности.';
$advantages->advantage3 = new \StdClass;
$advantages->advantage3->title = 'Ценные отношения';
$advantages->advantage3->img = '/lib/wp-content/themes/psychologist/img/advantages-3.png';
$advantages->advantage3->text = 'Основанные на<br>
                    верности, понимании<br>
                    и взаимоподдержке.<br>
                    Наладите контакт с<br>
                    родными и близкими, друзьями и коллегами.';
$advantages->advantage4 = new \StdClass;
$advantages->advantage4->title = 'Смелость';
$advantages->advantage4->img = '/lib/wp-content/themes/psychologist/img/advantages-4.png';
$advantages->advantage4->text = 'Принимать настоящего<br>
                    себя, свои ошибки.<br>
                    Не зависеть от чужого<br>
                    мнения.';
$consultation = [];
$consultation[] = 'В ходе которой мы познакомимся';
$consultation[] = 'проясним ситуацию';
$consultation[] = 'определим Ваши цели и ожидания';
$consultation[] = 'выберем удобный формат консультаций';
$consultation[] = 'Иногда есть необходимость в решении одной конкретной проблемы, например, сделать выбор или определить направление, а в терапии необходимости нет. Может оказаться и наоборот. Мы обсудим это и придем к общему решению';

$about = new \StdClass;
$about->teaser = [];
$about->teaser[] = 'Чтобы мы могли доверять друг другу, позвольте представиться - меня зовут Любовь Янова, я практикующий психолог.';
$about->teaser[] = 'Веду частную практику, оказываю психологические консультации для психически здоровых людей, которые попали в сложные жизненные обстоятельства и стремятся найти выход, хотят развития и улучшения качества жизни.';
$about->teaser[] = 'Я всегда любила людей и хотела им помогать. <br>В детстве мечтала быть врачом, но потом решила стать…';
$about->text = [];
$about->text[] = 'Я всегда любила людей и хотела им помогать.<br>
                            В детстве мечтала быть врачом, но потом решила стать учителем. Поэтому первое образование педагогическое. А второе - психологическое, и это был осознанный, взрослый выбор. ';
$about->text[] = 'Мечты сбываются... И пусть я не в белом халате, но все равно помогаю людям. В профессию пришла через непростой личный опыт. И осталась. И очень рада. Здесь я чувствую себя на своём месте. Именно в этой профессии соединились два желания делиться и помогать.';
$about->text[] = 'В своей практике использую методики из различный направлений психологии (когнитивно - поведенческая терапия, личностно - центрированная терапия, коучинг).';
$about->text[] = 'Постоянно  повышаю свою квалификацию: читаю профессиональную литературу, прохожу обучающие программы, участвую в научно-практических семинарах. Соблюдаю этические принципы. Опыт личной терапии. Работа с супервизором.';
$about->text[] = 'Консультирование проводится  конфиденциально. Информация о клиентах, сведения об их личной жизни, самом факте обращения за помощью не будет передана третьим лицам. Кроме того, вы можете не называть свое настоящее имя и другие личные данные.';
$education = new \StdClass;
$education->text = [];
$education->text[] = 'Харьковский национальный университет им. В.Н. Каразина. Психолог.';
$education->text[] = 'Харьковский государственный педагогический университет
                        им. Г.С. Сковороды. Преподаватель истории.';
$education->text[] = 'Закончила первый курс обучающей программы
                        подготовки специалистов по Прикладному Анализу Поведения уровня ВСаВА "Фундаментальные концепции, принципы и методы поведенческого анализа" в Московском Центре Дистанционного обучения.';
$education->text[] = 'Закончила второй курс обучающей программы подготовки специалистов по Прикладному Анализу Поведения уровня ВСаВА "Использование обучающих процедур и принципов АВА для обучения новым навыкам" в Московском Центре Дистанционного обучения.';
$education->text[] = 'Семинар Майлза Дауни “Бизнес-коучинг и лидерство”.';
$education->text[] = 'Академия ТРИЗ, курс Страхов нет с Алексеем Гарвашем, Петр Павел Сурков.';
$education->text[] = 'Терапевтическая обучающая группа под руководством доктора психологических наук, проф. А.С. Кочаряна.';
$education->text[] = 'Прошла обучение в Международном Эриксоновском Университет коучинга. Профессиональный коуч.';
$education->text[] = 'Закончила обучение методу Эмоционально- образной терапии, 1 ступень. В центре эмоционально-образной терапии Линде.';
$education->images = [];
$education->images[] = '/lib/wp-content/themes/psychologist/img/education-1-big.jpg';
$education->images[] = '/lib/wp-content/themes/psychologist/img/education-2.jpg';
$education->images[] = '/lib/wp-content/themes/psychologist/img/education-3.jpg';
$education->images[] = '/lib/wp-content/themes/psychologist/img/education-4.jpg';
$education->images[] = '/lib/wp-content/themes/psychologist/img/education-5.jpg';
$education->images[] = '/lib/wp-content/themes/psychologist/img/education-6.jpg';
$education->images[] = '/lib/wp-content/themes/psychologist/img/education-7.jpg';
@endphp

<!-- Header -->
<!DOCTYPE html>
<html lang="ru">
<head>

    @include('static-blocks/google-tag-manager')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('common.title') }}</title>
    <link rel="shortcut icon" href="/themes/psychologist/img/favicon.png">

{{--    @TODO--}}
    <!-- SEO -->
    <!--
    <meta name="description" content="Описание сайта">
    <meta name="keywords" constent="Ключевые слова">
    <meta name="author" content="Автор">-->


    <!-- ПОДКЛЮЧАЕМ СТИЛИ -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    @include('static-blocks/facebook-pixel')


    <!-- This site is optimized with the Yoast SEO plugin v13.0 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="{{ __('common.description') }}"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="{{url('/')}}"/>
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ __('common.title') }}"/>
    <meta property="og:description" content="{{ __('common.description') }}"/>
    <meta property="og:url" content="{{url('/')}}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="{{ __('common.title') }}"/>
    <meta name="twitter:description" content="{{ __('common.description') }}"/>
    <script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"{{url('/')}}#website","url":"{{url('/')}}","name":"","potentialAction":{"@type":"SearchAction","target":"{{url('/')}}?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"{{url('/')}}#webpage","url":"{{url('/')}}","inLanguage":"ru-RU","name":"\u041a\u043e\u043d\u0441\u0443\u043b\u044c\u0442\u0430\u0446\u0438\u044f, \u0443\u0441\u043b\u0443\u0433\u0438 \u043f\u0441\u0438\u0445\u043e\u043b\u043e\u0433\u0430 \u043e\u043d\u043b\u0430\u0439\u043d \u043f\u043e \u0441\u043a\u0430\u0439\u043f\u0443 \u041b\u044e\u0431\u043e\u0432\u044c \u042f\u043d\u043e\u0432\u0430","isPartOf":{"@id":"{{url('/')}}/#website"},"datePublished":"2018-09-13T13:45:38+00:00","dateModified":"2020-07-28T08:03:37+00:00","description":"\u0423\u0441\u043b\u0443\u0433\u0438 \u043f\u0440\u043e\u0444\u0435\u0441\u0441\u0438\u043e\u043d\u0430\u043b\u044c\u043d\u043e\u0433\u043e \u043f\u0441\u0438\u0445\u043e\u043b\u043e\u0433\u0430 \u041b\u044e\u0431\u043e\u0432\u0438 \u042f\u043d\u043e\u0432\u043e\u0439. \u0412\u043e\u0437\u043c\u043e\u0436\u043d\u043e\u0441\u0442\u044c \u043a\u043e\u043d\u0441\u0443\u043b\u044c\u0442\u0430\u0446\u0438\u0438 \u043e\u043d\u043b\u0430\u0439\u043d \u0438 \u043f\u0440\u0438 \u0432\u0441\u0442\u0440\u0435\u0447\u0435. \u0410\u043d\u043e\u043d\u0438\u043c\u043d\u043e\u0441\u0442\u044c. \u260e \u0417\u0430\u043f\u0438\u0441\u044b\u0432\u0430\u0439\u0442\u0435\u0441\u044c 050-303-1910."}]}</script>
    <!-- / Yoast SEO plugin. -->

    <link rel='dns-prefetch' href='//ajax.googleapis.com'/>
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com'/>
    <link rel='dns-prefetch' href='//s.w.org'/>

{{--    <script type="text/javascript">--}}
{{--        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"{{ str_replace('/', '\\/', url('/')) }}\/lib\/js\/emoji-release.min.js"}};--}}
{{--        !function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);--}}
{{--    </script>--}}
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <link rel='stylesheet' id='wp-block-library-css' href='/lib/css/style.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='contact-form-7-css' href='/lib/css/contact-form-7-styles.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='style-css' href='/lib/css/psychologist-style.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='slick-css' href='/lib/css/slick.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='slick-theme-css' href='/lib/css/slick-theme.css' type='text/css' media='all'/>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js?ver=5.3.4'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js?ver=5.3.4'></script>
    <script type='text/javascript' src='/lib/js/script.js'></script>
    <script type='text/javascript' src='/lib/js/slick.min.js'></script>
    <script type='text/javascript' src='/lib/js/loadmore.js'></script>
    <script type='text/javascript' src='/lib/js/jquery.maskedinput.min.js'></script>
{{--    <link rel='https://api.w.org/' href='https://www.yanova.in.ua/wp-json/'/>--}}
{{--    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.yanova.in.ua/xmlrpc.php?rsd"/>--}}
{{--    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.yanova.in.ua/wp-includes/wlwmanifest.xml"/>--}}
{{--    <meta name="generator" content="WordPress 5.3.4"/>--}}
    <link rel='shortlink' href='{{url('/')}}'/>
{{--    <link rel="alternate" type="application/json+oembed" href="https://www.yanova.in.ua/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.yanova.in.ua%2F"/>--}}
{{--    <link rel="alternate" type="text/xml+oembed" href="https://www.yanova.in.ua/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.yanova.in.ua%2F&#038;format=xml"/>--}}
<!-- here-->
    <script type="text/javascript">
        var ajaxurl = '{{url('/admin')}}'; ///@TODO
    </script>
</head>
<body id='body' class="no-scroll">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQZ6RS6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- PREOLOAD -->
<div id='page-preloader' class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- PRELOAD END -->

<div class="wrapper">


    @include('static-blocks/header')
    @include('static-blocks/causes')
    @include('static-blocks/networks')
    <button class="btn-close-box-modal">{{ __('common.back-to-main') }}</button>
    @include('static-blocks/advantages')
    @include('static-blocks/consultation')
    @include('static-blocks/about')
    @include('static-blocks/education')
    @include('static-blocks/questions')
    @include('static-blocks/articles')
    @include('static-blocks/subscription')
    @include('static-blocks/price')
    @include('static-blocks/footer')
    @include('static-blocks/order')

</div>

@include('static-blocks/scripts')

</body>
</html><!-- Footer -->
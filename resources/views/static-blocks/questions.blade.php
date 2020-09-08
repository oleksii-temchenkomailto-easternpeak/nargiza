@php
    $data = [];
    $data[] = [
        'question' => 'Почему нужно обращаться к психологу? Разве я самостоятельно не справлюсь со своими проблемами?',
        'answer' => 'Наверняка, Вы уже искали ответы в книгах, на страницах психологических сайтов, у друзей/подруг. И скорей всего только больше запутались. Дело в том, что проблемы не решаются на том уровне, на котором появляются. Чтобы что-то изменить нужно смотреть шире. Иногда, для того что бы просто осознать в чем же именно причина, необходимы услуги психолога.',
    ];
    $data[] = [
        'question' => 'Как может помочь психолог если он не испытал то, что я?',
        'answer' => 'Все случаи индивидуальны и не предполагают использование жизненного опыта. Каждый человек уникальный, с уникальными проблемами. Я же помогаю Вам добраться до глубины проблемы, осознать ее и проработать.',
    ];
    $data[] = [
        'question' => 'Кто обращается к психологу?',
        'answer' => 'Ко мне обращаются психически здоровые люди, оказавшиеся в сложных жизненных ситуациях.  Консультация психолога это  способ собраться с мыслями, задать себе правильные вопросы, услышать свое подсознание, увидеть ситуацию под другим углом. ',
    ];
    $data[] = [
        'question' => 'Обратиться за помощью - слабость?',
        'answer' => 'Наоборот, только сильные люди готовы взять на себя ответственность за происходящее, признать что им нужна психологическая помощь. Слабые, будут искать оправдания и виноватых вокруг. Сильные, будут искать способы решения старых проблем. Не закрывать глаза, не отворачиваться от сложных и неприятных моментов, а проработать их и изменить жизнь к лучшему.',
    ];
    $data[] = [
        'question' => 'Консультация психолога онлайн и консультация в кабинете… Что эффективнее? Стоит ли стремиться к личной встрече?',
        'answer' => 'Консультация психолога по скайпу, уже привычное для многих явление. Skype, Viber, WhatsApp - передаёт звук и изображение собеседника и позволяет полноценно коммуницировать здесь и сейчас.
                            Мне, как психологу, достаточно возможностей видеозвонка для помощи клиенту. А вот достаточно ли этого Вам или есть потребность в личной встрече, поймёте когда попробуете. ',
    ];
@endphp
<section class="questions" id="questions">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="header-block header-block-questions">{{__('common.faq-title-1')}}<br>
                    <span class="header-block-weight">{{__('common.faq-title-2')}}</span>
                </h3>
                <div class="d-flex justify-content-center">
                    <img src="/lib/wp-content/themes/psychologist/img/wave.png" alt="" class="header-block-wave header-block-wave-questions">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @foreach($data as $question)
                    <div class="block-question">
                        <div class="d-flex align-items-center block-question-in block-question-in-1 acc-link">
                            <img src="/lib/wp-content/themes/psychologist/img/add.png" alt="" class="questions-add questions-add-1 acc-block-icon">
                            <p class="questions-header">{{$question['question']}}</p>
                        </div>
                        <p class="questions-text questions-text-1 acc-text">{{$question['answer']}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
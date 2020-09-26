@foreach($data as $article)
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 block-portfolio-main">
        <!-- BOX-MODAL-WORK -->
        <div class="box-modal-work">
            <div class="d-flex justify-content-center box-modal-flex-work">
                <div class="block-box-modal-work">
                    <img src="/lib/wp-content/themes/psychologist/img/close.png" alt="" class="close-box-modal">
                    <div class="box-modal-work-margin">

                        @foreach($article['tags'] as $tag)
                            <button class="btn-modal-work">{{$tag}}</button>
                        @endforeach
                        <p class="modal-work-header">{{$article['title']}}</p>
                        <p class="modal-work-author">{{__('common.author')}}: {{$article['author']}}</p>
                        <p class="modal-work-data">{{__('common.date')}}: {{$article['date']}}</p>
                        <div class="modal-work-img">
                            <img width="500" height="375" src="/lib/wp-content/uploads/2018/09/article-2-big.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="/lib/wp-content/uploads/2018/09/article-2-big.jpg 500w, /lib/wp-content/uploads/2018/09/article-2-big-300x225.jpg 300w, /lib/wp-content/uploads/2018/09/article-2-big-150x113.jpg 150w" sizes="(max-width: 500px) 100vw, 500px"/>      </div>


                        @php
                            $text = explode("\n", $article['text']);
                        @endphp
                        @foreach($text as $line)
                            @php
                                if (strpos($line, $bold) === false) {
                                    $isBold = false;
                                } else {
                                    $isBold = true;
                                    $line = substr($line, strlen($bold));
                                }
                            @endphp

                            <p class="modal-work-text @if($isBold) modal-work-text-weight @endif">{!! $line !!}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- BOX-MODAL-WORK END -->
        <div class="block-article">
            <div class="block-article-up d-flex justify-content-center align-items-center">
                <div>

                    @foreach($article['tags'] as $tag)
                        <p class="block-article-up-header">{{$tag}}</p>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        <p class="block-article-up-text">{{$article['title']}}</p>
                    </div>
                    <p class="block-article-up-data">{{$article['date']}}</p>
                </div>
            </div>
            <img src="{{$article['img']}}" alt="" class="block-article-img">
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var wid4 = $(window).width();
    // SHOW AND HIDE
            $('.block-article').click(function() {
                $(this).parents('.block-portfolio-main').find('.box-modal-work').show(600);
                $('body').addClass('body-fixed');
                if(wid4<992) {
                    $('.btn-close-box-modal').show(0);
                }
                else {
                }
            });
            $('.close-box-modal, .modal-success-good,.btn-close-box-modal').click(function() {
                $('.btn-close-box-modal').hide(0);
                $('.box-modal, .box-modal-success, .box-modal-work').hide(600);
                $('body').removeClass('body-fixed');
                $('body').removeClass('body-fixed-2');
            });
        });
    </script>
@endforeach
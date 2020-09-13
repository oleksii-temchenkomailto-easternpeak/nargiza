jQuery(function ($) {
    let currentPage = 0;
    let maxPages = 4;

    $('#true_loadmore').click(function () {
        $(this).text(loading_text);
        $(this).addClass("active");
        let $form = $('.more-articles-form:first');
        var data = $form.serialize();
        $.ajax({
            url: $form.attr('action'), data: data, type: 'GET', success: function (data) {
                if (data) {
                    if (data.html) {
                        $('#true_loadmore').text(load_more_text).before(data.html);
                        currentPage++;
                        if (currentPage >= maxPages) {
                            $("#true_loadmore").remove();
                        }
                    } else {
                        $('#true_loadmore').remove();
                    }

                    if (!data.loadmore) {
                        $('#true_loadmore').remove();
                    }
                }
            }
        });
    }).click();
});

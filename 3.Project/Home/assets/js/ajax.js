$(document).ready(function() {
    $("#search").keyup(function(e) {
        var search = $(this).val();
        if (search === '') {
            $("#searchContent").empty();
        } else {
            $.ajax({
                //Xu ly truyen
                url: '/P/models/Ajax.php',
                type: 'POST',
                data: { search: search },
                dataType: 'json',
                //Xy ly gia tri tra ve
                success: function(res) {
                    $("#searchContent").empty();
                    // var obj = $.parseJSON(res);
                    for (var i = 0; i < res.length; i++) {

                        var title = res[i]['0'];
                        var category = res[i]['1'];
                        var thumbnail = res[i]['2'];
                        $("#searchContent").append('<div class="col-12 mt-5 pr-3 position-relative videoHover my-3"><div class="row"><div class="col-4"><a href="/P/watch/' + category + '" class="text-decoration-none"><img class="img-fluid"src="' + thumbnail + '"style="width:100%;max-height: 160px !important;opacity: 0.68;"><img class="position-absolute playButton d-none d-md-block"src="' + 'https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png' + '"style="width: 40px;height: 40px;left: 45%;bottom: 45%;"></a></div><div class="col-8"><a href="/P/watch/' + '" class="text-decoration-none text-white tit"><h3>' + title + '</h3></a><a href="/P/category/" class="text-decoration-none d-none d-md-block"style="color:#B5B3CB !important;">' + category + '</a></div></div></div>');
                    }

                }
            })
        }
    });
});
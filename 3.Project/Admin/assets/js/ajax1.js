$(document).ready(function() {
    $("#input").keyup(function() {
        var name = $(this).val();
        $.ajax({
            //Xu ly truyen
            url: '/p3/searchVideo.php',
            type: 'POST',
            data: { name: name },
            dataType: 'json',
            //Xy ly gia tri tra ve
            success: function(res) {
                $("tbody").empty();
                for (var i = 0; i < res.length; i++) {
                    var v1 = res[i]['0'];
                    var v2 = res[i]['1'];
                    var v3 = res[i]['2'];
                    var v4 = res[i]['3'];
                    var v5 = res[i]['4'];

                    $("tbody").append('');




                }

            }
        })

    });
});
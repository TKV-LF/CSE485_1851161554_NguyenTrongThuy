$(document).ready(function() {

    $.ajax({
        //Xu ly truyen
        url: '/p3/getNotification.php',
        type: 'POST',
        data: {},
        dataType: 'json',
        //Xy ly gia tri tra ve
        success: function(res) {
            $("#notifi").empty();
            // var obj = $.parseJSON(res);
            for (var i = 0; i < res.length; i++) {
                var name = res[i]['0'];
                var action = res[i]['1'];
                var time = res[i]['2'];
                $("#notifi").append('<div class="timeline-task"><div class="icon bg3"><i class="ti-signal"></i></div><div class="tm-title"><h4>' + name + ' ' + action + '</h4><span class="time"><i class="ti-time"></i>' + time + '</span></div></div>');
            }

        }
    })


});
(function ($) {

    Drupal.behaviors.initDefault = {
        attach: function (context, settings) {
            $(".question-answer ul li a").each(function () {
                $(this).click(function (event) {
                    var _nid = $(this).attr('data');
                    event.preventDefault();
                    $('.answer-' + _nid).toggle();
                });
            });
            $("li.dropdown").hover(function () {
                $(this).addClass('open');
            });
            $("li.dropdown").mouseout(function () {
                setTimeout(function () {
                    $(this).removeClass('open');
                }, '2000')

            });
            $(".form-item-field-guidearea1-und select").change(function () {
                console.log('nhan');
                var tid = $(this).val();
                $.post('/ajax/update/child', {pre: tid})
                        .done(function (data) {
                            if (data != 'ko') {
                                $("#edit-field-city1-und").html(data);

                            } else {

                            }
                            isWorking = false;
                        })
                        .fail(function () {
                            //alert( "error" );
                        });
            });
            $(".form-item-field-guidearea2-und select").change(function () {
                var tid = $(this).val();
                $.post('/ajax/update/child', {pre: tid})
                        .done(function (data) {
                            if (data != 'ko') {
                                $("#edit-field-city2-und").html(data);

                            } else {

                            }
                            isWorking = false;
                        })
                        .fail(function () {
                            //alert( "error" );
                        });
            });
            $(".form-item-field-guidearea3-und select").change(function () {
                var tid = $(this).val();
                $.post('/ajax/update/child', {pre: tid})
                        .done(function (data) {
                            if (data != 'ko') {
                                $("#edit-field-city3-und").html(data);

                            } else {

                            }
                            isWorking = false;
                        })
                        .fail(function () {
                            //alert( "error" );
                        });
            });
            $(".form-item-field-guidearea4-und select").change(function () {
                var tid = $(this).val();
                $.post('/ajax/update/child', {pre: tid})
                        .done(function (data) {
                            if (data != 'ko') {
                                $("#edit-field-city4-und").html(data);

                            } else {

                            }
                            isWorking = false;
                        })
                        .fail(function () {
                            //alert( "error" );
                        });
            });
            $("select#edit-field-guidable-area-tid").change(function () {
                var tid = $(this).val();
                $.post('/ajax/update/child', {pre: tid})
                        .done(function (data) {
                            if (data != 'ko') {
                                $("#edit-field-city-tid").html(data);

                            } else {

                            }
                            isWorking = false;
                        })
                        .fail(function () {
                            //alert( "error" );
                        });
            });
            $('#slides').superslides({
                animation: 'fade',
                animation_easing: 'linear',
                pagination: 'true'
            });
            
            $("button.navbar-toggle").click(function(){
               $("ul.menu.nav").slideToggle(); 
            });
        }
    };

})(jQuery);
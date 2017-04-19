(function ($) {

    Drupal.behaviors.initTour = {
        attach: function (context, settings) {
            $(window).load(function () {
                $('#slider').nivoSlider({
                    effect: 'fade',
                    pauseTime: 7000,
                });
            });
            
            $("li.dropdown").hover(function(){
               $(this).addClass('open'); 
            });
            $("li.dropdown").mouseleave(function(){
                setTimeout(function(){
                    $(this).removeClass('open'); 
                },'3000')
               
            });
        }
    };

})(jQuery);
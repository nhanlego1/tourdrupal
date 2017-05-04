(function ($) {

    Drupal.behaviors.initTour = {
        attach: function (context, settings) {
            $(window).load(function () {
                $('#slider').nivoSlider({
                    effect: 'fade',
                    pauseTime: 7000,
                });
            });

            
            
        }
    };

})(jQuery);
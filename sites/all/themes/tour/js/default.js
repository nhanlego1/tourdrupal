(function ($) {

    Drupal.behaviors.initDefault = {
        attach: function (context, settings) {
           $(".question-answer ul li a").each(function(){
              $(this).click(function(event){
                  var _nid = $(this).attr('data');
                  event.preventDefault();
                 $('.answer-'+_nid).toggle(); 
              }); 
           });
        }
    };

})(jQuery);
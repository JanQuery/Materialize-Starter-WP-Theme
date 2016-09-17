(function($){
  $(function(){

    $(".button-collapse").sideNav();
      
    $("#close-sidebar-left").on("click", function (event) {
        $('.button-collapse').sideNav('hide');
    });

    $('.button-collapse-sidebar').sideNav({
      menuWidth: 355, // Default is 240
      edge: 'right', // Choose the horizontal origin
      closeOnClick: false
    });
    
    $("#close-sidebar-right").on("click", function (event) {
        $('.button-collapse-sidebar').sideNav('hide');
    });
      
    $("h1, h2, h3, h4, h5, h6").not("h1.primary-text-color, h2.primary-text-color, h3.primary-text-color").addClass('header-color');
  

  }); // end of document ready
})(jQuery); // end of jQuery name space
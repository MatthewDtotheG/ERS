
//ANCHOR TAGS ===============================

$(function(){
    $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);
      var windowWidth = $(window).width();

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 2000, 'swing', function () {
          window.location.hash = target;
      });
      
      if(windowWidth < 769){
        $('#nav-icon3').removeClass('open')
        $('#NAVMENU').fadeOut(300)
     }
  });
});



//ANCHOR TAGS END ===============================


$(function () {
  $('#slides').superslides({
      play: 3000,
      pagination: false,
      hashchange: false,
      inherit_height_from: '#hero',
      inherit_width_from: '#hero'
  });


});



$(function(){
    var current = location.pathname;
    $('.NAV_ITEMS a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('MENUITEM_ON');
        }
    })
});



/* NAV +===========================

$(document).ready(function(){  
        $("#NAV").hide();                  
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 700) {
                $('#NAV').fadeIn();
            } else {
                $('#NAV').fadeOut();
            }
        });
    });

*/ // NAV  +===========================



window.sr = ScrollReveal({ duration: 800 });
sr.reveal('.box', 300);











// COLLAPSIBLE NAV MENU ===============================


$(document).ready(function(){
  $('#nav-icon3').click(function(){
    $(this).toggleClass('open');
  });
});

$('#nav-icon3').click(function() {
    $('#NAVMENU').fadeToggle(300);
});



// COLLAPSIBLE NAV MENU END ===============================








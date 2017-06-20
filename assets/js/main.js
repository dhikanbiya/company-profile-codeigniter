    $(document).ready(function() {
    $('#fullpage').fullpage({
      anchors:['home', 'about', 'vision','products','contact','last'],
      menu: '#navbar',
      slidesNavigation: false,
      navigation: false,
      responsiveWidth: 1100,
      verticalCentered:false,
      
    });


     $(window).load(function() {
        var $container = $('.grid');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });




       // carousel
      var $item = $('.carousel .item'); 
      var $wHeight = $(window).height();
      $item.eq(0).addClass('active');
      $item.height($wHeight); 
      $item.addClass('full-screen');

      $('.carousel img').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
          'background-image' : 'url(' + $src + ')',
          'background-color' : $color
        });
        $(this).remove();
      });

      $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);
      });

      $('.carousel').carousel({
        interval: 6000,
        pause: "false"
      });
    // end
     
   });
 
  
 
 
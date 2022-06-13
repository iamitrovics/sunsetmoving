(function($) {
	jQuery(document).ready(function() {
	    // desktop multilevel menu
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
            });
            return false;
        });;
        //sticky header
        jQuery(window).scroll(function() {
            if ($(this).scrollTop() > 50){  
                $('#menu_area').addClass("sticky");
            }
            else{
                $('#menu_area').removeClass("sticky");
            }
        });

        $('#close-notice, #accept-cookie').click(function(e) {
            e.preventDefault();
            $("#cookie-notice").removeClass("slide-up");
            $("#cookie-notice").addClass("slide-down");
        });

        $(document).ready(function() {
            $("#faq-accordion .set > a.accordion-heading").on("click", function(e) {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this)
                    .siblings("#faq-accordion .content")
                    .slideUp(200);
                } else {
                    $("#faq-accordion .set > a.accordion-heading").removeClass("active");
                    $(this).addClass("active");
                    $("#faq-accordion .content").slideUp(200);
                    $(this)
                    .siblings("#faq-accordion .content")
                    .slideDown(200);
                }
                e.preventDefault();
            });
        });
        $(document).ready(function() {
            $("#blog-accordion .set > a.accordion-heading").on("click", function(e) {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this)
                    .siblings("#blog-accordion .content")
                    .slideUp(200);
                } else {
                    $("#blog-accordion .set > a.accordion-heading").removeClass("active");
                    $(this).addClass("active");
                    $("#blog-accordion .content").slideUp(200);
                    $(this)
                    .siblings("#blog-accordion .content")
                    .slideDown(200);
                }
                e.preventDefault();
            });
        });
        $('#reviews-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: false,
                        autoplaySpeed: 8000,
                        dots: true,
                        arrows: false,
                    }
                },

                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: false,
                        infinite: false,
                        dots: true,
                        arrows: false,
                    }
                },
            ]
        });
        

        $(function () {
            
            var date1 = new Date('05/05/2022');
            var date2 = new Date('05/20/2022');

            var date3 = new Date('06/05/2022');
            var date4 = new Date('06/20/2022');

            var date5 = new Date('07/05/2022');
            var date6 = new Date('07/20/2022');                
                
            $(".date-picker-input").datepicker({
                minDate: '0',
                showOtherMonths: true,
                selectOtherMonths: true,
                
                
                beforeShowDay: function( date ) {
                    var highlight = date >= date1 && date <= date2
                    var highlight2 = date >= date3 && date <= date4
                    var highlight3 = date >= date5 && date <= date6
                    if( highlight || highlight2 || highlight3 ) {
                         return [true, "event", 'Tooltip text'];
                    } else {
                         return [true, '', ''];
                    }
                }
        
            });

    });

    $('.date-picker-input').on('click', function(e) {
      e.preventDefault();
      $(this).attr("autocomplete", "off");  
   });

   $(".date-picker-input").attr("autocomplete", "off");

        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#go-to-top').addClass('on');
            } else {
                jQuery('#go-to-top').removeClass('on');
            }
        });
        jQuery('#go-to-top').click(function() {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
        });
        $('.selectpicker').selectpicker();
        // modal script
        setTimeout(function() {
            jQuery('.modal-overlay').addClass('show');
        }, 1000);
        $('.zebra_tooltips_below').click(function(e){
            var myEm = $(this).attr('data-my-element');
            var modal = $('.modal-overlay[data-my-element = '+myEm+'], .modal[data-my-element = '+myEm+']');
            e.preventDefault();
            modal.addClass('active');
            $('html').addClass('fixed');
        });
        $('.close-modal').click(function(){
            var modal = $('.modal-overlay, .modal');
            $('html').removeClass('fixed');
            modal.removeClass('active');
        });

        //scroll to anchored
        $(document).on('click', '.city-contact-point a', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top-80
            }, 500);
        });

        // Menu
        $('.menu-btn').click(function(){
            $('.main-menu-sidebar').addClass("menu-active");
            $('.menu-overlay').addClass("active-overlay");
            $(this).toggleClass('open');
        });
  
        // Menu
        $('.close-menu-btn').click(function(){
            $('.main-menu-sidebar').removeClass("menu-active");
            $('.menu-overlay').removeClass("active-overlay");
        });
  
            $(function() {
        
            var menu_ul = $('.nav-links > li.has-menu  ul'),
                menu_a  = $('.nav-links > li.has-menu  small');
            
            menu_ul.hide();
            
            menu_a.click(function(e) {
                e.preventDefault();
                if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
                } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
                }
            });
            
            });
            
        $(".nav-links > li.has-menu  small ").attr("href","javascript:;");
    
        var $menu = $('#menu');
  
        $(document).mouseup(function (e) {
          if (!$menu.is(e.target) // if the target of the click isn't the container...
          && $menu.has(e.target).length === 0) // ... nor a descendant of the container
          {
            $menu.removeClass('menu-active');
            $('.menu-overlay').removeClass("active-overlay");
          }
        });

        $(document).ready(function () {
			$("#car-form").hide();

            $('#move-type').change(function () {
                if ($("#move-type").val() == "I want to ship my car!") {
                    $("#car-form").show();
                    $("#move-size-form").hide();
        
                } else {
                    $("#move-size-form").show();
                    $("#car-form").hide();

                }
            });

		});

        $(function() {
            $('.quote-cta--single a.btn-cta').click(function() {
              if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                  $('html, body').animate({
                    scrollTop: target.offset().top - 100
                  }, 1000);
                  return false;
                }
              }
            });
          });      
          
          $('.full-content a').attr("target","_blank");


        /*function parallax_init(){
            var element = document.getElementsByClassName('parallax');
            if (element.length > 0) {
                window.addEventListener('scroll', doParallax);
                function doParallax(){
                    var positionY = window.pageYOffset/2;
                    element[0].style.backgroundPosition = "0 -" + positionY + "px";
                }
            }
        }
        var viewportWidth = $(window).width();
        $(document).ready(function() {
            if ( viewportWidth > 1200 ){
                parallax_init();
            }
            $(window).resize(function() {
                viewportWidth = $(this).width();
                if ( viewportWidth > 1200 ){
                    parallax_init();
                }
            });
        });*/
    });
})(jQuery);

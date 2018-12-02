

(function($) {
    "use strict";


    /*-------------------------------------------
          jQuery MeanMenu
     --------------------------------------------- */
    jQuery('nav#dropdown').meanmenu();
    
    /*-------------------------------------------
    	 wow js active
    --------------------------------------------- */
    new WOW().init();
    
    /*-------------------------------------------
    	 toltip js active
    --------------------------------------------- */
    $('[data-toggle="tooltip"]').tooltip();
    
    /*----------------------------
       stickey menu
    ----------------------------*/
    $(window).on('scroll',function() {    
	   var scroll = $(window).scrollTop();
	   if (scroll < 265) {
		$(".sticky-header").removeClass("sticky");
	   }else{
		$(".sticky-header").addClass("sticky");
           }
    });
    
    $('.close-home').on('click', function(){
		$('.find-home-box').addClass('fadeOut');
        
    });

    /*----------------------
		Nivo slider activation
	----------------------*/
   $('#mainSlider').nivoSlider({
        directionNav: true,
        controlNavThumbs: false,
        animSpeed: 1000,
        slices: 10,
        pauseTime: 5000,
        pauseOnHover: true,
        controlNav: false,
        manualAdvance: true,
        prevText: '<i class="fa fa-angle-left"></i>', 
        nextText: '<i class="fa fa-angle-right"></i>'
    });
    /*-------------------------
      slider active
    ------------------------------ */  
    $(".property-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [991,2],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
    });
    $(".happy-client-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [991,3],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
    });

    $(".brand-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:false,	  
      items : 5,
       navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [991,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
    });
    $(".property_list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 1,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
    });
    
    /*------------------------------------    
      Search Bar
    --------------------------------------*/ 

      $( '.search-icon a' ).on( 'click', function () {
        $( '.header' ).toggleClass( 'search-box-show' );
        return false;
      });

      $( '.search-close-btn a' ).on( 'click', function () {
        $( '.header' ).toggleClass( 'search-box-show' );
        return false;
      });
    /*----------------------    
        magnificPopup active
    --------------*/
    $('.play-button a').magnificPopup({
            disableOn: 0,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false
    });
    /*----------------------    
        collpase active
    --------------*/
    $(".accordion-active").collapse({
		accordion:true,
	  open: function() {
		this.slideDown(550);
	  },
	  close: function() {
		this.slideUp(550);
	  }		
	});	
    
    
    /*--------------------
        You tube video active
    -------------------------*/
    $(".youtube-bg").YTPlayer({
        videoURL:"https://youtu.be/vb5KLYAtPIs",
        containment:'.youtube-bg',
        mute:true,
        loop:true,
        showControls: true
        
    });
    
    /*--------------------------
		 Parallax active
	----------------------*/
	$('.parallax').parallax("50%", 0.5);
    
    /*------------------
        5. Price Slider
    --------------------------*/
    $( "#slider-range" ).slider({
        range: true,
        min: 20,
        max: 2500,
        values: [ 600, 2000 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );


    /*--------------------------
      Counter Up
    ---------------------------- */	
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    });
    
     /*-------------------------------------------
    	scrollUp jquery active
    --------------------------------------------- */
    $.scrollUp({
        scrollText: '<i class="icofont icofont-simple-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    
    /*-----------------------------
    Loader activation here. 
    -------------------------------*/
    $("#fakeLoader").fakeLoader({
        timeToHide:1500, 
        zIndex:999999, 
        spinner:"spinner1",   //Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7' 
        bgColor:"#fff"
    });


  const d1 = document.getElementById("dire1").addEventListener("mouseover", function () {
    document.getElementById("Mapas").setAttribute("src", "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13100.437553573713!2d-58.4037838413086!3d-34.8283421025028!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd49915067ff9%3A0x50fb20e6c6646e63!2sAv.+Pres.+Hip%C3%B3lito+Yrigoyen+14939%2C+B1852ELY+Almte.+Brown%2C+Pcia+de+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1537719311181");
  });
  const d2 = document.getElementById("dire2").addEventListener("mouseover", function () {
    document.getElementById("Mapas").setAttribute("src", "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6550.382395262952!2d-58.39298300000001!3d-34.826285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd4a2459e2a89%3A0x62a4a7f040e7a366!2sEugenio+de+Burzaco+702%2C+B1852BGI+Burzaco%2C+Pcia+de+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1537725727296");
  });
   //single-property  mb-40
/*
  $(".single-property").on("click",function(){
      location.href ="single-properties.html";
  });
*/
  /*
  $(".mb-40").on("click", function () {
        location.href = "single-properties.html";
      });
      */
})
(jQuery);





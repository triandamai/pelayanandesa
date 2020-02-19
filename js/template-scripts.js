jQuery(document).ready(function($) {      
  // Owl Carousel                     
  $(".carousel-default").owlCarousel({		
     navigation : true,
   	 slideSpeed : 300,
   	 paginationSpeed : 400,
   	 autoPlay : true,
     addClassActive: true,
     navigationText: ["&#xe605","&#xe606"],
   	 singleItem:true
  }); 
  
  // Owl Carousel - Content Blocks
  $(".carousel-blocks").owlCarousel({
     slideSpeed: 300,
     autoPlay: 5000,
     navigation: true,
     navigationText: ["&#xe605","&#xe606"],
     pagination: false,
     addClassActive: true,
     items: 4,
     itemsDesktop: [768,3],
     itemsDesktopSmall: [480,1]
  });
  
  // Owl Carousel - Content 3 Blocks
  $(".carousel-3-blocks").owlCarousel({
     slideSpeed: 300,
     autoPlay: 5000,
     navigation: true,
     navigationText: ["&#xe605","&#xe606"],
     pagination: true,
     addClassActive: true,
     items: 3,
     itemsDesktop: [768,2],
     itemsDesktopSmall: [480,1]
  });
  
  
  $(".carousel-fade-transition").owlCarousel({		
   	 navigation : true,
   	 slideSpeed : 300,
   	 paginationSpeed : 400,
   	 autoPlay : true,
     addClassActive: true,
     navigationText: ["&#xe605","&#xe606"],
   	 singleItem:true,
     transitionStyle : "fade"
  }); 
  
  // Sticky Nav Bar
  $(window).scroll(function() {
    if ($(this).scrollTop() > 20){  
        $('.sticky').addClass("fixed");
    }
    else{
        $('.sticky').removeClass("fixed");
    }
  });   
});
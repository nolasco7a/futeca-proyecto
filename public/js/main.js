$('#iniciobanner').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    center:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
$('#marcas').owlCarousel({
    loop:true,
    margin:25,
    center:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: true,
    dots: true,
    dotsEach: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$(document).ready(function(e) {
   
	// live handler
	lc_lightbox('.elem', {
		wrap_class: 'lcl_fade_oc',
		gallery : true,	
		thumb_attr: 'data-lcl-thumb', 
		
		skin: 'minimal',
		radius: 0,
		padding	: 0,
		border_w: 0,
	});	

});
$(document).ready(function() {
    lc_lightbox('#lcl_elems_wrapper a',{
        thumb_attr: 'data-lcl-thumb', 
		
		skin: 'minimal',
		radius: 0,
		padding	: 0,
		border_w: 0,

    });
});
$(document).ready(function(e) {
   
	// live handler
	lc_lightbox('.elem2', {
		wrap_class: 'lcl_fade_oc',
		gallery : true,	
		thumb_attr: 'data-lcl-thumb', 
		
		skin: 'minimal',
		radius: 0,
		padding	: 0,
		border_w: 0,
	});	

});

$('.staff').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:8000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
$('.galeria_academia').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:8000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
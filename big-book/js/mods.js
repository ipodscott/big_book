$( document ).ready(function() {

	$( ".movie-btn" ).click(function() {
        $('.myVideo').attr("src", $(this).attr("vidUrl"));
        document.getElementById('myVideo').play();
        $('.myVideo').removeClass("hide");
        $('.myVideo').addClass("show");
        $('.youTube').addClass("hide");
        $('.youTube').removeClass("show");
    });
    
    $( ".tube-link" ).click(function() {
        $('.youTube').removeClass("hide");
        $('.youTube').addClass("show");
        $('.myVideo').addClass("hide");
        $('.myVideo').removeClass("show");
        $('.youTube').attr("src", $(this).attr("vidUrl"));
     });
    
    $(".widscreen-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".widescreen-img").addClass("show");
    });
    
    $(".standard-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".standard-img").addClass("show");
    });
    
     $(".sixteen-nine-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".sixteen-nine").addClass("show");
    });
    
    $(".pal-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".pal").addClass("show");
    });
    
    
    $(".close").click(function() { 
        $(".modal-vid").fadeOut(500);
        /*document.getElementById('myVideo').pause();*/
        $('.youTube, .myVideo').attr('src', '');
    });
        
    
    $(".read-more-btn").click(function() { 
        $(".read-more").addClass("show");
        $(".read-less-btn").show();
        $(".read-more-btn").hide();
    });
    
     $(".read-less-btn").click(function() { 
        $(".read-more").removeClass("show");
        $(".read-more-btn").show();
        $(".read-less-btn").hide();
    });
   
});

window.document.onkeydown = function(e) {
    if (!e) e = event;
    if (e.keyCode == 27) {
        $('.img-pop-box, .close-media').fadeOut(500, function() {
            $('.media-overlay').fadeOut(500);
            $('.myImage').attr("src", 'images/place_holder.jpg')
        });
        $('.youTube, .myVideo').attr('src', '');
        $('.modal-vid').fadeOut(500);
        $('.modal-box, .close-menu').fadeOut(500);
        document.getElementById('myVideo').pause();
        $(".menu").removeClass('show-menu');
        $('body').removeClass('fade');
        $('.all').removeClass('fade');
        $(".menu-layer").delay(250).fadeOut(500);
        $('.btt-footer').fadeIn(500);
    }
   
    if (!e) e = event;
    if (e.keyCode == 37) {
        $(".menu").removeClass('show-menu');
        $(".menu-layer").delay(250).fadeOut(500)
    }
};
//alert('Le fichier JS "navigation" est bien chargé !');



$(function () {
        $('.liSlide>a, .navbar-header>a').on('click', function(e) {
          e.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(this.hash).offset().top
          }, 1000);
        });
      });

//le bon qui fonctionne ci-dessous mais affiche les ancres dans l'url mais ne laisse pas de séléction sur les liens ...
//$(function () {
//        $('.liSlide>a, .navbar-header>a').on('click', function(e) {
//          e.preventDefault();
//          var hash = this.hash;
//          $('html, body').animate({
//            scrollTop: $(this.hash).offset().top
//          }, 1000, function(){
//            window.location.hash = hash;
//          });
//        });
//      });
$(function () {
		$('.carousel').carousel({ interval: 4000 });
	});

window.setTimeout(function() {
    $(".flash").fadeTo(600, 0).slideUp(600, function(){
        $(this).remove();
    });
}, 4000);

// Cette fonction permet de modifier une classe en fonction du scroll
//		jQuery(document).ready(function($){
//
//		  	$(window).scroll(function() {
//
//				if ($(window).scrollTop() > 25 ){
//		    
//		 		$('.navbar').addClass('navbar-fixed-top');
//		    
//		  		} else {
//		    
//		   	 	$('.navbar').removeClass('navbar-fixed-top');
//		    
//		 		};   	
//			});
//
//		  });

//Fermeture auto du menu responsive + redimension du captcha
if(window.innerWidth<769) {
$('.liSlide').click('liSlide', function() {
    $('.navbar-collapse').collapse('hide');
})
var monCaptcha = document.querySelector("#ReCaptcha");
    monCaptcha.setAttribute("data-size", "compact");
};		

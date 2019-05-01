$(document).ready(function() {

	initialiseTinymce();

	activateCarousel();
	
	activateFancybox();
	// countdown();
	
	
	
var str=location.href.toLowerCase();
$(".navbar #navi li a").each(function() {
if (str.indexOf(this.href.toLowerCase()) > -1) {
 $("li.highlight").removeClass("highlight");
$(this).parent().addClass("highlight");
}
 });


	

});

function activateCarousel() {

	$('.carousel').carousel({
		interval : 7000, //changes the speed
		duration: 1000,
		
	});

}

function activateFancybox() {

	$('.thumbnail').fancybox({
		'transitionIn' : 'fade',
		'transitionOut' : 'elastic',
		'titlePosition' : 'over',
		'speedIn' : 500,
		'overlayColor' : '#000',
		'overlayOpacity' : .75
	});
	
	
	$(".thumbnail").fancybox({
    helpers:  {
        thumbs : {
            width: 50,
            height: 50
        }
    }
});

}

function initialiseTinymce() {
	tinymce.init({

		plugins : [' link image anchor visualblocks spellchecker paste hr emoticons'],
		spellchecker_language : 'en',
		spellchecker_languages : 'English=en',
		browser_spellcheck : true,
		contextmenu : false,
		selector : 'textarea#mytextarea',
		menubar : false,
		toolbar : [
		'undo redo  | bold italic underline hr | alignleft aligncenter alignright alignjustify | bullist  numlist outdent  indent | emoticons'
		],
		statusbar : false,
		relative_urls: false,
		
		//cleanup : true,

	});
}




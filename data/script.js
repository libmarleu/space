//include jQuery library
$("a[href^='http']").each(function() {
  $(this).parent("li").css("list-style-image", "url(https://www.google.com/s2/favicons?domain=" + this.hostname + ")");
});	
$(window).load(function() {
	// Animate loader off screen
	$(".se-pre-con").fadeOut("slow");;
});
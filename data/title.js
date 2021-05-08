$(document).ready(function(){
    var markup = '<div class="title"><h1>Public Data</h1><p class="description">This list may change periodically<br></p></div>';
    $(document.body).prepend( markup ).css('background','#f3f3f3');
    
    $(".title").css({
        "width": "620px",
        "margin": "60px auto 0 auto",
        "text-align": "center"
    });   
    $(".description").css({
        "margin": "15px 0px 60px 0px"
    });
});
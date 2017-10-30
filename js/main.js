
/************jQuery code**************/

//to stop preloading.gif
$(document).ready(function(){
    
        $(".loaded").fadeOut();    
        $(".preloader").delay(800).fadeOut();
    });


// for smooth scrolling on clicking <a>
$(document).ready(function(){ 
  $("a").on('click', function(event) {   
    if (this.hash !== "") {
      event.preventDefault(); // to prevent default instant navigation
      var hash = this.hash; //hash is the sectionid
      $('html, body').animate({
        scrollTop: $(hash).offset().top}, 1200, function(){ 
        						 window.location.hash = hash;});
   							 } 
 			      });
});
//tootip initialize
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});



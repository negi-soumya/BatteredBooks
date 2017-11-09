
/************jQuery code**************/

//to stop preloading.gif
$(document).ready(function(){
    
        $(".loaded").fadeOut();    
        $(".preloader").delay(500).fadeOut();
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


$(document).ajaxStart(function() {
  alert( "Triggered ajaxStart handler." );
});

$(document).ajaxSuccess(function() {
  $( ".log" ).text( "Triggered ajaxSuccess handler." );
});


//registration
$(document).ready(function(){
	$("#register_form").submit(function(e){
		e.preventDefault();
		var v=$("#register_form").serialize();
		
		$.ajax({
			url:"register.php",
			type:"post",
			data:v,
			dataType:"text",
			success:function(data){
				var d=$.trim(data);
				if(d==="ok")
					{ 
					 					 
					 alert("You have successfully registered with us!");
					 window.location.href="home.html";
					}
				else
					$("#error_register").html(d);
			}
		});
	});
});

//login
$(document).ready(function(){
	$("#login_form").submit(function(e){
		e.preventDefault();
		var v=($("#login_form").serialize());
			
		$.ajax({
			url:"login.php",
			data:v,
			dataType:"text",
			type:"POST",
			success:function(data){
				
				var d=$.trim(data);	
				if(d==="login")
					{ //alert("Login Successful! \nRedirecting to home page..");
					  window.location.href="home.html"; }
				else
					$("#login_error").html("*Incorrect username or password! ");
			}
        
		});		
	});
});


//upload
$(document).ready(function(){
	$("#upload_form").submit(function(e){
		e.preventDefault();
		var v=($("#upload_form").serialize());
		$.ajax({
			url:"upload.php",
			data:v,
			dataType:"text",
			type:"POST",
			success:function(data){
				if($.trim(data)==="ok")
					alert("Book successfully uploaded!\nYour history has been updated..");
				else
					$("#upload_error").html(data);
			}
		});
	});
});

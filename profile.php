<?php
 session_start();
?>
<!doctype html>
<html>
  <head>
    
    <title>Profile_BatteredBooks</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link type="text/css" rel="stylesheet" href="./css/style.css"><!--custom css file-->
    <link rel="stylesheet" href="./css/bootstrap-theme.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
      
    <script src="./js/jquery-3.2.1.js"></script>
  </head>
  
  <body data-spy="scroll" data-target="#navmenu " >
      
      <header id="main_menu" class="header "> <!--navigation bar-->
            <div class="main_menu_bg navbar-fixed-top "><!--to customize main menu-->
                <div class="container"><!--to leave space on sides-->
                    <div class="row">
                        <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt="Battered books!"/></a>
                                    </div>

                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="home.html">Home</a></li>
                                            <li class="active"><a href="#home_upload">Upload</a></li>
                                            <li><a href="#support">Support</a></li>
                                            <li><button type="button" class="btn-lg btn search dropdown-toggle" value="" data-toggle="dropdown"><span class="glyphicon glyphicon-cog white"></span></button>
                                            	<ul id="act" class="dropdown-menu">
  						  <li><a href="profile.php"><span class="glyphicon glyphicon-user">&nbsp;Profile<span</a></li>
  						  <li><a href="history.php"><span class="glyphicon glyphicon-header">&nbsp;History</span></a></li>
  						  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">&nbsp;Shopping Cart<span></a></li>
  						  <li class="divider"></li>
  						  <li><a id="logout" href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;Logout</span></a></li>
 						 </ul>	
                                        </ul>
                                       <form class="navbar-form navbar-right search" name="book_search" method="post" action="search.php">
     					    <div class="form-group">
      					    	<input type="text" name="ISBN" maxlength=13 class="form-control search" placeholder="Search by ISBN">
     					    </div>
    					    <button type="submit" class="btn navbar-btn search" value="" ><span class="glyphicon glyphicon-search"></span></button>
 					</form>
                                    </div>
                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->
  
  <?php
   $connect= mysqli_connect("localhost","root","crack19","BATBOOKS");
if(!$connect)
	echo "Can't connect to database".mysqli_error();
$x=$_SESSION["CUR_USR"];
$q="select EID,ROOM,BLOCK,PWD from USER where USR='$x'";
$sql=mysqli_query($connect,$q);
$c=0;
while($row=mysqli_fetch_assoc($sql))
  {
     $c=1;
     
     $v2=$row['EID'];
     $v3=$row['ROOM'];
     $v4=$row['BLOCK'];
     $v5=$row['PWD'];
   }  
 mysqli_close($connect);
  ?>
      
      <section id="home_profile" class="home_profile"> <!--home secton-->
            <div class="home-overlay-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="" class="browse_register single_slider" >
                            	<p>Your profile</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="" class="browse_register single_slider" style="border-bottom:0px;">
                                
                            	<form id="edit_profile" name="edit_profile" method="post" action="editProfile.php">
                            	    <table border=0 style="">
                            	  
					  <tr><td>&nbsp;</td></tr>
					  <tr>
					     <td>Username: </td>
					     <td>&nbsp;</td>
					     <td><?php echo $x;?></td>
					  </tr>
					  <tr><td>&nbsp;</td></tr>
					  <tr>
					     <td>Password: </td>
					     <td>&nbsp;</td>
					     <td ><input type="password" data-toggle="tooltip" title="Min 6 & Max 16 characters,space not allowed" data-placement="right" name="PWD" value="" minlength="6" maxlength="16" placeholder="" style="color:black;font-weight:normal;font-style:italic;" required>
					     </td>
					  </tr>
					  <tr><td>&nbsp;</td></tr>
					  <tr>
					     <td>Email Id: </td>
					     <td>&nbsp;</td>
					     <td ><input type="email" data-toggle="tooltip" title="Id will be used for any communication" data-placement="right" name="EID" value="" placeholder="<?php echo $v2;?>" style="color:black;font-weight:normal;font-style:italic;" required>
					     </td>
					  </tr>
					  <tr><td>&nbsp;</td></tr>
					  <tr>
					     <td>Room No.: </td>
					     <td>&nbsp;</td>
					     <td ><input type="number" name="ROOM" value="" placeholder="<?php echo $v3;?>" min="101" max="1550"  style="color:black;font-weight:normal;font-style:italic;" required>
					     </td>
					  </tr>
					  
					  <tr><td>&nbsp;</td></tr>
					  <tr>
					     <td>Block: </td>
					     <td>&nbsp;</td>
					     <td ><input type="radio" name="BLOCK" value="A" style="color:black;font-weight:normal;font-style:italic;" selected="<?php echo $v4;?>" required>A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					     <input type="radio" name="BLOCK" value="B (Boys)" style="color:black;font-weight:normal;font-style:italic;" required>B (Boys) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					     <input type="radio" name="BLOCK" value="B (Girls)" style="color:black;font-weight:normal;font-style:italic;" required>B (Girls)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					     <input type="radio" name="BLOCK" value="C" style="color:black;font-weight:normal;font-style:italic;" required>C
					     </td>
					  </tr>
					  
					  <tr><td>&nbsp;</td></tr>
					  <tr><td><input type="submit" id="reg" class="search" value="Save changes" style="color:#e84c3d;"></td>
					      <td><input type="reset" class="search" value="Reset" style="color:#e84c3d;"></td>	
					      <td id="error_register" style="font-family:arial;color:red;font-style:italic;"></td>
					  </tr>
					  
		                    </table>
		                    <br> 
		                    <fieldset>
		                    <legend align="left" border="1px solid grey">Caution: This action cannot be reversed. </legend>
 					<a href="delete.php">Delete Account</a>
 				    </fieldset>
                            	</form>
                            	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of home Section -->
      
      <!--bottom of site, common to all-->
      <section id="support" class="footer">
            <div class="container">
                <div class="row footer_menu">
                    <div class="col-md-3">
                            <div>
                                <a href=""><img src="images/logo.png" alt="Battered books!" style="hover:left;" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <ul id="inline_list"> 
                                    <li><span class="glyphicon glyphicon-envelope"></span> FEEDBACK</li>
                                    <li><button type="button" class="search" data-toggle="modal" data-target="#aboutus"><span class="glyphicon glyphicon-info-sign"></span> ABOUT US</button></li>
                                    <li><button type="button" class="search" data-toggle="modal" data-target="#contactus"><span class="glyphicon glyphicon-phone-alt"></span> CONTACT</button></li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                </div>
            </div>
        </section>
        
        <footer id="copyright">
			<div class="container-fluid" >
			<div class="row">
				<div class="copyright">
					<p >Made by <strong>Soumya Negi</strong> 2017. All Rights not Reserved <span class="glyphicon glyphicon-heart-empty"></span></p>
					<a href="#home_upload" style="float:right;padding:15px;"><span class="glyphicon glyphicon-menu-up" style="font-size:20px;"></span></a>
				</div>
				
			</div>
			</div>
	</footer>
        
      <!--ABOUT US modal-->
        <div id="aboutus" class="modal fade" role="dialog" tabindex="-1">
	   <div class="modal-dialog">
   	      	<div class="modal-content">
 	    	   <div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">About Us</h4>
	     	   </div>
	     	   <div class="modal-body">
	       		 <p>about us.</p>
 	     	   </div>
 	     	   
	    	</div>

	   </div>
	</div>
	
	<!--CONTACT modal-->
        <div id="contactus" class="modal fade" role="dialog" tabindex="-1">
	   <div class="modal-dialog">
   	      	<div class="modal-content">
 	    	   <div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">Contact Us</h4>
	     	   </div>
	     	   <div class="modal-body">
	       		 <p>about us.</p>
 	     	   </div>
 	     	   
	    	</div>

	   </div>
	</div>
  
  <!--   <script src="./js/bootstrap.js"></script> --> <!--use either bootsrap.js or bootstrap.min.js..modal was disappearing-->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/npm.js"></script> 
    <script src="./js/main.js"></script>
    
  </body>
</html>
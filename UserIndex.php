


<!DOCTYPE html>
<html lang="en">
<head>
<title>Plant Nursery</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script	src="js/jquery.touchSwipe.min.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: false, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(
    function () {
        $('.carousel1').carouFredSel({
            auto: false,
            prev: '.prev1',
            next: '.next1',
            width: 1030,
            items: {
                visible: {
                    min: 1,
                    max: 4
                },
                height: 'auto',
                width: 157,
            },
            responsive: true,
            scroll: 1,
            mousewheel: false,
            swipe: {
                onMouse: true,
                onTouch: true
            }
        });
    });
</script>
<script language="JavaScript">
function valid()
{
  var Name=document.getElementById("nm").value;
  var Address=document.getElementById("add").value;
  var Contact=document.getElementById("con").value;
  var EmailId=document.getElementById("eid").value;

  
  
	 if(Name=="")
	 {
	   alert("Please Enter Name...!");
	   return false;
	 }
	 if(!isNaN(Name))
	 {
	   alert("Please Enter Only Alphabets...!");
	   document.getElementById("nm").value='';
	   document.getElementById("nm").focus();
	   return false;
	   }
	   
	 if(Address=="")
	 {
	   alert("Please Enter Address...!");
	   return false;
	 }
	if(Contact=="")
	 {
	   alert("Please Enter Mobile Number...!");
	   return false;
	 }
	 if(isNaN(Contact))
	 {
	   alert("Please Enter Only Numbers...!");
	   document.getElementById("con").value='';
	   document.getElementById("con").focus();
	   return false;
	 }
	 if(Contact.length!=10)
	 {
	   alert("Please Enter Only 10 Numbers...!");
	   document.getElementById("con").value='';
	   document.getElementById("con").focus();
	   return false;
	 }
	   
	    if(EmailId=="")
	 {
	   alert("Please Enter Email_Id...!");
	   return false;  
	 }	 
	   return true;
}
  
function login()
{
	var Username=document.getElementById("unm").value;
	var Password=document.getElementById("pwd1").value;
	  if(Username=="")
	 {
	   alert("Please Enter Email-Id / Contact Number...!");
	   return false;
	 }
	  if(Password=="")
	 {
	   alert("Please Enter Password...!");
	   return false;
	 }
	   
	   return true;
}

	 </script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
<style>
.style5
{
  font-family: "cursive", Harlow Solid Italic, Monotype Corsiva ;
  font-weight:bold;
  background-color:#3399FF;
  
}
</style>
<style type="text/css">
/*
  Variable Grid System.
  Learn more ~ http://www.spry-soft.com/grids/
  Based on 960 Grid System - http://960.gs/

  Licensed under GPL and MIT.
*/

/*
  Forces backgrounds to span full width,
  even if there is horizontal scrolling.
  Increase this if your layout is wider.

  Note: IE6 works fine without this fix.
*/

body {
  min-width: 1200px;
}

/* Containers
----------------------------------------------------------------------------------------------------*/
.container_12 {
  margin-left: auto;
  margin-right: auto;
  width: 1200px;
}

/* Grid >> Global
----------------------------------------------------------------------------------------------------*/


.grid_1,
.grid_2,
.grid_3,
.grid_4,
.grid_5,
.grid_6,
.grid_7,
.grid_8,
.grid_9,
.grid_10,
.grid_11,
.grid_12 {
  display:inline;
  float: left;
  position: relative;
  margin-left: 15px;
  margin-right: 15px;
}



.push_1, .pull_1,
.push_2, .pull_2,
.push_3, .pull_3,
.push_4, .pull_4,
.push_5, .pull_5,
.push_6, .pull_6,
.push_7, .pull_7,
.push_8, .pull_8,
.push_9, .pull_9,
.push_10, .pull_10,
.push_11, .pull_11,
.push_12, .pull_12 {
  position:relative;
}


/* Grid >> Children (Alpha ~ First, Omega ~ Last)
----------------------------------------------------------------------------------------------------*/

.alpha {
  margin-left: 0;
}

.omega {
  margin-right: 0;
}

/* Grid >> 12 Columns
----------------------------------------------------------------------------------------------------*/


.container_12 .grid_1 {
  width:70px;
}

.container_12 .grid_2 {
  width:170px;
}

.container_12 .grid_3 {
  width:270px;
}

.container_12 .grid_4 {
  width:370px;
}

.container_12 .grid_5 {
  width:470px;
}

.container_12 .grid_6 {
  width:570px;
}

.container_12 .grid_7 {
  width:670px;
}

.container_12 .grid_8 {
  width:770px;
}

.container_12 .grid_9 {
  width:870px;
}

.container_12 .grid_10 {
  width:970px;
}

.container_12 .grid_11 {
  width:1070px;
}

.container_12 .grid_12 {
  width:1170px;
}




/* Prefix Extra Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/


.container_12 .prefix_1 {
  padding-left:100px;
}

.container_12 .prefix_2 {
  padding-left:200px;
}

.container_12 .prefix_3 {
  padding-left:300px;
}

.container_12 .prefix_4 {
  padding-left:400px;
}

.container_12 .prefix_5 {
  padding-left:500px;
}

.container_12 .prefix_6 {
  padding-left:600px;
}

.container_12 .prefix_7 {
  padding-left:700px;
}

.container_12 .prefix_8 {
  padding-left:800px;
}

.container_12 .prefix_9 {
  padding-left:900px;
}

.container_12 .prefix_10 {
  padding-left:1000px;
}

.container_12 .prefix_11 {
  padding-left:1100px;
}



/* Suffix Extra Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/


.container_12 .suffix_1 {
  padding-right:100px;
}

.container_12 .suffix_2 {
  padding-right:200px;
}

.container_12 .suffix_3 {
  padding-right:300px;
}

.container_12 .suffix_4 {
  padding-right:400px;
}

.container_12 .suffix_5 {
  padding-right:500px;
}

.container_12 .suffix_6 {
  padding-right:600px;
}

.container_12 .suffix_7 {
  padding-right:700px;
}

.container_12 .suffix_8 {
  padding-right:800px;
}

.container_12 .suffix_9 {
  padding-right:900px;
}

.container_12 .suffix_10 {
  padding-right:1000px;
}

.container_12 .suffix_11 {
  padding-right:1100px;
}



/* Push Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/


.container_12 .push_1 {
  left:100px;
}

.container_12 .push_2 {
  left:200px;
}

.container_12 .push_3 {
  left:300px;
}

.container_12 .push_4 {
  left:400px;
}

.container_12 .push_5 {
  left:500px;
}

.container_12 .push_6 {
  left:600px;
}

.container_12 .push_7 {
  left:700px;
}

.container_12 .push_8 {
  left:800px;
}

.container_12 .push_9 {
  left:900px;
}

.container_12 .push_10 {
  left:1000px;
}

.container_12 .push_11 {
  left:1100px;
}



/* Pull Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/


.container_12 .pull_1 {
  left:-100px;
}

.container_12 .pull_2 {
  left:-200px;
}

.container_12 .pull_3 {
  left:-300px;
}

.container_12 .pull_4 {
  left:-400px;
}

.container_12 .pull_5 {
  left:-500px;
}

.container_12 .pull_6 {
  left:-600px;
}

.container_12 .pull_7 {
  left:-700px;
}

.container_12 .pull_8 {
  left:-800px;
}

.container_12 .pull_9 {
  left:-900px;
}

.container_12 .pull_10 {
  left:-1000px;
}

.container_12 .pull_11 {
  left:-1100px;
}




/* `Clear Floated Elements
----------------------------------------------------------------------------------------------------*/

/* http://sonspring.com/journal/clearing-floats */

.clear {
  clear: both;
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0;
}

/* http://www.yuiblog.com/blog/2010/09/27/clearfix-reloaded-overflowhidden-demystified */

.clearfix:before,
.clearfix:after {
  content: '\0020';
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0;
}

.clearfix:after {
  clear: both;
}

/*
  The following zoom:1 rule is specifically for IE6 + IE7.
  Move to separate stylesheet if invalid CSS is a problem.
*/

.clearfix {
  zoom: 1;
}
</style>



</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
      <div class="h_phone">Need Help? Call Us +1 (800) 123 4567</div>
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>

  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        		
        <nav class="">
          <ul class="sf-menu">
            <li class="current"><a href="UserIndex.html">Home</a></li>
           
            </li>
            <li><a href="UserProduct.html">Plants</a></li>
			 <li><a href="UserAccessories.html">Accessories</a></li>
			 <li><a href="UserServices.html">Services</a>
       
            <li><a href="UserEnquiry.php">Enquiry</a>
             <li><a href="index.html">Logout</a></li>

			 
          </ul>
		 
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="slider-relative">
  <div class="slider-block">
    <div class="slider"> <a href="#" class="prev"></a> <a href="#" class="next"></a>
      <ul class="items">
        <li> <img src="images/slide.jpg" alt="">
          <div class="banner">We Nurture <br><br>Nature</div>
            
           
        </li>
        <li> <img src="images/slide1.jpg" alt="">
          <div class="banner">Go Green <br><br></div>
            
            
        </li>
        <li> <img src="images/slide2.jpg" alt="">
          <div class="banner">Nurture Nature<br><br> For Your Future</div>
            
        </li>
		 <li> <img src="images/slide3.jpg" alt="">
          <div class="banner">Decorate Your Life<br><br> With Plants</div>
            
        </li>
        <li> <img src="images/slide4.jpg" alt="">
          <div class="banner">Go Green  </div>
         
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="content">
  <div class="black">
    <div class="page1_block">
      <div class="container_12">
        <div class="grid_12">
          <font color="#000000"><b><h2>Live Your Life With Plants...!</h2></b></font>
		  <p><font color="#000000">Nursery plants require due care and attention after having either emerged from the seeds or have been raised from other sources like rootstock or through tissue culture technique. Generally they are grown in the open field under the protection of mother nature where, they should be able to face the local environment. It is the duty & main objective of a commercial nursery grower to supply the nursery plants with suitable conditions necessary for their development & growth. This is the major work of management in the nursery which includes all such operations right from the emergence of young plantlet till they are fully grown-up or are ready for uprooting & transplanting in the main fields.</font></p>
          
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="gray">
  <div class="container_12">
      <div class="grid_12">
        <div class="car"> <a href="#" class="prev1"></a> <a href="#" class="next1"></a>
          <div class="car_div">
            <ul class="carousel1">
              <li><a href="#"><img src="images/logo1.png" alt=""></a></li>
              <li><a href="#"><img src="images/logo2.png" alt=""></a></li>
              <li><a href="#"><img src="images/logo3.png" alt=""></a></li>
              <li><a href="#"><img src="images/logo4.png" alt=""></a></li>
              <li><a href="#"><img src="images/logo2.png" alt=""></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_2">
      <div class="copy"> <a href="index.html" class="footer_logo"><img src="images/footer_logo.png"	alt=""></a> &copy; 2045  </div>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="Contactus.php">Contact</a></li>
        <li><a href="about.html">News</a></li>
        <li><a href="about.html">Our People</a></li>
        <li><a href="blog.html">Blogs</a></li>
        <li><a href="about.html">About Us</a></li>
		<li><a href="Career.html">Carrer</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="FooterManagement Of nursery.php">Management Of Nursery</a></li>
        <li><a href="FooterTips.php">Tips</a></li>
		<li><a href="FooterGoGreen.php">Go Green </a></li>
        <li><a href="FooterGreenBenifits.php">Green Benifits</a></li>
        
       <!-- <li><a href="#">Suppliers</a></li>
		-->
      </ul>
  
   <!-- <div class="grid_2">
      <ul>
        <li><a href="#">Science &amp; Safety</a></li>
        <li><a href="#">Product </a></li>
        <li><a href="#">Our Brands</a></li>
        <li><a href="#">Agricultural </a></li>
		<li><a href="#">Terms and Conditions</a></li>
        <li><a href="#">Traits &amp; Technologies</a></li>
      </ul>-->
    </div>
    <div class="grid_3 prefix_1">
      <h4>Newsletter</h4>
      <form id="newsletter" action="#">
        <div class="success">Your subscribe request has been sent!</div>
        <label class="email"> <span>Enter e-mail address</span>
          <input type="email" value="" >
          <a href="#" class="btn" data-type="submit">Subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
      </form>
	   <div class="socials"><a href="#"></a><a href="#"></a></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="f_bot">
    <div class="container_12">
     <!-- <div class="grid_12">Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a></div>-->
    </div>
  </div>
  
   



	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h2 class="modal-title" id="myModalLabel"><span class="style5"><center>Registration</center></span></h2>
                   </div>
                    <div class="modal-body">
                      <div class="appointment-area">
                        <form method="post"  action="Registration.php" ><center><h4 class="style3">
<div class="col-sm-11 input-group"> <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
<input class="form-control input-lg" name="nm" type="text" id="nm" width="6" placeholder=" Fullname*"  /></div>
<br>
<div class="col-sm-11 input-group"> <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
<input class="form-control input-lg" name="add" type="text" id="add"  placeholder=" Address*" /></div><br>

<div class="col-sm-11 input-group"> <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
<input class="form-control input-lg" name="con" type="text" id="con"  placeholder=" Contact Number*" /></div><br>

<div class="col-sm-11 input-group"> <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
<input class="form-control input-lg" name="eid" type="text" id="eid" placeholder=" Email-Id*" /></div><br>

<div class="col-sm-11 input-group"> <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
<input class="form-control input-lg" name="pwd" type="password" id="pwd" placeholder=" Password*" /></div><br>

<div class="col-sm-11 input-group"> <span class="input-group-addon"><i class="fa fa-repeat fa-fw"></i></span>
<input class="form-control input-lg" name="cpwd" type="password" id="cpwd" placeholder=" Re-Enter Password*"/></div><br>
</h4>
<h3 class="style1">
<input type="Submit" style="width:380px;" name="Submit" id="Submit" onClick="return valid()" value="GET STARTED" class="btn btn-success" /></h3>
</center>
</form>
                      </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
            </div>
          </div>
        </div>
		
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h2 class="modal-title" id="myModalLabel"><span class="style5"><center>Login</center></span></h2>
                   </div>
                    <div class="modal-body">
                      <div class="appointment-area">

<center><form method="post" action="login.php" ><br><br>

<div class="col-sm-12 input-group"> <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
<input class="form-control input-lg" type="text" id="unm" name="unm" placeholder="Email-Id / Mobile Number"  /></div><br>

<div class="col-sm-12 input-group"> <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
<input class="form-control input-lg" type="password" id="pwd1" name="pwd1" placeholder="Password" /></div><br><br>

<input type="submit" name="submit" onClick="return login()" value="submit" class="btn btn-success" style="width:390px;"/></center>
<div class="col-sm-8 input-group"> 
</form>
<label>
<a data-toggle="modal" data-target="#myModal" href="#myModel" data-hover="Appoinment">New User?</a>
</label></div>


                    </div>
                  </div>                    
              </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div>
        </div>
 
 
 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

		<script>
      		new WOW().init();
		</script>

		<script>
			$(document).ready(function() {
  				$("#starting-slider").owlCarousel({
  					autoPlay: 3000,
      				navigation : false, // Show next and prev buttons
      				slideSpeed : 700,
      				paginationSpeed : 1000,
      				singleItem:true
  				});
			});
		</script>


		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
 
 
 
 
</footer>
  

</body>
</html>
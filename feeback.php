


<!DOCTYPE html>
<html lang="en">
<head>
<title>Garden Truck | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" type="text/css" href="js/font-awesome.min.css">



<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/forms.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
	<script type="text/javascript">
function LimtCharacters(txtMsg, CharLength, indicator) {
chars = txtMsg.value.length;
document.getElementById(indicator).innerHTML = CharLength - chars;
if (chars > CharLength) {
txtMsg.value = txtMsg.value.substring(0, CharLength);
}
}
</script>
<script language="JavaScript">
function valid()
{
  var Name=document.getElementById("nm").value;
  var Contact=document.getElementById("contact").value;
  var EmailId=document.getElementById("email").value;
  var Feedback=document.getElementById("feedback").value;
  
  
    
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
	   
	
	if(Contact=="")
	 {
	   alert("Please Enter Mobile Number...!");
	   return false;
	 }
	 if(isNaN(Contact))
	 {
	   alert("Please Enter Only Numbers...!");
	   document.getElementById("contact").value='';
	   document.getElementById("contact").focus();
	   return false;
	 }
	 if(Contact.length!=10)
	 {
	   alert("Please Enter Only 10 Numbers...!");
	   document.getElementById("contact").value='';
	   document.getElementById("contact").focus();
	   return false;
	 }
	   
	    if(EmailId=="")
	 {
	   alert("Please Enter Email_Id...!");
	   return false;
	  
	 }
	 if(Feedback=="")
	 {
	   alert("Please Enter Feedback...!");
	   return false;
	 }
	 
	 
	   return true;
	 }  
	 </script>
<style type="text/css">
div.stars
  {
    width:270px;
    display:inline-block;
  }
 
  input.star
  {
    display:none;
  }
 
  label.star
  {
    float:right;
    padding:8px;
    font-size:36px;
    color:#444;
    transition:all .2s;
  }
  
  input.star:checked ~ label.star:before
  {
    content:'\f005';
	color:#003333;
	transition: all .25s;
  }
	
  input.star-5:checked ~ label.star:before
  {
    color:#3399CC;
	text-shadow:0 0 20px #955;
  }
	  
  input.star-1:checked ~ label.star:before
  {
	color:#003333;
	
  }
	   
  label.star:hover
  {
	transform:rotate(-15deg) scale(1.3);
  }
	   
  label.star:before
  {
	content:'\f006';
	font-family:FontAwesome;
  }
        </style>
	<style type="text/css">

.style1 {
font-size: 20px;
font-weight: normal;
	
font-family: 'Andalus';
color:#16A085;
}
.style3 {font-size: 18px}
    </style>	
	<style type="text/css">
	.style44{
	margin-left: 100px;
	}	
	</style>
</head>

<body>
  <?php
include("connection.php");
if(isset($_GET["mode"])=="save")
{
echo"<script>alert('Record inseterd successfully')</script>";
}
?>
<header>
  <div class="container_12">
    <div class="grid_12">
      <div class="h_phone">Need Help? Call Us +1 (800) 123 4567</div>
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a> </h1>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <div class="socials"><a href="#"></a><a href="#"></a></div>
      <!--  <div class="autor"> <a href="#">User Login</a> Social </div>-->
        <nav>
          <ul class="sf-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a>
              
            </li>
            <!-- <li><a href="products.html">Products</a></li> -->
            <li><a href="blog.html">Blog</a></li>
			<li><a href="Career.html">Careers</a></li>
			
            <li class="current"><a href="contact.html">Contacts</a>
			<li><a href="gallery.html">Gallery</a></li></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>

	  
      
		
      <div class="white wt2">
		<center> <div class="style44"> <form method="post"   action="feedback.php">
      <center><h1>Feedback</h1></center>

			<table width="795" height="442"  cellpadding="4" cellspacing="4" align="center" >
			<br/>
			<tr>
			<td width="214" height="56"><span class="style1">Full Name: </span></td>
			<td width="496"><input name="nm" class="style1" type="text" id="nm" size="35" placeholder="Enter Your Name" /></td>
			</tr>
			<tr>
			  <td height="48"><span class="style1">Email-Id :</span></td>
			  <td><input name="email" class="style1" type="text" id="email" size="35" placeholder="Enter Your Email " /></td>
			</tr>
			<tr>
			<td height="57"><span class="style1">Contact Number :</span></td>
			<td><input name="contact"  class="style1" type="text" id="contact" size="35" placeholder="Enter Contact Number..."  /></td>
			</tr>
			<tr>
			<td height="126"><span class="style1">Message:</span> </td>
			<td><textarea name="feedback" class="style1" rows="5" cols="50" id="feedback" placeholder="Enter your Comments here..."></textarea>
			<br> <br>
			<!--<label id="limit"><span class="style4">Limit:</span></label>
			<label id="lblcount"><span class="style4">250</span></label></td>-->
			</tr>
     <!-- <tr>
        <td width="57%"><span class="style1">Dates :</span></td>
        <td><input name="dates"  class="style1" type="date" id="dates" size="35"  /></td>
        </tr>-->
			<tr>
			<td width="214"><span class="style1">Rate:</span></td>
			<td><div class="stars">
					<input class="star star-5" id="star-5" value="star-5" type="radio" name="star" />
					<label class="star star-5" for="star-5"></label>
					<input class="star star-4" id="star-4" value="star-4" type="radio" name="star" />
					<label class="star star-4" for="star-4"></label>
					<input class="star star-3" id="star-3" value="star-3" type="radio" name="star" />
					<label class="star star-3" for="star-3"></label>
					<input class="star star-2" id="star-2" value="star-2" type="radio" name="star" />
					<label class="star star-2" for="star-2"></label>
					<input class="star star-1"  id="star-1" value="star-1" type="radio" name="star" />
					<label class="star star-1" for="star-1"></label></div></td>
			</tr>
			<tr>
			<td><input type="submit" name="Submit" value="Submit" class="btn btn-success " onClick="return valid()"/></td>
			</tr>
		  </table>
		</form>
		</center>
		
        
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
  
   
    </div>
    <div class="grid_3 prefix_1">
      <h4>Newsletter</h4>
      <form id="newsletter" action="#">
        <div class="success">Your subscribe request has been sent!</div>
        <label class="email"> <span>Enter e-mail address</span>
          <input type="email" value="" >
          <a href="#" class="btn" data-type="submit">Subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
      </form>
    </div>
    <div class="clear"></div>
  </div>
  <div class="f_bot">
    <div class="container_12">
      <!--<div class="grid_12">Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a></div>-->
    </div>
  </div>
</footer>
</body>
</html>
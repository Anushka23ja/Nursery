<?php /*?>
<?php
session_start();
$ins=$_SESSION["ins1"];
if($ins=="Yes")
{
echo "<script> alert('Record inserted')</script>";
session_unset();
}

?>

<?php */?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Garden Truck | Services</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">


<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->

<script language="JavaScript">
function valid()
{
  var Name=document.getElementById("nm").value;
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
	   
	   return true;
	 }  
	 </script>
	 <style type="text/css">

.style1 {
font-size: 16px
font-weight: normal;
	
font-family: 'Headland One', serif;
color:#151212;
}

</style>
</head>
<body>

  <?php
if(isset($_POST["idd"])=="loginfail")
{
  echo"<script>alert('Login unsuccessfull')</script>";
  }
?>

<header>
  <div class="container_12">
    <div class="grid_12">
     <!-- <div class="h_phone">Need Help? Call Us +1 (800) 123 4567</div>-->
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a> </h1>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <div class="socials"><a href="#"></a><a href="#"></a></div>
        <!--<div class="autor"> <a href="#">User Login</a> Social </div>-->
        <nav>
          <ul class="sf-menu">
            <li><a href="AdminIndex.html">Home</a></li>
          
           <li><a href="AdminLogin.php">Login</a>
              
            </li>
            
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>

<br/>
<br/>
<center><form method="post"  action="Adminquery.php" class="style1" ><h3><b><font color="#000000">Admin LogIn</font></b></h3>
    <table width="445" height="158" border="2" align="center" cellpadding="1" cellspacing="1" >
      <tr>
        <td width="133" height="60"><b><i>UserName : </i></b></td>
        <td width="326"><input type="text" id="nm" name="nm" size="20" placeholder="Enter UserName"/></td>
      </tr>
      <tr>
        <td><b><i>Password :  </i></b></td>
        <td><input type="password" id="pwd" name="pwd" size="20" placeholder="Enter Password" /></td>
      </tr>
      <tr>
        <td><input type="submit"  class="btn btn-success "  name="submit" onClick="return valid()" value="submit" /></td>
      </tr>
    </table>
 
</form></center>


<!--
<footer>
  <div class="container_12">
    <div class="grid_2">
      <div class="copy"> <a href="index.html" class="footer_logo"><img src="images/footer_logo.png"	alt=""></a> &copy; 2045 <a href="#">Privacy Policy</a> </div>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Delivery</a></li>
        <li><a href="#">Legal Notice</a></li>
        <li><a href="#">Terms and Conditions</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="#">New Products</a></li>
        <li><a href="#">Top Sellers</a></li>
        <li><a href="#">Specials</a></li>
        <li><a href="#">Manufacturers</a></li>
        <li><a href="#">Suppliers</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="#">Science &amp; Safety</a></li>
        <li><a href="#">Product </a></li>
        <li><a href="#">Our Brands</a></li>
        <li><a href="#">Agricultural </a></li>
        <li><a href="#">Traits &amp; Technologies</a></li>
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
      <div class="grid_12">Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a></div>
    </div>
  </div>
</footer>-->
</body>
</html>
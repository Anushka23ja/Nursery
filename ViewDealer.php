<!DOCTYPE html>
<html lang="en">
<head>
<title>Garden Truck | About</title>
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
<script type="text/javascript" src="slimbox/jquery.min.js"></script>
<script type="text/javascript" src="slimbox/slimbox2.js"></script>

<script src="js/forms.js"></script>
<script src="js/superfish.js"></script>


<script src="jquery-1.4.4.js"></script>
<script src="jquery.ui.core.js"></script>
<script src="jquery.ui.widget.js"></script>
<script src="jquery.ui.datepicker.js"></script>
<link rel="stylesheet" href="slimbox/slimbox2.css" type="text/css" media="screen" />
<!--<script>
/*$(window).load(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
yy/mm/dd

*/

$(function() {
$( "#dt" ).datepicker({dateFormat: "yy-mm-dd"});
});
</script>-->

<script language="javascript">
function valid()
{



var dt1=document.getElementById('dt').value;
if(dt1=="")
{
alert("Plz Select Date..");
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
<header>
  <div class="container_12">
    <div class="grid_12">
      <!--<div class="h_phone">Need Help? Call Us +1 (800) 123 4567</div>-->
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
           <li><a href="AdminHome.html">Home</a></li>
           <li><a href="">Employee</a>
	         <ul>
			  <li><a href="Employee.php">Add</a></li>
           
                <li><a href="#">Modify</a></li>
			   <li><a href="EmployeeDelete.php">Delete</a></li>
             </ul>
			 </li>
		    <li><a href="">Product</a>
			 <ul>
			 <li><a href="Product.php">Add</a></li>
               
               <li><a href="#">Modify</a></li>
			   <li><a href="">Delete</a></li>
             </ul>
			 </li>
		   <li><a href="">Dealer</a>
			 <ul>
			 <li><a href="Dealer.php">Add</a></li>
              
               <li><a href="#">Modify</a></li>
			    <li><a href="">Delete</a></li>
             </ul>
			 </li>
			   <li><a href="">Services</a>
			  <ul>
			 <li><a href="Services.php">Add</a></li>
              
               <li><a href="#">Modify</a></li>
			    <li><a href="">Delete</a></li>
             </ul>
			 </li>
			 <li><a href="">Career</a>
			 <ul>
			 <li><a href="AdminCareer.php">Add</a></li>
              
               <li><a href="#">Modify</a></li>
			    <li><a href="">Delete</a></li>
             </ul>
			 </li>
           <li><a href="">View</a>
			 <ul>
               <li><a href="ViewFeedback.php">Feedback</a></li>
               <li><a href="ViewEmployee.php">Employee</a></li>
			   <li><a href="ViewProduct.php">Product</a></li>
			   <li><a href="ViewDealer.php">Dealer</a></li>
			   <li ><a href="ViewServices.php">Services</a></li>
			   <li><a href="ViewEnquiry.php">Enquiry</a></li>
             </ul>
			 </li>
<li><a href="AdminHome.html">Logout</a> </li>

<li><a href="AdminHome.html">back</a></li>

</ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="content">
  <div class="black bl1">
    <div class="container_12">
      <div class="grid_8">
      <!--  <h3>Employee</h3>-->
        <div class="extra_wrapper">
          <p class="col1"><h1><b><br><center>
		  <form id="form5" name="form5" method="post" action="ViewDealer1.php"  class="style1">Dealer
		  <br/>
		  
		  
		  <br/>
<table width="521" border="3" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="124" style="color:#000033;font-size:20px;" align="center">Select Date: </td>
    <td width="208" align="center"><input id="dt" name="dt" type="date" border="2"  />
	<img onClick="javascript:NewCssCal ('dt','ddMMyyyy')"/>
	</td>
	<td width="167" align="center">&nbsp;
	  <label>
        <input type="submit" class="btn btn-success " name="Submit" value="View" style="font-size:20px;font-weight:bold;width:100px;" style="border:double;  " onClick="return valid();" onClick= "return valid();"/>
		
        </label></td>
  </tr>
  </table>
  <br/>
  <table align="center">
  <tr>
  
  
    
  </tr>
</table>
</form></center>
		</div>
      <div class="grid_4">
     
      <div class="clear"></div>
    </div>
  </div>
  <!--<div class="white wt1">
    <div class="container_12">
      <div class="clear"></div>
    </div>-->
  </div>
<!--  <div class="gray g2">
    <div class="container_12"></div>
    </div>-->
</div>

	
	
	
</body>
</html>

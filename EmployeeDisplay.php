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
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->

<script language="JavaScript">
function valid()
{
  var Name=document.getElementById("nm").value;
  var Address=document.getElementById("add").value;
  var Contact=document.getElementById("con").value;
  var EmailId=document.getElementById("eid").value;
  var Qulification=document.getElementById("qul").value;
  var Post=document.getElementById("post").value;
  var Experience=document.getElementById("exp").value; 
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
	  if( Qulification=="")
	 {
	   alert("Please Enter Qulification...!");
	   return false;
	 }
	  if(Experience=="")
	 {
	   alert("Please Enter Experience...!");
	   return false;
	 }
	 if(Post=="")
	 {
	   alert("Please Enter Post...!");
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
		   <li><a href="">Dealer</a>
			 <ul>
			 <li><a href="Dealer.php">Add</a></li>
              
               <li><a href="#">Modify</a></li>
			    <li><a href="">Delete</a></li>
             </ul>
           <li><a href="">View</a>
			 <ul>
               <li><a href="ViewFeedback.php">Feedback</a></li>
               <li><a href="ViewEmployee.php">Employee</a></li>
			   <li><a href="ViewProduct.php">Product</a></li>
			   <li><a href="ViewDealer.php">Dealer</a></li>
             </ul>
			 </li>
             <li><a href="index.html">Logout</a></li>
             
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
          <p class="col1"><h1><b><br>
          
		  <center>
		  <?php
		  include("connection.php");
		   if (isset($_POST["submit1"])=="Display")
{
$q="select * from employee";
$res=mysql_query($q);
if(mysql_num_rows($res)>0)
{
 echo'<table border="1">
 <tr><th>Id</th><th>Name</th><th> Address</th><th>Contact</th><th>Emailid</th><th>Qulification</th><th>Post</th><th>Experience</th></tr>';
 
 while($rows=mysql_fetch_row($res))
 {
   echo'<tr>';
   echo"<td>$rows[0]</td><td>$rows[1]</td><td>$rows[2]</td><td>$rows[3]</td><td>$rows[4]</td><td>$rows[5]</td><td>$rows[6]</td><td>$rows[7]</td>";
  
   echo'</tr>';
 }
 echo'</table>';
 }
}  
  
		  ?>
       	  </center>
		  
		  
		  
		  
		  
		  
      </div>
      <div class="grid_4">
       <!-- <h3>Advantages</h3>
        <p class="p1">Kiorem ipsum dolor sit amet, consectetur adipiscing elitlore ylot. Integer semper dapibus pharetra. Aenean a rhoncuse justo. Henean consectetur tellus non purus accumsan idtril mollisar lorem commodo. Rtiam quis ante mattis laoreetewi risus eterto condimentum du. Sed id elementum nibhew ot. Nunc consewity gretroloni rew treol.</p>
        <div class="col1"><a href="#">Uokhasellus id adipiscing nu. </a></div>
        <p class="p2">Honecvelqq whjugue et nulla vehiculuo. </p>
        <div class="col1"><a href="#">Kokhasellus id dipiscing numa </a></div>
        <p class="p2">Koonecvelqq jugue et nulla vehiculup. </p>
        <div class="col1"><a href="#">Puokhasellus id adipiscing nutr. </a></div>
        <p class="p2">Jhonecvelqq whjugue et nulla vehiculum. </p>
        <div class="col1"><a href="#">Gfokhasellus id adipiscing nutre. </a></div>
        Kolonecvelqq whjugue nulla vehiculupi. </div>-->
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
<footer>
	
	
	
<!--<footer>
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
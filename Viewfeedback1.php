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
</script>
</script>
<style>
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

/*tr:nth-child(even){background-color:#33CCFF}*/

th {
    background-color:#339966;
    color: white;
}
</style>
</head>
<body>
	<header>
  <div class="container_12">
    <div class="grid_12">
    <!--  <div class="h_phone">Need Help? Call Us +1 (800) 123 4567</div>-->
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a> </h1>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <div class="socials"><a href="#"></a><a href="#"></a></div>
       <!-- <div class="autor"> <a href="#">User Login</a> Social </div>-->
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


<li><a href="viewfeedback.php">back</a></li>
</ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>

<main id="main">
<section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">

<font size="3">
            <table align="center">
			<h1><center><u> view Feedback</u></center></h1>
			<?php
					include("Connection.php");
					//session_start();

					//function getdata()
					//{

					$dt=$_POST["txt_dt"];

					$q="select * from feedback where dates='$dt'";

					//$res=mysql_query($q);
					$rs = $conn -> query($q);


					//if(mysql_num_rows($res)>0)
						if($rs -> num_rows > 0)
						{

								echo "<br/>";
								echo "<form method='post' >";
								echo "<table border='3' align='center'>";
								echo "<tr>
								
								<td align='center'
								style='width:240px;height:40px;font size:18px;font-weight:bold'>Dates</td>

								<td align='center'
								style='width:240px;height:40px;font size:18px;font-weight:bold'>Name</td>
								
								<td align='center'
								style='width:240px;height:40px;font size:18px;font-weight:bold'>Email</td>
								
								<td align='center'
								style='width:240px;height:40px;font size:18px;font-weight:bold'>Moblie number</td>
								
								<td align='center'
								style='width:240px;height:40px;font size:18px;font-weight:bold'>Message</td>
								
								
								<td align='center'
								style='width:240px;height:40px;font size:18px;font-weight:bold'>Rate</td>
							
						</tr>";

					while($row = $rs -> fetch_assoc())
					{

					echo "<tr>";
					echo"<td align='center'
					style='height:20px;font-size:14px;'>".$row['dates']."</td>";
					echo"<td align='center'
					style='height:20px;font-size:14px;'>".$row['name']."</td>";
					echo"<td align='center'
					style='height:20px;font-size:14px;'>".$row['email']."</td>";
					echo"<td align='center'
					style=height:20px;font-size:14px;'>".$row['mob']."</td>";
					echo"<td align='center'
					style='height:20px;font-size:14px;'>".$row['msg']."</td>";
					echo"<td align='center'
					style='height:20px;font-size:14px;'>".$row['rate']."</td>";

					echo "</tr>";
					//session_unset();
					//$_SESSION["dts"]=$row[5];
					}
					echo "</table>";
					echo "</form>";
					}


					else
							{
							echo "<br/>";
							echo "<form method='post'>";
							echo "<table border='1' align='center'>";
							echo "There is No Feedback..!!";
						
							echo "</tr>";
							echo "</table>";
							echo "</form>";	
							echo "</font>";
							
							}

					//} //btn end
					//function end

?>
</div>
						</div>
						</section>

<div class="content">
  <div class="black bl1">
    <div class="container_12">
      <div class="grid_8">
      <!--  <h3>Employee</h3>-->
        <div class="extra_wrapper">
          <p class="col1"><h1><b><br>
		
			
			
		<br/>
		<br/>
		<br/>
		<br/>
	
			<!--<form id="form2" method="post" action="Viewfeedback.php">
			<table width="389" border="0" align="center" bgcolor="#999999">
		
			<tr>
			
			<td align="center" > <input type = "submit" name="Submit" class="btn btn-success " value="Back"  style="font-size:18px;font-weight:bold" style="border:double";  onClick="return valid();"/>
			 </td>
			 
			</tr>
			</table>
			
			</form>
	</div>-->
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
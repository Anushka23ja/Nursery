<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");

/*$unm=$_POST["nm"];
$pass=$_POST["pwd"];*/

if(isset($_POST["submit"])=="submit")
{

	$unm=$_POST["nm"];
	$pass=$_POST["pwd"];


	$q="select * from admin where nm='$unm'";

	/*$res=mysql_query($q);*/
	$result = $conn -> query($q);

	/*$rows=mysql_fetch_row($res);
	$UserName=$rows[0];
	$Password=$rows[1];*/

	$row = $result -> fetch_assoc();


		$nm=$row['nm'];

		$pwd=$row['pwd'];



	if($unm==$nm && $pass==$pwd)
	{
	   /*$_SESSION["ins1"]="Yes";
			header('Location:AdminLogin.php');*/
			echo "<script>alert('Login Successful...!')</script>";
			header('Location:AdminHome.html');
			exit();
	}
	else
	{
   	   echo ('Login UnSuccessful...!');
	}
	 
}
?>
</body>
</html>

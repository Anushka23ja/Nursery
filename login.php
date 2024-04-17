<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");

/*$Username=$_POST["unm"];
$Password=$_POST["pwd1"];*/

if(isset($_POST["submit"])=="sumbit")
{

	$unm = $_POST["unm"];
	$pass = $_POST["pwd1"];

	/*$q="select * from registration where Email='$Username'";*/
	$q="select * from registration where email ='$unm'";

	// $res=mysql_query($q);
	$result = $conn->query($q);

	// $rows=mysql_fetch_row($res);
	$row = $result->fetch_assoc();

	$nm=$row['email'];
	$pwd=$row['pass'];

	if($unm==$nm && $pass==$pwd)
	{
	   echo "<script>alert('Login Successful...!')</script>";
	   header('Location:UserIndex.php');
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

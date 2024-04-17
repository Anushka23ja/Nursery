<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("Connection.php");
$cpwd=$_POST["opwd"];
$opwd=$_POST["npwd"];
$npwd=$_POST["cpwd"];

if(isset($_POST["Submit"])=="Submit")


{
$q="select * from registration where Password='$opwd'";

$res=mysql_query($q);

$rows=mysql_fetch_row($res);


$pwd1=$rows[1];

if($npwd==$cpwd)
{

$q1="update Password set Password='$npwd' where Password='$pwd1'";
  mysql_query($q1,$link)or die(mysql_error());
echo "<script> alert('Password Changed Successfully..!')</script>";
/*header("location:AdminLogin1.php");*/
		
}
else
{
echo "<script> alert('Password Does not  matched..!')</script>";
}
}
?>

</body>
</html>

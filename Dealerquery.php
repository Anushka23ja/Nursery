<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
include("connection.php");


$q="select ifnull(max(id),0) from dealer";

$res = $conn -> query($q);

if(isset($_POST["submit"])=="submit")
{
            $name=$_POST["nm"];
            $add=$_POST["add"];
            $cn=$_POST["con"];
            $email=$_POST["eid"];
            $product=$_POST['pd'];
            $dt = date('Y-m-d');



            $q1= "INSERT INTO dealer (dealer_name,dealer_add,dealer_mob,dealer_email,dealer_product,dates) VALUES ('$name','$add','$cn','$email','$product','$dt')";
          
            if($conn -> query($q1) === TRUE)
            {

              echo"<script> alert('Record Inserted')</script>";
              header('Location: Dealer.php');
              exit();
            }
            else
            {
              echo " Error inserting record: " . $conn -> error;
            }
}

/*$q1="Select ifnull(max(Id),0) from dealer";


  $res=mysql_query($q1,$link);
  $row=mysql_fetch_row($res);
  $Id=$row[0];
  $Id=$Id+1;*



$name=$_POST["nm"];
$address=$_POST["add"];
$contact=$_POST["con"];
$Email=$_POST["eid"];
$ProductDescription=$_POST["pd"];

$dt=date('y/m/d');
If(isset($_POST["Submit"])=="Submit")
{
  
  
  
  $q="insert into dealer values ($Id, '$name', '$address', '$contact', '$Email','$ProductDescription', '$dt')";
  mysql_query($q,$link) or die ('Failed to insert');
  echo"<script> alert('Record Inserted')</script>";
  
 }
 
 /*If(isset($_POST["Delete"])=="Delete")
{
  
  
  
  $q="Delete from Employee where Name= '$name'";
  mysql_query($q,$link) or die ('Failed to delete');
  echo"<script> alert('Record Deleted')</script>";
 }
 
 
 
 if (isset($_POST["submit1"])=="Display")
{
$q="select * from dealer";
$res=mysql_query($q);
if(mysql_num_rows($res)>0)
{
 echo'<table border="1">
 <tr><th>Id</th><th>Name</th><th> Address</th><th>Contact</th><th>Emailid</th><th>ProductDescription</th></tr>';
 
 while($rows=mysql_fetch_row($res))
 {
   echo'<tr>';
   echo"<td>$rows[0]</td><td>$rows[1]</td><td>$rows[2]</td><td>$rows[3]</td><td>$rows[4]</td><td>$rows[5]</td>";
   /*echo'<td><label>

<b><a href="EmployeeEdit.html">Edit</a></b>
</label></td';
   echo'</tr>';
 }
 echo'</table>';
 }
}  */
  
?>
</body>
</html>

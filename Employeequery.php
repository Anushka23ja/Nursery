<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
include("connection.php");
$q1="Select ifnull(max(Id),0) from employee";


 /* $res=mysql_query($q1,$link);
  $row=mysql_fetch_row($res);
  $Id=$row[0];
  $Id=$Id+1;
*/



if(isset($_POST["submit"])=="submit")
{
          $name=$_POST["nm"];
          $add=$_POST["add"];
          $cn=$_POST["con"];
          $email=$_POST["eid"];
          $qula=$_POST["qul"];
          $post=$_POST["post"];
          $exp=$_POST["exp"];
          $dt = date('Y-m-d');  
  
  
         $q1= "INSERT INTO employee (emp_name,emp_add,emp_mob,emp_email,emp_qualify,emp_post,emp_exp,dates) VALUES ('$name','$add','$cn','$email','$qula','$post','$exp','$dt')";

         if($conn -> query($q1) === TRUE)
         {

          echo"<script> alert('Record Inserted')</script>";

          header('Location: Employee.php');
          exit();
         }
         else
            {
              echo " Error inserting record: " . $conn -> error;

            }
  }
  
  
  
  
  
  
  /*$q="insert into employee values ($Id, '$name', '$address', '$contact', '$Email','$Qulification','$Post','$Experience', '$dt')";
  mysql_query($q,$link) or die ('Failed to insert');
  echo"<script> alert('Record Inserted')</script>";
  
 
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
}  */
  
 

?>
</body>
</html>

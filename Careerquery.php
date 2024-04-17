<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
include("connection.php");

$q="select ifnull(max(id),0) from career";

$res = $conn -> query($q);

if(isset($_POST["submit"])=="submit")
{
            $position=$_POST["nm"];
            $qual=$_POST["qul"];
            $exp =$_POST["exp"];
            $loc=$_POST["jl"];
            $profile=$_POST["jp"];
            $dt = date('Y-m-d');



            $q1= "INSERT INTO career (position,qualify,exp,job_loc,job_profile,dates) VALUES ('$position','$qual','$exp','$loc','$profile','$dt')";
          
            if($conn -> query($q1) === TRUE)
            {

              echo"<script> alert('Record Inserted')</script>";
              header('Location: AdminCareer.php');
              exit();
            }
            else
            {
              echo " Error inserting record: " . $conn -> error;

            }
  }












/*$q1="Select ifnull(max(Id),0) from career";
  $res=mysql_query($q1,$link);
  $row=mysql_fetch_row($res);
  $Id=$row[0];
  $Id=$Id+1;



$Position=$_POST["nm"];
$Qulification=$_POST["qul"];
$Experience=$_POST["exp"];
$JobLoc=$_POST["jl"];
$Jobprofile=$_POST["jp"];


$dt=date('y/m/d');
If(isset($_POST["Submit"])=="Submit")
{
  
  
  
  $q="insert into career values ($Id, '$Position', '$Qulification','$Experience', '$JobLoc','$Jobprofile','$dt')";
  mysql_query($q,$link) or die ('Failed to insert');
  echo"<script> alert('Record Inserted')</script>";
  
 }
 if (isset($_POST["submit1"])=="Display")
{
$q="select * from career";
$res=mysql_query($q);
if(mysql_num_rows($res)>0)
{
 echo'<table border="1">
 <tr><th>Id</th><th>Position</th><th>Qulification</th><th>Experience</th><th>Job location</th><th>job Profile</th></tr>';
 
 while($rows=mysql_fetch_row($res))
 {
   echo'<tr>';
   echo"<td>$rows[0]</td><td>$rows[1]</td><td>$rows[2]</td><td>$rows[3]</td><td>$rows[4]</td><td>$rows[5]</td>";
  
   echo'</tr>';
 }
 echo'</table>';
 }
} */ 
  
 

?>
</body>
</html>

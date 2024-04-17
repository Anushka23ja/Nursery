<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include("connection.php");
/*$q1="Select ifnull(max(Id),0) from registration";
  // $res=mysql_query($q1,$link);
  $res = $conn -> query($q1,$conn);
  // $row=mysql_fetch_row($res);
  $row = $result->fetch_assoc($res);
  $Id=$row[0];
  $Id=$Id+1;*/

  $q="select ifnull(max(id),0) from registration";

  $res = $conn -> query($q);

  if(isset($_POST["Submit"])=="SUBMIT")
{
            $name=$_POST["nm"];
            $add=$_POST["add"];
            $cn=$_POST["con"];
            $email=$_POST["eid"];
            $Pass=$_POST["cpwd"];


  $q1= "INSERT INTO registration (name,address,mob,email,pass) VALUES ('$name','$add','$cn','$email','$Pass')";

        if($conn -> query($q1) === TRUE)
        {

                /*$q="insert into registration values ($Id, '$Name', '$Address', '$Contact', '$Email','$Password' )";
                $conn -> query($q,$conn) or die ('Failed to insert');*/

                echo"<script> alert('Record Inserted')</script>";
                header('Location: index.html');
                exit();
                
        }
        else
        {
                  echo " Error inserting record: " . $conn -> error;
        }

}
  
  ?>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include("connection.php");
/*$q1="Select ifnull(max(Id),0) from enquiry";
  $res=mysql_query($q1,$link);
  $row=mysql_fetch_row($res);
  $Id=$row[0];
  $Id=$Id+1;
*/
$q="select ifnull(max(id),0) from enquiry";

$res = $conn -> query($q);

if(isset($_POST["submit"])=="submit")
{
            $name=$_POST["nm"];
            $email=$_POST["email"];
            $cn=$_POST["contact"];
            $msg=$_POST["feedback"];
            $dt = date('Y-m-d');



            $q1= "INSERT INTO enquiry (user_name,user_email,user_mob,user_msg,dates) VALUES ('$name','$email','$cn','$msg','$dt')";
          
            if($conn -> query($q1) === TRUE)
            {

              echo"<script> alert('Record Inserted')</script>";
              header('Location: UserEnquiry.php');
              exit();
            }
            else
            {
              echo " Error inserting record: " . $conn -> error;

            }
                  /* $q="insert into enquiry values ($Id, '$Fullname',  '$Email','$Contact', '$Message','$dt' )";
                    mysql_query($q,$link) or die ('Failed to insert');
                    echo"<script> alert('Record Inserted')</script>";
                    /*<!--$_SESSION["ins1"]="Yes";
                  header('Location:Contactus.php');
                  }
                    <!--header("location:home.html ? mode=save");-->*/
            
}

?>
</body>
</html>

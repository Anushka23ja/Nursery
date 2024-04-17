<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include("connection.php");

/*$q1="Select ifnull(max(Id),0) from feedback";
  // $res=mysql_query($q1,$link);
  $result = $conn->query($q1,$conn);
  // $row=mysql_fetch_row($res);
  $row = $result->fetch_assoc($result);
  $Id=$row[0];
  $Id=$Id+1;*/

  if(isset($_POST["Submit"])=="Submit")
  {

            $name=$_POST["nm"];
            $email=$_POST["email"];
            $mob=$_POST["contact"];
            $msg=$_POST["feedback"];
            $rate=$_POST["star"];
            $dt = date('Y-m-d');


           /* $dt=$_POST["dates"];*/


      /* $q="insert into feedback values ($Id, '$Fullname',  '$Email','$Contact', '$Message','$Rate','$dt' )";*/
      $q1= "INSERT INTO feedback (name,email,mob,msg,dates,rate) VALUES ('$name', '$email', '$mob', '$msg','$dt','$rate')";
      
      if($conn -> query($q1) === TRUE)
      {
                /*$conn -> query($q,$conn) or die ('Failed to insert');*/

                echo "<script> alert('Record Inserted')</script>";

                /*<!--$_SESSION["ins1"]="Yes";*/
              header('Location: index.html');
              exit();
      }
      else
      {
        echo "Error inserting record : " . $conn -> error;
      }
                /* <!--header("location:home.html ? mode=save");-->*/
  }
?>
</body>
</html>

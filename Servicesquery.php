<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
include("connection.php");

/*$q="select ifnull(max(id),0) from services";

$res = $conn -> query($q);*/

if(isset($_POST["submit"])=="submit")
{
            $name=$_POST["nm"];
            $description=$_POST["des"];
            
            /*//file name with a random number so that similar donot get repalce
            $filename = rand(1000,1000). "-" . $_FILES["file"]["name"];

            //temporary file name to store file
            $tname = $_FILES["file"]["tmp_name"];

            //upload directory path
            $upload_dir = "upload/";

            //To move the uploaded file to specific loaction
            move_uploaded_file($tname,$upload_dir.'/'.$filename);*/


            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "./serviceUpload/". $filename;
            echo $folder;

            move_uploaded_file($tempname,$folder);

            $dt = date('Y-m-d');



            $q1= "INSERT INTO services (service_name,service_dse,upload,dates) VALUES ('$name','$description','$filename','$dt')";
          
            if($conn -> query($q1) === TRUE)
            {

              echo"<script> alert('Record Inserted')</script>";
             //move_uploaded_file($tempname,$folder);
              header('Location: AdminHome.html');
              exit();
            }
            else
            {
              echo " Error inserting record: " . $conn -> error;

            }
}









/*$q1="Select ifnull(max(Id),0) from services";
  $res=mysql_query($q1,$link);
  $row=mysql_fetch_row($res);
  $Id=$row[0];
  $Id=$Id+1;



$name=$_POST["nm"];
$description=$_POST["des"];

$Image="upload/".$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
$dt=date('y/m/d');
If(isset($_POST["Submit"])=="Submit")
{
  
  
  
  $q="insert into services values ($Id, '$name', '$description',  '$Image', '$dt')";
  mysql_query($q,$link) or die ('Failed to insert');
  echo"<script> alert('Record Inserted')</script>";
  
 }
 if (isset($_POST["submit1"])=="Display")
{
$q="select * from services";
$res=mysql_query($q);
if(mysql_num_rows($res)>0)
{
 echo'<table border="1">
 <tr><th>Id</th><th>Name</th><th> Description</th><th>Image</th></tr>';
 
 while($rows=mysql_fetch_row($res))
 {
   echo'<tr>';
   echo"<td>$rows[0]</td><td>$rows[1]</td><td>$rows[2]</td><td>$rows[3]</td>";
  
   echo'</tr>';
 }
 echo'</table>';
 }
}  */
  
 

?>
</body>
</html>

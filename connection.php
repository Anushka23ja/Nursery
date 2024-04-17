//<?php 

// $link=mysql_connect("localhost",'root',"")or die("Connection error try later");
// mysql_select_db('Plant',$link)or die("Connection error try later");
// ?>

<?php
$servername = "localhost"; //Replace with your server name
$username = "root"; //Replace with your MySQL username
$password = ""; //Replace with your MySQL password
$dbname = "plant"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection 
if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
?>
<?php
session_start();
if(!isset($_SESSION['Email']))
{
header('location:http://localhost/project1/front.php');
}
$v=$_SESSION['Email'];
$w=$_SESSION['Password'];
$Height=$_POST["Height"];
$Weight=$_POST["Weight"];
$con=mysqli_connect('localhost','root');
$b=mysqli_select_db($con,'healthcare');
$q="UPDATE customer SET Height=$Height WHERE Email='$v' && Password='$w'";
$r="UPDATE customer SET Weight=$Weight WHERE Email='$v' && Password='$w'";
$i=mysqli_query($con,$q);
$j=mysqli_query($con,$r); 
if($i==1 && $j==1)
{
  header('location:http://localhost/project1/fittness.php');  
}
else
{
    header('location:http://localhost/project1/askpage.php');
}
mysqli_close($con);
?>
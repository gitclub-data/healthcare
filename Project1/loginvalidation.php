<?php
session_start();
if(!isset($_SESSION['Email']))
{
header('location:http://localhost/project1/front.php');
}
$username=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'healthcare');
$q="Select * from customer where Email='$username' && Password='$password'";
$i=mysqli_query($con,$q);
$num=mysqli_num_rows($i);
if($num==1)
{
    $_SESSION['Email']=$username;
    $_SESSION['Password']=$password;
    header('location:http://localhost/project1/Medicalpage.php');
}
else
{
    header('location:http://localhost/project1/front.php');
}
?>
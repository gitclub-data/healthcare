<?php
session_start();
if(!isset($_SESSION['Email']))
{
header('location:http://localhost/project1/front.php');
}
$v=$_SESSION['Email'];
$w=$_SESSION['Password'];
$con=mysqli_connect('localhost','root');
$b=mysqli_select_db($con,'healthcare');
$q="select * from customer where Email='$v' && Password='$w'";
$i=mysqli_query($con,$q);
$num=mysqli_num_rows($i);
for($m=1;$m<=$num;$m++)
{
    $row=mysqli_fetch_array($i);
$height=$row['Height'];
$weight=$row['Weight'];
}
if($height>0)
{
    header('location:http://localhost/project1/diet.php');
}
else
{
    header('location:http://localhost/project1/askpage2.php');
}
?>
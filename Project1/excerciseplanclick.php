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
$bmi=$weight/($height*$height);
if($bmi<18.5)
{
    header('location:http://localhost/project1/excerciseplanunderweight.php');
}

if($bmi>=18.5&&$bmi<=24.9)
{
    header('location:http://localhost/project1/excerciseplannormal.php');
}

if($bmi>=25&&$bmi<=29.9)
{
    header('location:http://localhost/project1/excerciseplanoverweight.php');
}

if($bmi>=30)
{
    header('location:http://localhost/project1/excerciseplanobese.php');
}
?>
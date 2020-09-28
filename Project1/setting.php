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
$first_name=$row['First_Name'];
    $last_name=$row['Last_Name'];
    $email=$row['Email'];
    $gender=$row['Gender'];
    $date=$row['Birthdate'];
    $month=$row['Birthmonth'];
    $year=$row['Birthyear'];
}
?>
<html>
<head>
    <title>Settings</title>
    <style>
    *
        {
            margin: 0px;
            padding: 0px;
        }
    </style>
    </head>
    <body>
        <p style="position:absolute;top:30px;left:550px;font-size:70px;">Settings</p>
        <img src="hello39.jpg" style="position:absolute;left:800px;width:150px;height:150px;"/>
    <p style="position:absolute;top:150px;left:300px;font-size:30px;">First Name :-</p>
        <p style="position:absolute;top:210px;left:300px;font-size:30px;">Last Name :-</p>
        <p style="position:absolute;top:270px;left:300px;font-size:30px;">Gender :-</p>
        <p style="position:absolute;top:320px;left:300px;font-size:30px;">E-mail :-</p>
        <p style="position:absolute;top:380px;left:300px;font-size:30px;">BirthDate :-</p>
        <p style="position:absolute;top:430px;left:300px;font-size:30px;">Height :-</p>
        <p style="position:absolute;top:490px;left:300px;font-size:30px;">Weight :-</p>
        
        <p style="position:absolute; top:150px; left:550px; font-size:30px;"><?php
            echo $first_name;
            ?></p>
        
        <p style="position:absolute; top:210px; left:550px; font-size:30px;"><?php
            echo $last_name;
            ?></p>
        
        <p style="position:absolute; top:320px; left:550px; font-size:30px;"><?php
            echo $email;
            ?></p>
        
        <p style="position:absolute; top:270px; left:550px; font-size:30px;"><?php
            echo $gender;
            ?></p>
        
        <p style="position:absolute; top:380px; left:550px; font-size:30px;"><?php
            echo $date;
            ?> - </p>
        <p style="position:absolute; top:380px; left:600px; font-size:30px;"><?php
            echo $month;
            ?>  - </p>
        <p style="position:absolute; top:380px; left:670px; font-size:30px;"><?php
            echo $year;
            ?></p>
        <p style="position:absolute; top:430px; left:550px; font-size:30px;"><?php
            echo $height;
            ?></p>
        <p style="position:absolute; top:490px; left:550px; font-size:30px;"><?php
            echo $weight;
            ?></p>
    </body>
</html>
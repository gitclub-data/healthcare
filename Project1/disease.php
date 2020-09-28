<?php
session_start();
if(!isset($_SESSION['Email']))
{
header('location:http://localhost/project1/front.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="medicalpagestyle.css"/>
    <style>
          a:link
                 {
                     text-decoration: none;         
        }
        </style>     
    </head>
    <body>
        <div id=first>
       
            <img src="hello1.PNG" width="350px" heigt="600px" id="firstimage"/>
            <a href="Medicalpage.php" id="firstlink1">Home</a>
            <a href="medicalabout.php" id="firstlink2">About us</a>
            <a id="firstlink3">Disease</a>
            <a id="firstlink4" href="Medicalcontact.php">Contact Nearby Hospitals</a>
            <a href="review.php" id="firstlink5">Review and Suggestion</a>
        </div>
        <div style="width:300px;height:40px;position:absolute;top:230px;left:20px;background-color:skyblue;border-radius:20px;">
        <a style="position:absolute;top:10px;left:130px;" href="Fever.php">Fever</a>
        </div>
        <img src="hello40.jpg" style="position:absolute;top:350px;">
        <div style="width:300px;height:40px;position:absolute;top:230px;left:370px;background-color:skyblue;border-radius:20px;">
        <a style="position:absolute;top:10px;left:130px;"href="dairia.php">diarrhea</a>
        </div>
                <img src="hello43.jpg" style="position:absolute;top:350px;left:400px;width:300px;height:300px;">
        <div style="width:300px;height:40px;position:absolute;top:230px;left:1050px;background-color:skyblue;border-radius:20px;">
        <a style="position:absolute;top:10px;left:120px;"href="cronic_cough.php">chloric cough</a>
        </div>
                <img src="hello42.jpg" style="position:absolute;top:350px;left:1000px;width:300px;">
        <div style="width:300px;height:40px;position:absolute;top:230px;left:720px;background-color:skyblue;border-radius:20px;">
        <a style="position:absolute;top:10px;left:110px;"href="migration.php"> Migraine</a>
        </div>
                <img src="hello41.jpg" style="position:absolute;top:350px;left:700px;width:300px;height:300px;">
        <div style="width:300px;height:40px;position:absolute;top:700px;left:720px;background-color:skyblue;border-radius:20px;">
            <a style="position:absolute;top:10px;left:110px;"href="constipation.php"> Constipation</a>
        </div>
        <div style="width:300px;height:40px;position:absolute;top:700px;left:360px;background-color:skyblue;border-radius:20px;">
            <a style="position:absolute;top:10px;left:110px;"href="headche.php"> Headache</a>
        </div>
        <img src="hello44.jpg" style="position:absolute;top:750px;left:700px;width:300px;height:300px;">
        <img src="hello45.jpg" style="position:absolute;top:750px;left:350px;width:300px;height:300px;">
        </body>
</html>
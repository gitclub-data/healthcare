<?php
session_start();
if(!isset($_SESSION['Email']))
{
header('location:http://localhost/project1/front.php');
}
?>
<html>
     <head>
        <link rel="stylesheet" type="text/css" href="medicalpagestyle.css"/>
         <style>
         *
             {
                 margin: 0px;
                 padding: 0px;
             }
             a:link
                 {
                     text-decoration: none;
                 }
             
         </style>
    </head>
<body>
        <div id=first>
       
            <img src="hello1.PNG" width="350px" heigt="600px" id="firstimage"/>
            <a id="firstlink1" href="Medicalpage.php">Home</a>
            <a id="firstlink2">About us</a>
            <a href="disease.php" id="firstlink3">Disease</a>
            <a href="Medicalcontact.php" id="firstlink4">Contact Nearby Hospitals</a>
            <a href="review.php" id="firstlink5">Review and Suggestion</a>
        </div>
    <div style="position:absolute;top:140px;height:150px;background-color:aqua;width:1345px;">
    <h2 style="position:absolute;top:30px;left:550px;font-size:70px;">About us</h2>
    </div>
    <img src="hello7.PNG" style="width:600px;height:300px;position:absolute;top:300px;left:390px;"/>
    <div style="width:600px;height:300px;position:absolute;top:610px;left:30px;">
        <h2 style="position:absolute; left:250px;">About us</h2>
               <p style="position:absolute;top:40px;">Write Something Here</p>
    </div>
    <div style="width:600px;height:300px;position:absolute;top:610px;left:720px;">
     <h2 style="position:absolute; left:250px;">About Doctor</h2>
        <p style="position:absolute;top:40px;"> Write Something Here</p>
    </div>
</body>
    </html>
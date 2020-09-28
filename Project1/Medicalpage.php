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
            #secondparagraph2
{
    position: absolute;
    top: -1px;
    left: 1100px;
    font-size: 18px;
}
                       #third
{
    margin: 0;
    padding: 0;
    position: absolute;
    top: 180px;
    width: 1345px;
    height: 600px;
background: url('hello3.jpg');
    background-size: 100% 100%;
animation: slider 20s infinite;
}
@keyframes slider
{
    33%
    {
        background-image:url('hello4.jpg');
        background-size: 100% 100%;
    }
    
    66%
    {
        background-image:url('hello5.jpg');
        background-size: 100% 100%;
    }
    100%
    {
        background-image:url('hello3.jpg');
        background-size: 100% 100%;
    }
    }
            #fourth
{
    position: absolute;
    top:795px;
    width:1345px;
    height:130px;
    background-color:blue;
            }
            #fourthheading
            {
                color: white;
                font-size: 40px;
                position: absolute;
                left:80px;
                top:20px;
            }
            #fourthbutton
            {
                position: absolute;
                top: 80px;
                left: 550px;
                height:30px;
            }
            #fifth
            {
                background-color:cornsilk;
                position: absolute;
                top:795px;
                width: 1345px;
                height:280px;
            }
            #fifthcontact
            {
                font-size: 70px;
                color:red;
                position: absolute;
                left: 420px;
                top: 30px;
            }
            #fifthcontact1
            {
                
                position: absolute;
                top:120px;
                left:460px;
                font-size: 20px;
                
            }
            #fifthcontact2
            {
                
                position: absolute;
                top:120px;
                left:600px;
                font-size: 20px;
            }
            #fifthcontact3
            {
                
                position: absolute;
                top:160px;
                left:450px;
                font-size: 20px;
            }
            #fifthcontact4
            {
                
                position: absolute;
                top:160px;
                left:600px;
                font-size: 20px;
                
            }
            #fifthcontact5
            {
                
                position: absolute;
                top:200px;
                left:520px;
                font-size: 20px;
            }
            #fifthcontact6
            {
                
                position: absolute;
                top:200px;
                left:600px;
                font-size: 20px;
            }
            ul
            {
                list-style: none;
            }
            ul li
            {
                width:100px;
                background-color: white;
                opacity: .9;
                color: darkblue;
                text-align: center;
                display: block;
            }
            ul li:hover
            {
                background-color: darkgrey;
            }
            ul li ul
            {
                                display: block;
            }
            ul li ul li
            {
                display: none;
            }
            ul li:hover ul li {
                display: block;
            }
            #list
            {
                position: absolute;
                top: -10px;
                left: -20px;
                
            }
            #second
            {
                position: absolute;
                top:150px;
            }
            a:link{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div id=first>
       <ul id="list">
            <li style="font-size:30px;">|||||
           <ul style="position:absolute;left:0px;font-size:17px;">
            <li><a>Medical</a></li>
            <li><a href="check1.php">Exercises</a></li>
            <li><a href="check2.php">Diet</a></li>
            <li><a href="setting.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
           </ul>
                </li>
           </ul> 
           <img src="hello1.PNG" width="350px" heigt="600px" id="firstimage"/>
            <a id="firstlink1">Home</a>
            <a href="medicalabout.php" id="firstlink2">About us</a>
            <a href="disease.php" id="firstlink3">Disease</a>
            <a href="Medicalcontact.php" id="firstlink4">Contact Nearby Hospitals</a>
            <a href="review.php" id="firstlink5">Review and Suggestion</a>
        </div>
        
        <div id="third">
            
                </div>
        <div id="fifth">
           <h2 id="fifthcontact">CONTACT US</h2> 
            <h6 id="fifthcontact1"> Our Location:-</h6>
            <h6 id="fifthcontact2"></h6>
            <h6 id="fifthcontact3"> Phone Number:-</h6>
            <h6 id="fifthcontact4">+919012154798</h6>
            <h6 id="fifthcontact5"> E-mail:-</h6>
            <h6 id="fifthcontact6">gauravpan420@gmail.com</h6>
        </div>
    </body>
<html>
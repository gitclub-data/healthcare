<?php
session_start();
if(!isset($_SESSION['Email']))
{
header('location:http://localhost/project1/front.php');
}
?>
<html>
    <head>
        <title>
        Excercise Plans
        </title>
        <style>
         body,div,img,p,ul,li,a
        {
            margin: 0px;
            padding: 0px;
        }
        #div1
        {
            width: 1349px;
            height: 200px;
            background-color: gold;
            z-index: 998;
        }
        #div1div1
        {
            width: 1345;
            height: 35px;
            position: absolute;
            top: 150px;
            z-index: 999;
            background-color: black;
        }
        .div1div1all:hover
        {
            background-color: gold;
        }
        #div1para1
        {
            position: absolute;
            top: 35px;
            left: 450px;
            font-size:70px; 
        }
        #div1para2
        {
            position: absolute;
            top: 95px;
            left: 450px;
            font-size: 23px;
            font-style: italic;
        }
        #div1image1
        {
               width: 150px;
            height: 165px;
            position: absolute;
            top: -15px;
            left: 790px;
        }
        </style>
    </head>
    <body>
              <div id="div1">
            <img src="hello9.PNG" width="300px" height="100px" style="position:absolute; top:30px; left:100px;"/>
            <p id="div1para1">Healthcare</p>
            <p id="div1para2">Excercise And Training</p>
            <img id="div1image1" src="hello20.gif"/>
        <div id="div1div1">
            <div class="div1div1all"style="position:relative; left:350px; width:150px;height:35px;">
                <a href="fittness.php" style="position:absolute; top:10px; left:45px; font-size: 20px;text-decoration: none;color:white;">Home</a>
                    </div>
            <div class="div1div1all"style="position:relative; top:-35px; left:650px; width:180px;height:35px;">
                <a style="position:absolute; top:10px; left:35px; font-size: 20px;text-decoration: none;color:white;">Exercises plan</a>
            </div>
            <div class="div1div1all"style="position:relative; top:-70px; left:1035px; width:180px;height:35px;">
                <a href="fittnesscenters.php" style="position:absolute; top:10px; left:32px; font-size: 20px;text-decoration: none;color:white;">Fitness Centers</a>
            </div>
            </div>
        </div>
    <div style="position:absolute;left:50px;color:red;font-size:50px;">
        your are fit but you have to do exercise regularly to stay fit</div>
        <img src="hello48.jpg" style="position:absolute;top:400px;left:300px;"/>
    </body>
</html>
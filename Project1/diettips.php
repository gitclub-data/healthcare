<?php
session_start();
if(!isset($_SESSION['Email']))
{
header('location:http://localhost/project1/front.php');
}
?>
<html>
<head>
    <style>
        *
        {
            margin: 0px;
            padding: 0px;
        }
    #div1
    {
    width:1349px;
        height: 120px;
        background-color: white;
        z-index: 999;
        position: relative;
    }
        #div1div1
        {
            width: 300px;
            height: 115px;
            position: absolute;
            left: 170px;
            background-color: palegreen;
        }
        #div1div1para1
        {
        font-size: 40px;
            position: absolute;
            top: 25px;
            left: 60px;
            color: whitesmoke;
        }
        #div1div1para2
        {
         font-size: 20px;
            position: absolute;
            top: 60px;
            left: 60px;
            color: white;
        }
    </style>
    </head>
    <body>
    <div id="div1">
        <div id="div1div1">
            <p id="div1div1para1">Healthcare</p>
            <p id="div1div1para2">Nutrition and diet</p>
        </div>
            <a class="hello"style="position:absolute;top:50px;left:580px;"href="diet.php">Home</a>
            <a class="hello"style="position:absolute;top:50px;left:770px;" href="dietabout.php">About</a>
            <a class="hello"style="position:absolute;top:50px;left:940px;" href="dietchartclick.php">Diet Charts</a>
            <a class="hello"style="position:absolute;top:50px;left:1150px;">Diet Tips</a>
            </div>
    </body>
</html>
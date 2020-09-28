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
        .hello:hover
        {
            color: red;
        }
        </style>
    </head>
    <body>
        <div id="div1">
        <div id="div1div1">
            <p id="div1div1para1">Healthcare</p>
            <p id="div1div1para2">Nutrition and diet</p>
        </div>
            <a class="hello"style="position:absolute;top:50px;left:580px;" href="diet.php">Home</a>
            <a class="hello"style="position:absolute;top:50px;left:770px;" >About</a>
            <a class="hello"style="position:absolute;top:50px;left:940px;" href="dietchartclick.php">Diet Charts</a>
            <a class="hello"style="position:absolute;top:50px;left:1150px;" href="diettips.php">Diet Tips</a>
            </div>
        <div style="width:1349px; height:200px; position:absolute;top:130px;background-image:url('hello30.jpg');background-size:100% 100%;color:white;font-size:50px;"><p style="position:absolute;top:50px;left:570px;">ABOUT</p></div>
         <img src="hello31.jpg" style="width:600px; height:300px; position:absolute;top:400px;left:700px;"/>
        <div style="width:650px;height:300px;position:absolute;top:400px;left:70px;background-color: greenyellow;">
            <p style="position:absolute;top:10px;left:180px;font-size:40px;color:white;">About us</p>
        </div>
        <img src="hello32.jpg" style="width:600px; height:300px; position:absolute;top:700px;left:70px;"/>
        <div style="width:750px;height:300px;position:absolute;top:700px;left:550px;background-color:gainsboro;">
        <p style="position:absolute;top:10px;left:120px;font-size:40px;color:white;">About Nutritionist</p>
        </div>
        <div style="width:1349px; height:300px; position:absolute;top:1050px;background-image:url('hello30.jpg');background-size:100% 100%;color:white;font-size:50px;">
        <p style="font-size:50px;color:white;position:absolute;top:10px;left:560px;">Contact </p>
        </div>
    </body>
</html>
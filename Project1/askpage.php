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
            width: 1050px;
            height: 250px;
            position: absolute;
            top:200px;
            left:150px;
        }
        #img1
        {
            width:1366px;
            height: 655px;
            filter: blur(5px);
        }
        #input1
        {
            position: absolute;
            top:100px;
            left:250px ;
            width:150px;
            height:60px;
        }
        #input2
        {
            position: absolute;
            top:100px;
            left:750px ;
            width:150px;
            height:60px;
        }
        #para1
        {
            position: absolute;
            top: 110px;
            left: 110px;
            font-size:30px ;
        color:snow;
            }
        #para2
        {
               position: absolute;
            top: 110px;
            left: 610px;
            font-size:30px ;
        color:snow;
            }
        #button
        {
        position: absolute;
            top: 250px;
            left:350px;
            width: 100px;
            height: 40px;
            font-size: 20px;
        }
        #input3
        {
            position: absolute;
            top: 250px;
            left:500px;
            width: 100px;
            height: 40px;
            font-size: 30px;
        }
        #parara
        {
            position:absolute;
            top: 60px;
            left: 240px;
            font-size: 50px;
          color: blue;
        }
        #pararara
        {
             position:absolute;
            top:170px ;
            left:440px ;
            font-size: 35px;
            color: blue;
        }
        #para3
        {
            position: absolute;
            top:100px;
            left:450px;
            font-size: 40px;
                color:snow;
            
        }
        #para4
        {
             position: absolute;
            top:100px;
            left:950px;
            font-size: 40px;
                color:snow;
        }
    </style>
    </head>
    <body>
        <img id="img1" src="hello37.PNG"/>
        <div id="div1">
        <form action="askok.php" method="post">
            <p id="para1">Height:-</p>
    <input id="input1" type="decimal" name="Height" required/>
            <p id="para3">m</p>
            <p id="para2">Weight:-</p>
        <input id="input2" type="decimal" name="Weight" required/>
            <p id="para4">Kg</p>
        <input id="input3" type="submit" value="ok"/>
        </form>
            </div>
                <p id="parara">We need some more information for this page</p>
        <p id="pararara">Plss enter correct information here</p>
    </body>
</html>
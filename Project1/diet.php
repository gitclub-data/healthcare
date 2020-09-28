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
        #div2
        {
            position: fixed;
            top:0px;
            width: 1349px;
            height: 800px;
            background-image: url('hello25.jpg');
            background-size: 100% 100%; 
        }
        #div3
        {
            width: 1349px;
            height: 1750px;
            position: absolute;
            top:780px;
            background-color: white;
        }
        #div3div1
        {
            width: 700px;
            height: 400px;
            position: absolute;
            left: 470px;
            background-color: gainsboro;
        }
        #div3div2
        {
            position: absolute;
            top: 1100px;
            left: 690px;
            background-color: greenyellow;
            width:580px;
            height:320px;
        }
        #div3div1para1
        {
            font-size: 40px;
            position: absolute;
            top: 30px;
            left: 260px;
        }
        #div3div1div1
        {
            position: absolute;
            width: 580px;
            height: 270px;
            top: 100px;
            left:60px;
        }
        #div3div2div1
        {
            position: absolute;
            width: 450px;
            height: 230px;
            top: 50px;
            left:60px;
            
        }
        #div4
        {
            width: 1349px;
            height: 300px;
            position: absolute;
            top:2530px;
            background-image: url('hello30.jpg');
            background-size: 100% 100%;
        }
        #mydiv
        {
            width:300px;
            height:660px;
            position:absolute;
            top:120px;
            left:170px;
            background-color:white;
            filter:blur(90px);
        }
        .hello:hover
        {
            color: red;
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
                top: 85px;
                left: 10px;
                
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
            
        <div id="div2">
        </div>
        
        <div id="div1">
                     <ul id="list">
            <li style="font-size:30px;">|||||
           <ul style="position:absolute;left:0px;font-size:17px;">
            <li><a href="Medicalpage.php">Medical</a></li>
            <li><a href="check1.php">Exercises</a></li>
            <li><a>Diet</a></li>
            <li><a href="setting.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
           </ul>
                </li>
           </ul>          
        <div id="div1div1">
            <p id="div1div1para1">Healthcare</p>
            <p id="div1div1para2">Nutrition and diet</p>
        </div>
            <a class="hello"style="position:absolute;top:50px;left:580px;">Home</a>
            <a class="hello"style="position:absolute;top:50px;left:700px;" href="#div3">About</a>
            <a class="hello"style="position:absolute;top:50px;left:820px;" href="dietchartclick.php">Diet Charts</a>
            <a class="hello"style="position:absolute;top:50px;left:1000px;" href="diettips.php">Diet Tips</a>
            <a class="hello"style="position:absolute;top:50px;left:1150px;" href="#div4">Contact us</a>
            </div>
        <div id="mydiv"> 
       
        </div>
        <div style="width:230px;height:500px;position:absolute;top:180px;left:200px;font-size:60px;color:grey;">
 <p>Let The Medicine Be The Food And Food Be The Medicine</p>
            
            </div>
        <div id="div3">
            <img src="hello26.webp" style="width:300px;height:400px;position:absolute;left:170px;"/>
        
            <div id="div3div1">
                <p id="div3div1para1">About us</p>
               <div id="div3div1div1">
                <p style="position:absolute;">jkddkdb</p>
                   <a href="dietabout.php" style="color:green;position:absolute;top:200px;">Read More</a>
            </div>
                </div>
            
            <img src="hello28.jpg" style="width:150px;height:150px;position:absolute;left:320px;top:400px;"/>
            
            <div style="width:500px;height:250px;position:absolute;top:400px;left:470px;background-color: yellowgreen;">
            <p style="font-size:50px;color:white;position:absolute;top:20px;left:180px;">Tips</p>
                <a href="diettips.php" style="color:green;position:absolute;top:200px;left:50px;">Read More</a>
                <div style="position:absolute;top:80px;left:50px;width:350px;height:150px;font-size:20px;color:white;">hello</div>
            </div>
            <img src="hello27.jpg" style="width:750px;height:450px;position:absolute;top:650px;left:100px;"/>
            
            <div style="width:200px;height:150px;position:absolute;top:1100px;left:490px;background-color: yellowgreen;color:white;">
             <p style="font-size:35px;text-align:center;position:absolute;top:30px;">About Nutritionist</p>
            </div>
            <div id="div3div2">
               <div id="div3div2div1">    
                <p style="position:absolute;">jkddkdb</p>
                   
                <a href="dietabout.php" style="color:snow;font-size:20px;position:absolute;top:200px;">Read More</a>
                </div>
            </div>
            </div>
         <img src="hello29.jpg" style="width:400px;height:430px;position:absolute;top:2100px;left:290px;"/>
        <div id="div4">
        <p style="font-size:50px;color:white;position:absolute;top:10px;left:560px;">Contact us</p>
        </div>
    </body>
</html>
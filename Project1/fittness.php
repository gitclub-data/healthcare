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
    Fittness And Excercise 
    </title>
    <style>
        body,div,img,p,ul,li,a
        {
            margin: 0px;
            padding: 0px;
        }
        #div1
        {
            width: 1345px;
            height: 200px;
            background-color: gold;
            z-index: 998;
        }
        #div1div1
        {
            width: 1345;
            height: 35px;
            position: fixed;
            top: 10px;
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
            top: 75px;
            left: 450px;
            font-size:70px; 
        }
        #div1para2
        {
            position: absolute;
            top: 135px;
            left: 450px;
            font-size: 23px;
            font-style: italic;
        }
        #div1image1
        {
            width: 150px;
            height: 165px;
            position: absolute;
            top: 35px;
            left: 790px;
        }
        .div3div3
        {
            position: absolute;
            top: 300px;
            left: 50px;
            width: 700px;
            height: 400px;
        }
        .div3div3list
        {
           list-style: none;
            display: flex;
             animation-name:slide;
        animation-duration: 10s;
            animation-iteration-count: infinite;
        }
        .div3div3
        {
             outline: 1px;
            overflow-x: hidden;
        }
        .div3div3 img
        {
            display: block;
        }
         @keyframes slide
        {
         16%
            {
                transform: translateX(0);
            }
            
         32%
            {
                transform: translateX(-700px);
            }
            
         48%
            {
                transform: translateX(-1400px);
            }
            
         64%
            {
                transform: translateX(-2100px);
            }
            
         80%
            {
                transform: translateX(-2800px);
            }
            
         100%
            {
                transform: translateX(-3500px);
            }
        }
        #div4img1
        {
            width: 50px;
            height: 50px;
            position: absolute;
            left: 810px;
            top: 350px;
        }
                #div4img2
        {
            width: 50px;
            height: 50px;
            position: absolute;
            left: 810px;
            top: 470px;
        }
                #div4img3
        {
            width: 50px;
            height: 50px;
            position: absolute;
            left: 810px;
            top: 590px;
        }
        #div4para1
        {
            position: absolute;
            left: 870px;
            top: 350px;
            font-size: 20px;
            color: white;
        }
        #div4para2
        {
            position: absolute;
            left: 870px;
            top: 470px;
            font-size: 20px;
            color: white;
        }
        #div4para3
        {
            position: absolute;
            left: 870px;
            top: 590px;
            font-size: 20px;
            color: white;
        }
        #div5
        {
            position: absolute;
            top: 800px;
            width: 1345px;
            height: 660px;
            background-color:gold;
        }
        #div5img1
        {
         position: absolute;
            top: 50px;
            left: 410px;
            height: 300px;
            width: 500px;
        }
        #div5div
        {
            position: absolute;
            top: 350px;
            left: 50px;
            width: 600px;
            height: 300px;
        }
        #div5div2
        {
            position: absolute;
            top: 350px;
            left: 750px;
            width: 600px;
            height: 300px;
        }
        #mylist
            {
                list-style: none;
            }
            #mylist1
            {
                width:100px;
                background-color: white;
                opacity: .9;
                color: darkblue;
                text-align: center;
                display: block;
            }
            #mylist1:hover
            {
                background-color: darkgrey;
            }
        #mylist2
            {
                                display: block;
            }
            .mylist3
            {
                display: none;
            }
            #mylist1:hover .mylist3 {
                display: block;
            }
            #mylist
            {
                position: absolute;
                top: 50px;
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
        <div id="div1">
            <ul id="mylist">
            <li id="mylist1"style="font-size:30px;">|||||
           <ul id="mylist2"style="position:absolute;left:0px;font-size:17px;">
            <li style="position: absolute;
                left:20px;" class="mylist3"><a href="Medicalpage.php">Medical</a></li>
            <li style="position: absolute;
                left:20px;top:20px;" class="mylist3"><a >Exercises</a></li>
            <li style="position: absolute;
                left:20px;top:40px;" class="mylist3"><a href="check2.php">Diet</a></li>
            <li style="position: absolute;
                left:20px;top:60px;" class="mylist3"><a href="setting.php">Settings</a></li>
            <li style="position: absolute;
                left:20px;top:80px;" class="mylist3"><a href="logout.php">Logout</a></li>
           </ul>
                </li>
           </ul>
            <img src="hello9.PNG" width="300px" height="100px" style="position:absolute; top:70px; left:100px;"/>
            <p id="div1para1">Healthcare</p>
            <p id="div1para2">Excercise And Training</p>
            <img id="div1image1" src="hello20.gif"/>
        <div id="div1div1">
            <div class="div1div1all"style="position:relative; left:150px; width:150px;height:35px;">
                <a href="#div1" style="position:absolute; top:10px; left:45px; font-size: 20px;text-decoration: none;color:white;">Home</a>
                    </div>
            <div class="div1div1all"style="position:relative;top:-35px;  left:300px;width:150px;height:35px;">
                <a href="#div5" style="position:absolute; top:10px; left:45px; font-size: 20px;text-decoration: none;color:white;">About us</a>
            </div>
            <div class="div1div1all"style="position:relative; top:-70px; left:450px; width:180px;height:35px;">
                <a href="excerciseplanclick.php" style="position:absolute; top:10px; left:40px; font-size: 20px;text-decoration: none;color:white;">Exercises plan</a>
            </div>
            <div class="div1div1all"style="position:relative; top:-105px; left:635px; width:180px;height:35px;">
                <a href="fittnesscenters.php" style="position:absolute; top:10px; left:32px; font-size: 20px;text-decoration: none;color:white;">Fitness Centers</a>
            </div>
            <div class="div1div1all"style="position:relative; top:-140px; left:820px; width:250px;height:35px;">
                <a href="#rev" style="position:absolute; top:10px; left:30px; font-size: 20px;text-decoration: none;color:white;">Review and suggestions</a>
            </div>
            <div class="div1div1all"style="position:relative; top:-175px; left:1070px; width:150px;height:35px;">
                <a href="#siv" style="position:absolute; top:10px; left:30px; font-size: 20px;text-decoration: none;color:white;">Contact us</a>
            </div>
            </div>
        </div>
        <div style="background-color:black;width:1345px; height:2535px;">
            <div class="div3div3">
            <ul class="div3div3list">
            <li><img src="hello8.PNG" width="700px"
            height="400px"/></li>
                <li><img src="hello11.jpg" width="700px"
            height="400px"/></li>
                <li><img src="hello12.jpg" width="700px"
            height="400px"/></li>
                <li><img src="hello13.jpg" width="700px"
            height="400px"/></li>
                <li><img src="hello14.jpg" width="700px"
            height="400px"/></li>
                <li><img src="hello15.jpg" width="700px"
            height="400px"/></li>
            </ul>
                </div>
            <a href="https://www.youtube.com/watch?v=8BcPHWGQO44"><img id="div4img1" src="hello16.jpg"/><p id="div4para1">Seated Exercises for Older Adults</p></a>
            <a href="https://www.youtube.com/watch?v=qWy_aOlB45Y"><img id="div4img2" src="hello16.jpg"/><p id="div4para2">32 Minute Home Cardio Workout with No Equipment - Calorie Blasting Cardio Training</p></a>
            <a href="https://www.youtube.com/watch?v=P_SZpxUx3xw"><img id="div4img3" src="hello16.jpg"/><p id="div4para3" >NO GYM FULL BODY WORKOUT AT HOME | BEST HOME EXERCISES</p></a>
            
        <div id="div5">
            <img id="div5img1"src="hello17.jpg"/>
            <div id="div5div">
                <h1 style="font-size:40px;position:absolute; top:-10px;left:140px;">About us</h1>
                <p style="font-size:20px;position:absolute; top:80px;text-align: justify;"> Write something here about the trainer and traning whatever you want.<p>
            </div>
            <div  id="div5div2">
            <h1 style="font-size:40px;position:absolute; top:-10px;left:140px;">About Trainer</h1>
                <p style="font-size:20px;position:absolute; top:80px;text-align: justify;"> Write something here about the trainer and traning whatever you want.<p>
            </div>
            </div>
            <div id="rev" style="width:1345px;height:660px;position:absolute;top:1460px;">
                <h1 style="color:aqua;position:absolute;top:10px;left:400px; font-size:50px;">Review And Suggestions</h1>
                <form action="reviewok.php" method="post">
                <input style="position:absolute;top:150px;left:150px;width:1000px;height:100px;border-radius:30px;text-align: center;" type="text" name="review" placeholder="We Are Always Waiting For Your Feedback. Please Type Your Reviews Or Suggestions Here"/>
                <input type="submit" style="position:absolute;top:300px;left:550px;width:150px;height:50px;border-radius:30px;font-size:20px;background-color:red;color:white;"/>
                    </form>
                
                <a style="position:absolute;top:600px;left:150px;border-radius:30px;font-size:20px;text-decoration:none;color:white;" href="Review.php">Read More Reviews...........</a>
            </div>
            
            <div id="siv"style="background-color:gold;position:absolute;top:2140px;width:1345px;height:595px;">
                <div style="position:absolute; top:50px;left:80px;width:500px; height:300px;color:black;">
                    <h1 style="position:absolute;left:80px;font-size:40px;">Contact Us</h1>
                    <p style="position:absolute;top:100px;left:80px;font-size:20px;">Address is here</p>
                    <p style="position:absolute;top:150px;left:80px;font-size:20px;">Phone Number is Here</p>
                    <p style="position:absolute;top:200px;left:80px;font-size:20px;">Email ID is here</p>
                </div>
                
                <div style="position:absolute; top:30px; left:750px; width:500px; height:370px;">
                    <h1 style="position:absolute; top:-5px;left:120px;color:grey;">Ask Your Question</h1>
                    <form>
                    <input style="background-color:black;color:white;position:absolute; top:65px;left:100px;height:30px;width:300px;" type="text" placeholder="Name"/> 
                        <input style="background-color:black;color:white;position:absolute; top:115px;left:100px;height:30px;width:300px;" type="email" placeholder="Email"/>
                        <input style="background-color:black;color:white;position:absolute; top:165px;left:100px;height:30px;width:300px;" type="number" placeholder="Phone"/> 
                        <input style="background-color:black;color:white;position:absolute; top:215px;left:100px;height:110px;width:300px;" type="text" placeholder="Ask Your Question Here"/> 
                         <input style="background-color:red;position:absolute;color:white; top:340px;left:320px;height:30px;width:80px; border-radius:5px;" type="submit" value="Submit"placeholder="Ask Your Question Here"/> 
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
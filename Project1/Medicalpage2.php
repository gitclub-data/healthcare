<!DOCTYPE html>
<html>
    <head>
        <title>Medical site</title>
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
    top: 145px;
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
                top:1550px;
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
        </style>
    </head>
    <body>
        <div id=first>
       
            <img src="hello1.PNG" width="350px" heigt="600px" id="firstimage"/>
            <a href="#first" style="position:absolute; top:70px; left:550px;">Home</a>
            <a href="#about" style="position:absolute; top:70px; left:700px;">About us</a>
            <a href="#fifth" style="position:absolute; top:70px; left:900px;">Contact us</a>
            <a href="signup.php" style="position:absolute; top:70px; left:1100px;">Signup</a>
        </div>
        
        <div id="third">
            
                </div>
        <div id="about"style="position:absolute;top:745px;background-color: gainsboro;height:805px;width:1345px;">
             <div style="position:absolute;top:20px;height:150px;background-color:aqua;width:1345px;">
    <h2 style="position:absolute;top:30px;left:550px;font-size:70px;">About us</h2>
    </div>
    <img src="hello7.PNG" style="width:600px;height:300px;position:absolute;top:180px;left:390px;"/>
    <div style="width:600px;height:300px;position:absolute;top:490px;left:30px;">
        <h2 style="position:absolute; left:250px;">About us</h2>
               <p style="position:absolute;top:40px;">Write Something Here</p>
    </div>
    <div style="width:600px;height:300px;position:absolute;top:490px;left:720px;">
     <h2 style="position:absolute; left:250px;">About Doctor</h2>
        <p style="position:absolute;top:40px;"> Write Something Here</p>
    </div>
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
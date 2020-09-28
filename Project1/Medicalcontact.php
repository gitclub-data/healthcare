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
        #secondparagraph2
{
    position: absolute;
    top: -1px;
    left: 1050px;
    font-size: 18px;
}
        #divi
        {
            position: absolute;
            top:145px;
            height:150px;
            width: 1345px;
            background-color: aquamarine;
        }
        #divipara
        {
        position: absolute;
            top: 35px;
            font-size: 50px;
        left:400px;
            color: cornflowerblue;
        }
        #divi2
        {
            position: absolute;
            top:295px;
            width: 550px;
            height: 700px;
            background-image: url('hello6.PNG');
            background-size: 100% 100%;
        }
        </style>     
    </head>
    <body>
        <div id=first>
       
            <img src="hello1.PNG" width="350px" heigt="600px" id="firstimage"/>
            <a href="Medicalpage.php" id="firstlink1">Home</a>
            <a href="medicalabout.php" id="firstlink2">About us</a>
            <a href="disease.php" id="firstlink3">Disease</a>
            <a id="firstlink4">Contact Nearby Hospitals</a>
            <a href="review.php" id="firstlink5">Review and Suggestion</a>
        </div>
        
        <div id="divi">
            <h3 id="divipara">Contact Nearby Hospitals
                </h3>
        </div>
        <div id="divi2">
       
        </div>
		      <div style="position:absolute;top:350px;left:650px;font-size:25px;">
        <ul>
		<li>krishna hospital,kashipur,ramnagar road- 05947-282332</li>
		<li>Brijesh hospital,ramnagar,kashipur road- 05947-268732</li>
		<li>Shusila tiwari hospital,haldwani,ramnagar road- 05947-238782</li>
		<li>Chamunda hospital,kashipur,ramnagar road- 05947-273232</li>
		</ul>
        </div>
    </body>
</html>
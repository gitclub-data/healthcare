<?php
session_start();
if(!isset($_SESSION['Email']))
{
header('location:http://localhost/project1/front.php');
}
$con=mysqli_connect('localhost','root');
$b=mysqli_select_db($con,'healthcare');
$q="select * from review";
$i=mysqli_query($con,$q);
$num=mysqli_num_rows($i);
for($m=1;$m<=$num;$m++)
{
    $row=mysqli_fetch_array($i);
$first_name=$row['Name'];
    $last_name=$row['Last_Name'];
    $suggestion=$row['Suggestion'];
}

?>
<html>
    <head>
        <style>
            body
            {
                background-image: url("hello18.jpg");
                background-size: 100% 100%;
                
            }
        </style>
    </head>
    <body>
        <div style="position:absolute;top:60px;left:560px;font-size:70px;color:white;">
            Review
        </div>
        <div style="position:absolute;top:150px;left:440px;font-size:70px;color:white;">
            And Suggesstion
        </div>
            <form action="reviewok.php" method="post">
        <input name="review"type="text" style="border-color:black;position:absolute;top:250px;left:220px;width:900px;height:100px;border-radius:30px;text-align: center;background:none;"  placeholder="We Are Always Waiting For Your Feedback. Please Type Your Reviews Or Suggesstions Here"/>
        <input type="Submit" style="position:absolute;top:380px;left:960px;width:150px;height:50px;border-radius:30px;font-size:20px;background-color:black;color:white;" placeholder="We Are Always Waiting For Your Feedback. Please Type Your Reviews Or Suggestions Here"/>
        </form>
        <div style="position:absolute;top:450px;left:150px;width:900px;"><p style="color:snow;position:absolute;top:10px;left:150px;font-size:40px;"><?php for($wp=1;$wp<=1;$wp++)
{
    
    echo $first_name;
}
        ?></p><p style="color:snow;position:absolute;top:10px;left:300px;font-size:40px;"><?php for($wp=1;$wp<=1;$wp++)
{
    
    echo $last_name;
}
        ?></p>
        <p style="color:snow;position:absolute;top:80px;left:200px;font-size:25px;"><?php for($wp=1;$wp<=1;$wp++)
{
    
    echo $suggestion;
}
        ?></p></div>
        
    </body>
</html>
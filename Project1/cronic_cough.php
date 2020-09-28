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
    #div1
        {
            position: absolute;
            top:10px;
            left:450px ;
            width: 500px;
            height: 100px;
            font-size: 70px;
            text-align: center;
            color: greenyellow;
        }
        #div2
        {
            position: absolute;
            top:100px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
            
        }
        #div3
        {
             position: absolute;
            top:420px;
            left:480px ;
            width: 400px;
            height: 100px;
            font-size: 70px;
            text-align: center;
            color: greenyellow;
        }
        #div4
        {
             position: absolute;
            top:520px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
        #div5
        {
          position: absolute;
            top:920px;
            left:460px ;
            width: 500px;
            height: 100px;
            font-size: 50px;
            text-align: center;
            color: greenyellow;  
        }
        #div6
        {
             position: absolute;
            top:980px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
        #div7
        {
            position: absolute;
            top:950px;
            left:460px ;
            width: 500px;
            height: 100px;
            font-size: 50px;
            text-align: center;
            color: greenyellow;
        }
        #div8
        {
 position: absolute;
            top:1000px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
            
        }
        #div9
        {
        position: absolute;
            top:1200px;
            left:460px ;
            width: 500px;
            height: 100px;
            font-size: 50px;
            text-align: center;
            color: greenyellow;    
        }
        #div10
        {
 position: absolute;
            top:1350px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
    </style>
    </head>
    <body>
    <div id="div1">
        Chronic Cough
        </div>
        <div id="div2">
            <p>A chronic cough is a cough that lasts eight weeks or longer in adults, or four weeks in children.</p>
            <p>
       A chronic cough is more than just an annoyance. A chronic cough can interrupt your sleep and leave you feeling exhausted. Severe cases of chronic cough can cause vomiting, lightheadedness and even rib fractures.
            </p>
            <p>While it can sometimes be difficult to pinpoint the problem that's triggering a chronic cough, the most common causes are tobacco use, postnasal drip, asthma and acid reflux. Fortunately, chronic cough typically disappears once the underlying problem is treated.</p>
        </div>
    <div id="div3">
        Symptoms
        </div>
        <div id="div4">
       <p> A chronic cough can occur with other signs and symptoms, which may include:</p>

<ul>
<li>A runny or stuffy nose</li>
<li>A feeling of liquid running down the back of your throat (postnasal drip)</li>
<li>Frequent throat clearing and sore throat</li>
<li>Hoarseness</li>
<li>Wheezing and shortness of breath</li>
<li>Heartburn or a sour taste in your mouth</li>
<li>In rare cases, coughing up blood</li>
            </ul>
        </div>
        
        <div id="div7">
        When to see a doctor
        </div>
        <div id="div8">
        <p>See your doctor if you have a cough that lingers for weeks, especially one that brings up sputum or blood, disturbs your sleep, or affects school or work.</p>
        </div>
        <div id="div9">
        Home remedy of Chronic Cough
        </div>
        <div id="div10">
            <li>Honey tea. A popular home remedy for coughs is mixing honey with warm water.</li>
            <li>Ginger. Ginger may ease a dry or asthmatic cough, as it has anti-inflammatory properties.</li>
        <li>Fluids. Staying hydrated is vital for those with a cough or cold.</li>
            <li>Steam.</li>
            <li>Marshmallow root.</li>
            <li>Salt-water gargle.</li>
            <li>Bromelain.</li>
            <li>Thyme.</li>
                </div>
    </body>
</html>
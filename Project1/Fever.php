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
            left:480px ;
            width: 400px;
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
            top:320px;
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
            top:420px;
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
            top:1680px;
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
            top:1750px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
            
        }
        #div9
        {
        position: absolute;
            top:3200px;
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
            top:3250px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
    </style>
    </head>
    <body>
    <div id="div1">
        Fever
        </div>
        <div id="div2">
            <p>
        A fever is a temporary increase in your body temperature, often due to an illness. Having a fever is a sign that something out of the ordinary is going on in your body.
            </p>
            <p>For an adult, a fever may be uncomfortable, but usually isn't a cause for concern unless it reaches 103 F (39.4 C) or higher. For infants and toddlers, a slightly elevated temperature may indicate a serious infection.</p>
        </div>
    <div id="div3">
        Symptoms
        </div>
        <div id="div4">
       <p> You have a fever when your temperature rises above its normal range. What's normal for you may be a little higher or lower than the average normal temperature of 98.6 F (37 C).</p>
        <p>    Depending on what's causing your fever, additional fever signs and symptoms may include:</p>

<ul>
<li>Sweating</li>
<li>Chills and shivering</li>
<li>Headache</li>
<li>Muscle aches</li>
<li>Loss of appetite</li>
<li>Irritability</li>
<li>Dehydration</li>
<li>General weakness</li>
            </ul>
        </div>
        
        <div id="div5">
        Taking the Temperature
        </div>
        <div id="div6">
            <p>To check your or your child's temperature, you can choose from several types of thermometers, including oral, rectal, ear (tympanic) and forehead (temporal artery) thermometers.</p>
<p>
Although it's not the most accurate way to take a temperature, you can use an oral thermometer for an armpit (axillary) reading:</p>
            <ul>
                <li>Place the thermometer in the armpit and cross your arms or your child's arms over the chest.</li>
                <li>Wait four to five minutes. The axillary temperature is slightly lower than an oral temperature.</li>
                <li>If you call your doctor, report the actual number on the thermometer and where on the body you took the temperature.</li>
                <p>
                Use a rectal thermometer for <span style="color:red;">infants</span>:
                </p>
                <li>
                Place a dab of petroleum jelly on the bulb.
                </li>
                <li>Lay your baby on his or her tummy.
                </li>
                <li>
                    Carefully insert the bulb 1/2 to 1 inch (1.3 to 2.5 centimeters) into your baby's rectum
                </li>
                
                <li>
                    Hold the bulb and your baby still for three minutes.
                </li>
                <li>
                    Don't let go of the thermometer while it's inside your baby. If your baby squirms, the thermometer could go deeper and cause an injury.
                </li>
                
            </ul>
        </div>
        <div id="div7">
        When to see a doctor
        </div>
        <div id="div8">
        <p>Fevers by themselves may not be a cause for alarm - or a reason to call a doctor. Yet there are some circumstances when you should seek medical advice for your baby, your child or yourself.</p>

<p style="color:orange;">Infants</p>
<p>An unexplained fever is greater cause for concern in infants and in children than in adults. Call your baby's doctor if your child is:</p>

  <ul>          <li><span style="color:blue;">Younger than age 3 months </span>and has a rectal temperature of 100.4 F (38 C) or higher.</li>
      <li><span style="color:blue;">Between ages 3 and 6 months</span> and has a rectal temperature up to 102 F (38.9 C) and seems unusually irritable, lethargic or uncomfortable or has a temperature higher than 102 F (38.9 C).</li>
            <li>
                <span style="color:blue;">
                    Between ages 6 and 24 months </span>and has a rectal temperature higher than 102 F (38.9 C) that lasts longer than one day but shows no other symptoms. If your child also has other signs and symptoms, such as a cold, cough or diarrhea, you might call your child's doctor sooner based on severity.</li>
</ul>
      <p style="color:orange;">Children</p>
<p>There's probably no cause for alarm if your child has a fever but is responsive — making eye contact with you and responding to your facial expressions and to your voice — and is drinking fluids and playing.
</p>
            <p>
Call your child's doctor if your child:
</p>
            <ul>
                <li>
Is listless or irritable, vomits repeatedly, has a severe headache or stomachache, or has any other symptoms causing significant discomfort.</li>
<li>Has a fever after being left in a hot car. Seek medical care immediately.</li>
<li>Has a fever that lasts longer than three days.</li>
<li>Appears listless and has poor eye contact with you.</li>
            </ul>
<p style="color:orange;">Adults</p>
<p>Call your doctor if your temperature is 103 F (39.4 C) or higher. Seek immediate medical attention if any of these signs or symptoms accompanies a fever:</p>
<ul>
<li>Severe headache</li>
<li>Unusual skin rash, especially if the rash rapidly worsens</li>
<li>Unusual sensitivity to bright light</li>
<li>Stiff neck and pain when you bend your head forward</li>
<li>Mental confusion</li>
<li>Persistent vomiting</li>
<li>Difficulty breathing or chest pain</li>
<li>Abdominal pain or pain when urinating</li>
<li>Convulsions or seizures</li>
    </ul>
        </div>
        <div id="div9">
        Home remedy of fever
        </div>
        <div id="div10">
            <ul>
        <li>Drink plenty of fluids:-Fever can cause fluid loss and dehydration, so drink water, juices or broth. For a child under age 1, use an oral rehydration solution such as Pedialyte. These solutions contain water and salts proportioned to replenish fluids and electrolytes. Pedialyte ice pops also are available.</li>
<li>Rest:- You need rest to recover, and activity can raise your body temperature.</li>
<li>Stay cool:- Dress in light clothing, keep the room temperature cool and sleep with only a sheet or light blanket.</li>
        </ul>
                </div>
    </body>
</html>
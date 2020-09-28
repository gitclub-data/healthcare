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
            top:380px;
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
            top:450px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
        #div5
        {
          position: absolute;
            top:850px;
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
            top:550px;
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
            top:950px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
            
        }
        #div9
        {
        position: absolute;
            top:1600px;
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
            top:1750px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
    </style>
    </head>
    <body>
    <div id="div1">
        Mayoclinic
        </div>
        <div id="div2">
            <p>
       A migraine can cause severe throbbing pain or a pulsing sensation, usually on just one side of the head. It's often accompanied by nausea, vomiting, and extreme sensitivity to light and sound.
            </p>
            <p>Migraine attacks can cause significant pain for hours to days and can be so severe that the pain is disabling.</p>
            <p>
            Warning symptoms known as aura may occur before or with the headache. These can include flashes of light, blind spots, or tingling on one side of the face or in your arm or leg.
            </p>
        </div>
    <div id="div3">
        Symptoms
        </div>
        <div id="div4">
       <p> One or two days before a migraine, you may notice subtle changes that warn of an upcoming migraine, including:</p>
<ul>
<li>Constipation</li>
<li>Mood changes, from depression to euphoria</li>
<li>Food cravings</li>
<li>Neck stiffness</li>
<li>Increased thirst and urination</li>
<li>Frequent yawning</li>
            </ul>
        </div>
        
        <div id="div5">
        When to see a doctor 
        </div>
        <div id="div8">
            <p>Migraines are often undiagnosed and untreated. If you regularly experience signs and symptoms of migraine attacks, keep a record of your attacks and how you treated them. Then make an appointment with your doctor to discuss your headaches.</p>
            <p>Even if you have a history of headaches, see your doctor if the pattern changes or your headaches suddenly feel different.</p>
            
            <p>See your doctor immediately or go to the emergency room if you have any of the following signs and symptoms, which may indicate a more serious medical problem:-</p>

  <ul>          <li>An abrupt, severe headache like a thunderclap</li>
            <li>Headache with fever, stiff neck, mental confusion, seizures, double vision, weakness, numbness or trouble speaking</li>
       <li>Headache after a head injury, especially if the headache gets worse</li>
       <li>A chronic headache that is worse after coughing, exertion, straining or a sudden movement</li>
      <li>New headache pain if you're older than 50</li>
      
            </ul></div>
        <div id="div9">
        Home remedy of Migraine
        </div>
        <div id="div10">
            <ul>
        <li>Avoid hot dogs.</li>
<li>Apply lavender oil.</li>
<li>Try acupressure.</li>
                <li>Look for feverfew.</li>
<li>Apply peppermint oil.</li>
    <li>Go for ginger.</li>
                <li>Sign up for yoga.</li>
                <li>Try biofeedback.</li>
        </ul>
                </div>
    </body>
</html>
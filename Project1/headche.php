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
            top:60px;
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
            top:700px;
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
            top:880px;
            width: 1140px;
            height: 30px;
            font-size: 30px;
            text-align: justify;
        }
        #div7
        {
            position: absolute;
            top:1180px;
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
            top:1350px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
            
        }
        #div9
        {
        position: absolute;
            top:1550px;
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
            top:1700px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
		 #div11
        {
            position: absolute;
            top:2000px;
            left:480px ;
            width: 400px;
            height: 100px;
            font-size: 70px;
            text-align: center;
            color: greenyellow;
        }
		 #div12
        {
 position: absolute;
            top:2200px;
            width:1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
        #div13
        {
 position: absolute;
            top:2580px;
            width:1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
            color: greenyellow;
            font-size: 50px;
            text-align: center;
        }
        #div14
        {
 position: absolute;
            top:2680px;
            width:1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;   
        }
    </style>
    </head>
    <body>
		 <div id="div1">
		  Headache
        </div>
        <div id="div2">
            <p>
        A tension headache is generally a diffuse, mild to moderate pain in your head that's often described as feeling like a tight band around your head. A tension headache (tension-type headache) is the most common type of headache, and yet its causes aren't well-understood.
            </p>
            <p>Treatments for tension headaches are available. Managing a tension headache is often a balance between fostering healthy habits, finding effective nondrug treatments and using medications appropriately.</p>
        </div>
    <div id="div3">
        Symptoms
        </div>
        <div id="div4">
       <p>Signs and symptoms of a tension headache include: </p>
	   <ul>
	   <li>Dull, aching head pain</li>
	   <li>Sensation of tightness or pressure across your forehead or on the sides and back of your head</li>
	   <li>Tenderness on your scalp, neck and shoulder muscles</li>
	   </ul>
        <p>Tension headaches are divided into two main categories — episodic and chronic.</p>


        </div>
        
        <div id="div5">
		Episodic tension headaches
        </div>
        <div id="div6">
            <p>Episodic tension headaches can last from 30 minutes to a week. Frequent episodic tension headaches occur less than 15 days a month for at least three months. Frequent episodic tension headaches may become chronic.</p>
        </div>
        <div id="div7">
        Chronic tension headaches
        </div>
        <div id="div8">
  <p>This type of tension headache lasts hours and may be continuous. If your headaches occur 15 or more days a month for at least three months, they're considered chronic.</p>
        </div>
        <div id="div9">
        Tension headaches vs. migraines
        </div>
        <div id="div10">
           <p>Tension headaches can be difficult to distinguish from migraines. Plus, if you have frequent episodic tension headaches, you can also have migraines.</p>
<p>Unlike some forms of migraine, tension headaches usually aren't associated with visual disturbances, nausea or vomiting. Although physical activity typically aggravates migraine pain, it doesn't make tension headache pain worse. An increased sensitivity to either light or sound can occur with a tension headache, but these aren't common symptoms</p>
		   </div>
		   <div id="div11">
        When to see a doctor
        </div>
		<div id="div12">
        <p>If tension headaches disrupt your life or you need to take medication for your headaches more than twice a week, see your doctor.</p>
<p>Even if you have a history of headaches, see your doctor if the pattern changes or your headaches suddenly feel different. Occasionally, headaches may indicate a serious medical condition, such as a brain tumor or rupture of a weakened blood vessel (aneurysm).</p>
        </div>
        <div id="div13">
        Home remedy of Headache
        </div>
        <div id="div14">
            <li>Drink Water.</li>
<li>Take Some Magnesium.</li>
<li>Limit Alcohol.</li>
<li>Get Adequate Sleep.</li>
<li>Avoid Foods High in Histamine.</li>
<li>Use Essential Oils.</li>
<li>Try a B-Complex Vitamin.</li>
            <li>Soothe Pain with a Cold Compress.</li>
        </div>
    </body>
</html>
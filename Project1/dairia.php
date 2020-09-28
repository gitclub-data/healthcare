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
            top:950px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
            
        }
        #div9
        {
        position: absolute;
            top:1500px;
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
            top:1600px;
            width: 1340px;
            height: 100px;
            font-size: 30px;
            text-align: justify;
        }
    </style>
    </head>
    <body>
    <div id="div1">
        Diarrhea
        </div>
        <div id="div2">
            <p>
        Everyone occasionally has diarrhea — loose, watery and possibly more-frequent bowel movements.
            </p>
            <p>in most cases, diarrhea lasts a couple of days. But when diarrhea lasts for weeks, it can indicate a serious disorder, such as a persistent infection, inflammatory bowel disease, or a less serious condition, such as irritable bowel syndrome</p>
        </div>
    <div id="div3">
        Symptoms
        </div>
        <div id="div4">
       <p> Signs and symptoms associated with diarrhea may include:</p>
<ul>
<li>Loose, watery stools</li>
<li>Abdominal cramps</li>
<li>Abdominal pain</li>
<li>Fever</li>
<li>Blood in the stool</li>
<li>Bloating</li>
<li>Nausea</li>
<li>Urgent need to have a bowel movement</li>
            </ul>
        </div>
        
        <div id="div5">
        When to see a doctor 
        </div>
        <div id="div8">
            <p>If you're an adult, see your doctor if:</p>

  <ul>          <li>Your diarrhea persists beyond two days</li>
      <li>You become dehydrated</li>
            <li>You have severe abdominal or rectal pain</li>
       <li>You have bloody or black stools</li>
       <li>You have a fever above 102 F (39 C)</li>
      
</ul>
      <p >In children, particularly young children, diarrhea can quickly lead to dehydration. Call your doctor if your child's diarrhea doesn't improve within 24 hours or if your baby:</p>
            <ul>
                <li>
Becomes dehydrated</li>
<li>Has a fever above 102 F (39 C)</li>
<li>Has bloody or black stools</li>
            </ul>
        </div>
        <div id="div9">
        Home remedy of Diarrhea
        </div>
        <div id="div10">
            <ul>
        <li>
Avoid Dehydration :-
                <p>Drink lots of clear fluid -- no alcohol or caffeine. Milk will usually prolong diarrhea, but it might help provide nutrients for folks with very mild cases. For moderate to severe cases, use an electrolyte solution like Gatorade or Pedialyte.</p></li>
<li>Eat Probiotics<p>Eat probiotic yogurt. The active bacterial cultures in some yogurt can ease the symptoms of some types of diarrhea and shorten their duration. Researchers aren't sure exactly how these cultures help and they're also not sure which probiotic cultures are effective.</p>
    
<p>
There are other foods that contain probiotics and even some pill forms on the market. However, there's a lot fewer data available on probiotic foods other than yogurt. The research that is available is focused almost entirely on mild cases of diarrhea--using 3 days as the cutoff. What little data there is available on more severe cases suggests that probiotic yogurt can be helpful in those cases as well, at least in shortening the illness by a day.</p></li>
<li>Try the BRAT Diet :-<p>Try the BRAT diet: bananas, rice, apples or applesauce, and dry toast. This collection of diarrhea-fighting-food is often suggested for kids, but adults can eat it, too. It's not necessary to restrict kids or adults to this diet, but like probiotic yogurt, adding these foods may help shorten episodes of diarrhea.</p></li>
        </ul>
                </div>
    </body>
</html>
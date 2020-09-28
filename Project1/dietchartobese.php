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
    </style>
    </head>
    <body>
    <div id="div1">
        <div id="div1div1">
            <p id="div1div1para1">Healthcare</p>
            <p id="div1div1para2">Nutrition and diet</p>
        </div>
            <a class="hello"style="position:absolute;top:50px;left:580px;"href="diet.php">Home</a>
            <a class="hello"style="position:absolute;top:50px;left:770px;" href="dietabout.php">About</a>
            <a class="hello"style="position:absolute;top:50px;left:940px;" >Diet Charts</a>
            <a class="hello"style="position:absolute;top:50px;left:1150px;" href="diettips.php">Diet Tips</a>
            </div>
        <div style="position:absolute;top:200px;width:1349px;color:greenyellow
                    ;font-size:50px;text-align:center;">
                    You are obese you have to loose Weight to get Fit</div>
                <div style="position:absolute;top:300px;width:1349px;color:greenyellow
                    ;font-size:50px;text-align:center;">
                    The diet chart helps you to loose Weight</div>
        <div style="position:absolute;top:400px;">
         <table><thead><tr>	<th ><div>Day</div>
	</th>	<th  ><div>Breakfast</div>
	</th>	<th  ><div>Lunch</div>
	</th>	<th  ><div>Dinner</div>
	</th></tr>
          
          </thead><tbody><tr >	<td  ><div>Monday</div>
	</td>	<td  ><div> Sambar with brown rice idli</div>
	</td>	<td  ><div>Whole-grain roti with mixed-vegetable curry</div>
	</td>	<td  ><div>Tofu curry with mixed vegetables and a fresh spinach salad</div>
	</td></tr>
          
          <tr  >	<td  ><div>Tuesday</div>
	</td>	<td  ><div>Chana dal pancakes with mixed vegetables and a glass of milk</div>
	</td>	<td  ><div>Chickpea curry with brown rice</div>
	</td>	<td  ><div>Khichdi with sprout salad</div>
	</td></tr>
          
          <tr  >	<td  ><div>Wednesday</div>
	</td>	<td  ><div> Apple cinnamon porridge made with milk and topped with sliced almonds</div>
	</td>	<td  ><div>Whole-grain roti with tofu and mixed vegetables</div>
	</td>>	<td  ><div>Palak paneer with brown rice and vegetables</div>
	</td></tr>
          
          <tr  >	<td  ><div>Thrusday</div>
	</td>	<td  ><div>Yogurt with sliced fruits and sunflower seeds</div>
	</td>	<td  ><div>Whole-grain roti with vegetable subji</div>
	</td>	<td  ><div>Chana masala with basmati rice and green salad</div>
	</td></tr>
          
          <tr  >	<td  ><div>Friday</div>
	</td>	<td  ><div>Vegetable dalia and a glass of milk</div>
	</td>	<td  ><div>Vegetable sambar with brown rice</div>
	</td>	<td  ><div> Tofu curry with potato and mixed vegetables</div>
	</td></tr>
          
          <tr  >	<td  ><div>Saturday</div>
	</td>	<td  ><div>Multigrain parathas with avocado and sliced papaya</div>
	</td>	<td  ><div>Large salad with rajma curry and quinoa</div>
	</td>	<td  ><div> Lentil pancakes with tofu tikka masala</div>
	</td></tr>
          
          <tr  >	<td  ><div>Sunday</div>
	</td>	<td  ><div> Buckwheat porridge with sliced mango</div>
	</td>	<td  ><div> Vegetable soup with whole-grain roti</div>
	</td>	<td  ><div>Masala-baked tofu with vegetable curry</div>
	</td></tr>
          
         </tbody></table>
       
        </div>
    </body>
</html>
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
                    You are overweight you have to loose Weight to get Fit</div>
                <div style="position:absolute;top:300px;width:1349px;color:greenyellow
                    ;font-size:50px;text-align:center;">
                    The diet chart helps you to loose Weight</div>
        <div style="position:absolute;top:400px;">
         <table><thead><tr>	<th  ><div>Day</div>
	</th>	<th  ><div>Breakfast</div>
	</th>	<th  ><div>Lunch</div>
	</th>	<th  ><div>Snack</div>
	</th>	<th  ><div>Dinner</div>
	</th></tr></thead><tbody><tr >	<td  ><div>1</div>
	</td>	<td  ><div>2 slices of toast with butter, 1 glass of skimmed milk, and 1 piece of the fruit of your choice</div>
	</td>	<td  ><div>Big bowl of fresh salad and a piece of grilled chicken</div>
	</td>	<td  ><div>Drink green tea and eat an apple</div>
	</td>	<td  ><div>Grilled meat with red beans</div>
	</td></tr><tr  >	<td  ><div>2</div>
	</td>	<td  ><div>2 slices of toast bread with a chicken slice, 1 glass of skimmed milk, and a piece of the fruit of your choice</div>
	</td>	<td  ><div>Freshly prepared salad with a bowl of red beans and an apple</div>
	</td>	<td  ><div>Low-fat yogurt</div>
	</td>	<td  ><div>Large serving of salad with chicken (do not deep-fry)</div>
	</td></tr><tr  >	<td  ><div>3</div>
	</td>	<td  ><div>Bowl of low fat cereal and a piece of fruit of your choice</div>
	</td>	<td  ><div>Low-fat chicken soup with garlic rice</div>
	</td>	<td  ><div>Small serving of French fries  (do not deep-fry)</div>
	</td>	<td  ><div>Mac and cheese with skimmed milk</div>
	</td></tr><tr  >	<td  ><div>4</div>
	</td>	<td  ><div>Single serving of eggs, 2 slices of toast, and glass of orange juice</div>
	</td>	<td  ><div>Small serving of pasta with low-fat cheese and a glass of skimmed milk</div>
	</td>	<td  ><div>Baked biscuits with tea</div>
	</td>	<td  ><div>Single serving of vegetarian pizza, big bowl of salad</div>
	</td></tr><tr  >	<td  ><div>5</div>
	</td>	<td  ><div>1 boiled egg with a glass of skimmed milk and a piece of the fruit of your choice</div>
	</td>	<td  ><div>Freshly prepared salad with a bowl of red beans and an apple</div>
	</td>	<td  ><div>Low-fat yogurt</div>
	</td>	<td  ><div>Grilled chicken, salad and juice of your choice</div>
	</td></tr><tr  >	<td  ><div>6</div>
	</td>	<td  ><div>Bowl of low-fat cereal and a piece of the fruit of your choice</div>
	</td>	<td  ><div>Big bowl of fresh salad and a piece of grilled chicken</div>
	</td>	<td  ><div>Small serving of French fries (do not deep-fry)</div>
	</td>	<td  ><div>Mac and cheese with skimmed milk</div>
	</td></tr><tr  >	<td  ><div>7</div>
	</td>	<td  ><div>2 slices of toast with a chicken slice, glass of skimmed milk, and a piece of fruit of your choice</div>
	</td>	<td  ><div>Mixed vegetables served with baked chicken breast</div>
	</td>	<td  ><div>Drink green tea and eat an apple</div>
	</td>	<td  ><div>Grilled meat with red beans</div>
	</td></tr><tr  >	<td  ><div>8</div>
	</td>	<td  ><div>1 boiled egg with a glass of skimmed milk and the fruit of your choice</div>
	</td>	<td  ><div>Small serving of pasta with low-fat cheese and a glass of skimmed milk</div>
	</td>	<td  ><div>Drink green tea and eat an apple</div>
	</td>	<td  ><div>Single serving of vegetarian pizza, big bowl of salad</div>
	</td></tr><tr  >	<td  ><div>9</div>
	</td>	<td  ><div>2 slices of toast with butter, 1 glass of skimmed milk, and a piece of fruit of your choice</div>
	</td>	<td  ><div>Low-fat chicken soup with garlic rice</div>
	</td>	<td  ><div>Low-fat yogurt</div>
	</td>	<td  ><div>Large serving of salad with chicken (do not deep-fry)</div>
	</td></tr><tr  >	<td  ><div>10</div>
	</td>	<td  ><div>Single serving of eggs, 2 slices of toast, and glass of orange juice</div>
	</td>	<td  ><div>Big bowl of freshly prepared salad and a piece of grilled chicken</div>
	</td>	<td  ><div>Baked biscuits with tea</div>
	</td>	<td  ><div>Grilled chicken, salad, and juice of your choice</div>
	</td></tr></tbody></table>
        </div>
    </body>
</html>
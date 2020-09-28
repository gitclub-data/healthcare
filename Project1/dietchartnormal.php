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
        <div style="position:absolute;top:200px;width:1349px;color:red
                    ;font-size:50px;text-align:center;">You are Fit but you have to take a good diet for your health</div>
        <div style="position:absolute;top:300px;width:1349px;">
         <table style="width:1349px;text-align:center;"><thead ><tr>
             <th  ><div>S.No</div>
	</th>   <th  ><div>Food Type</div>
	</th>	<th  ><div>1,600 calorie diet</div>
	</th>	<th  ><div>2,000 calorie diet</div>
	</th>	<th ><div>Sample serving Size</div>
	</th>
             </tr>
             </thead><tbody><tr>
             <td  ><div>1.</div></td>
             <td  ><div>Grains (1/2 should be whole grains)</div>
	</td>	<td  ><div>6 servings</div>
	</td>	<td  ><div>6-8 servings</div>
	</td>	<td  ><div>(baseball sized serving) Examples:1 slice bread, 1 oz. cereal, 1/2 cup rice or past-</div>
	</td></tr><tr  >
             <td  ><div>2.</div></td>
             <td  ><div>Vegetables (eat a rainbow of colors)</div>
	</td>	<td  ><div>3-4 servings</div>
	</td>	<td  ><div>4-5 servings</div>
	</td>	<td  ><div>(fist sized)1 cup leafy vegetables, or 1/2 cup raw or cooked</div>
	</td></tr><tr  >
             <td  ><div>3.</div></td>
             <td  ><div>Fruits</div>
	</td>	<td  ><div>4 servings</div>
	</td>	<td  ><div>4-5 servings</div>
	</td>	<td  ><div>(baseball-sized) 1 medium fruit, 1/4 cup dried fruit, 1/2 cup fresh or frozen or canned fruit, 1/2 cup juice</div>
	</td></tr><tr >
             <td  ><div>4.</div></td>
             <td  ><div>Fat-free or low fat dairy </div>
	</td>	<td  ><div>2-3 servings</div>
	</td>	<td  ><div>2-3 servings</div>
	</td>	<td  ><div>1 cup milk, 1 cup yogurt, 1 oz cheese (the size of 6 stacked dice)</div>
	</td></tr><tr  >
             <td  ><div>5.</div></td>
             <td  ><div>Protein (meats, poultry, seafood)</div>
	</td>	<td  ><div>3-6 oz per day (cooked)</div>
	</td>	<td  ><div>6 oz or less a day</div>
	</td>	<td  ><div>(deck of cards size for 3 oz.)</div>
	</td></tr><tr  >
             <td  ><div>6.</div></td>
             <td  ><div>Protein (Nuts, Seeds and Beans)</div>
	</td>	<td  ><div>3-4 servings a week</div>
	</td>	<td  ><div>4-5 servings a week</div>
	</td>	<td  ><div>1/3 cup nuts, 2 TB peanut butter, 1/2 cup dried beans (1 cup cooked)</div>
	</td></tr><tr  >
             <td  ><div>7.</div></td>
             <td  ><div>Fats and Oils</div>
	</td>	<td  ><div>2 servings a day</div>
	</td>	<td  ><div>2-3 servings a day</div>
	</td>	<td  ><div>1 tea. margarine, 1 tea. vegetable oil, 1 TB. mayonaise or 1 TB regular salad dressing</div>
	</td></tr><tr  >
             <td  ><div>8.</div></td>
             <td  ><div>Sweets and added sugars</div>
	</td>	<td  ><div>0 servings per week</div>
	</td>	<td  ><div>5 or fewer servings per week</div>
	</td>	<td  ><div>1 TB sugar, 1 TB jelly or jam, 1 cup lemonade</div>
	</td></tr></tbody></table>
        </div>
        
    </body>
</html>
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
                    You are Underweight you have to Gain Weight </div>
                <div style="position:absolute;top:300px;width:1349px;color:greenyellow
                    ;font-size:50px;text-align:center;">
                    The diet chart helps you to gain Weight</div>
        <div style="position:absolute;top:400px;"> 
        <table><tr>	<th><div>Day</div>
	</th>	<th  ><div>Breakfast</div>
	</th>	<th><div>Lunch</div>
	</th>	<th  ><div>Snack</div>
	</th>	<th ><div>Dinner</div>
	</th></tr><tr >	<td ><div>1</div>
	</td>	<td ><div>Toast with eggs and glass of full fat milk.</div>
	</td>	<td  ><div>A bowl of rice with fried chicken and potatoes</div>
	</td>	<td ><div>Fried Fries with fresh juice of choice.</div>
	</td>	<td  ><div>Grilled beef with asparagus and potatoes</div>
	</td></tr><tr  >	<td ><div>2</div>
	</td>	<td ><div>A bowl of cornflakes with a mixed fruit bowl or juice of any kind.</div>
	</td>	<td  ><div>Pasta with coffee or juice or beverage of choice</div>
	</td>	<td ><div>Muffins</div>
	</td>	<td  ><div>Chicken stew with beverage of choice. For desert half a serving of pudding</div>
	</td></tr><tr  >	<td ><div>3</div>
	</td>	<td ><div>Multigrain bread with omelet and sausages.</div>
	</td>	<td  ><div>Vegetable curry with bread or rice.</div>
	</td>	<td ><div>Cookies with full fat milk.</div>
	</td>	<td  ><div>Lasagna </div>
	</td></tr><tr  >	<td ><div>4</div>
	</td>	<td ><div>Fried egg with baked beans and sausages.</div>
	</td>	<td ><div>A bowl of rice with fried chicken and potatoes</div>
	</td>	<td ><div>Fried Fries</div>
	</td>	<td  ><div>Chicken or beefsteak with mushroom sauce, side of vegetables and fries.</div>
	</td></tr><tr  >	<td ><div>5</div>
	</td>	<td ><div>Combination of bacon, mushrooms, beans and tomatoes. Along with eggs of choice. Juice or coffee.</div>
	</td>	<td ><div>Fried chicken steak with a rich bowl of salad and choice of sauce.</div>
	</td>	<td ><div>Chicken soup with butter and cream.</div>
	</td>	<td ><div>Chicken stew with beverage of choice. For desert half a serving of pudding</div>
	</td></tr><tr  >	<td ><div>6</div>
	</td>	<td ><div>Toast with eggs and glass of full fat milk</div>
	</td>	<td ><div>Vegetable curry with bread or rice.</div>
	</td>	<td ><div>Sandwiches with mayo and cheese.</div>
	</td>	<td ><div>Grilled beef with asparagus and potatoes</div>
	</td></tr><tr  >	<td ><div>7</div>
	</td>	<td ><div>Multigrain bread with omelet and bacon.</div>
	</td>	<td ><div>Pasta with coffee or juice or beverage of choice</div>
	</td>	<td ><div>Muffins</div>
	</td>	<td ><div>Lasagna</div>
	</td></tr><tr  >	<td ><div>8</div>
	</td>	<td ><div>A bowl of cornflakes with a mixed fruit bowl or juice of any kind.</div>
	</td>	<td ><div>Fried chicken steak with a rich bowl of salad.</div>
	</td>	<td ><div>Cookies with full fat milk</div>
	</td>	<td ><div>Chicken or beefsteak with mushroom sauce, side of vegetables and fries.</div>
	</td></tr><tr  >	<td ><div>9</div>
	</td>	<td ><div>Fried egg with baked beans and sausages.</div>
	</td>	<td ><div>Pasta with coffee or juice or beverage of choice</div>
	</td>	<td ><div>Sandwiches with mayo and cheese.</div>
	</td>	<td ><div>Lasagna</div>
	</td></tr><tr  >	<td ><div>10</div>
	</td>	<td ><div>Toast with eggs and glass of full fat milk</div>
	</td>	<td ><div>A bowl of rice with fried chicken and potatoes</div>
	</td>	<td ><div>Chicken soup with butter and cream.</div>
	</td>	<td ><div>Grilled beef with asparagus and potatoes</div>
	</td></tr><tr  >	<td ><div>11</div>
	</td>	<td ><div>Combination of bacon, mushrooms, beans and tomatoes. Along with eggs of choice. Juice or coffee.</div>
	</td>	<td ><div>Fried chicken steak with a rich bowl of salad and choice of sauce.</div>
	</td>	<td ><div>Sandwiches with mayo and cheese.</div>
	</td>	<td ><div>Chicken stew with beverage of choice. For desert half a serving of pudding</div>
	</td></tr><tr  >	<td ><div>12</div>
	</td>	<td ><div>A bowl of cornflakes with a mixed fruit bowl or juice of any kind.</div>
	</td>	<td ><div>A bowl of rice with fried chicken and potatoes</div>
	</td>	<td ><div>Fried Fries</div>
	</td>	<td ><div>Grilled beef with asparagus and potatoes</div>
	</td></tr><tr  >	<td ><div>13</div>
	</td>	<td ><div>Fried egg with baked beans and sausages.</div>
	</td>	<td ><div>Vegetable curry with bread or rice.</div>
	</td>	<td ><div>Muffins</div>
	</td>	<td ><div>Chicken or beefsteak with mushroom sauce, side of vegetables and fries.</div>
	</td></tr><tr  >	<td ><div>14</div>
	</td>	<td ><div>Toast with eggs and glass of full fat milk</div>
	</td>	<td ><div>Pasta with coffee or juice or beverage of choice</div>
	</td>	<td ><div>Cookies with full fat milk.</div>
	</td>	<td ><div>Lasagna</div>
	</td></tr><tr  >	<td ><div>15</div>
	</td>	<td ><div>Large fruit bowl with juice of choice.</div>
	</td>	<td ><div>A bowl of rice with fried chicken and mash potatoes</div>
	</td>	<td ><div>Chicken soup with butter and cream.</div>
	</td>	<td ><div>Chicken stew with beverage of choice. For desert half a serving of pudding</div>
	</td></tr><tr  >	<td ><div>16</div>
	</td>	<td ><div>Multigrain bread with omelet and sausages or bacon.</div>
	</td>	<td ><div>Vegetable curry with bread or rice.</div>
	</td>	<td ><div>Fried Fries</div>
	</td>	<td ><div>Grilled beef with asparagus and potatoes</div>
	</td></tr><tr  >	<td ><div>17</div>
	</td>	<td ><div>1 orange and a toast with eggs and glass of full fat milk</div>
	</td>	<td ><div>Fried chicken steak with a rich bowl of green salad.</div>
	</td>	<td ><div>Chicken soup with butter and cream.</div>
	</td>	<td ><div>Spaghetti with poached eggs.</div>
	</td></tr><tr  >	<td ><div>18</div>
	</td>	<td ><div>Eggs with bacon, mushrooms, beans and tomatoes. Juice or coffee.</div>
	</td>	<td ><div>A bowl of Chinese rice with fried chicken and potatoes</div>
	</td>	<td ><div>Sandwiches with mayo and cheese.</div>
	</td>	<td ><div>Chicken stew with beverage of choice. For desert half a serving of cake or chocolate</div>
	</td></tr><tr  >	<td ><div>19</div>
	</td>	<td ><div>1 orange and a toast with eggs and glass of full fat milk</div>
	</td>	<td ><div>Pasta with coffee or juice or beverage of choice</div>
	</td>	<td ><div>Cookies with full fat milk.</div>
	</td>	<td ><div>Lasagna</div>
	</td></tr><tr  >	<td ><div>20</div>
	</td>	<td ><div>Fried egg with baked beans and sausages.</div>
	</td>	<td ><div>Fried chicken steak with a rich bowl of salad along with potatoes and tomatoes</div>
	</td>	<td ><div>Sandwiches with mayo and cheese.</div>
	</td>	<td ><div>Chicken or beefsteak with mushroom sauce, side of vegetables and fries.</div>
	</td></tr><tr  >	<td ><div>21</div>
	</td>	<td ><div>A bowl of cornflakes with a mixed fruit bowl or juice of any kind.</div>
	</td>	<td ><div>Whole grain Pasta with coffee or juice or beverage of choice</div>
	</td>	<td ><div>Cookies with full fat milk.</div>
	</td>	<td ><div>Lasagna</div>
	</td></tr><tr  >	<td ><div>22</div>
	</td>	<td ><div>Toast with eggs and glass of full fat milk</div>
	</td>	<td ><div>A bowl of rice with fried chicken and potatoes</div>
	</td>	<td ><div>Chicken soup with butter and cream.</div>
	</td>	<td ><div>Grilled beef with asparagus and potatoes</div>
	</td></tr><tr  >	<td ><div>23</div>
	</td>	<td ><div>Combination of bacon, mushrooms, beans and tomatoes. Along with eggs of choice. Juice or coffee.</div>
	</td>	<td ><div>Fried chicken steak with a rich bowl of salad and choice of sauce.</div>
	</td>	<td ><div>Cookies with full fat milk.</div>
	</td>	<td ><div>Chicken or beefsteak with mushroom sauce, side of vegetables and fries.</div>
	</td></tr><tr  >	<td ><div>24</div>
	</td>	<td ><div>Fried egg with baked beans and sausages.</div>
	</td>	<td ><div>Vegetable curry with bread or rice.</div>
	</td>	<td ><div>Muffins</div>
	</td>	<td ><div>Grilled beef with asparagus and potatoes</div>
	</td></tr><tr  >	<td ><div>25</div>
	</td>	<td ><div>Large fruit bowl with juice of choice.</div>
	</td>	<td ><div>Whole grain Pasta with coffee or juice or beverage of choice</div>
	</td>	<td ><div>Chicken soup with butter and cream.</div>
	</td>	<td ><div>Chicken or beefsteak with mushroom sauce, side of vegetables and fries.</div>
	</td></tr><tr  >	<td ><div>26</div>
	</td>	<td ><div>1 orange and a toast with eggs and glass of full fat milk</div>
	</td>	<td ><div>Vegetable curry with bread or rice.</div>
	</td>	<td ><div>Sandwich with mayo and cheese.</div>
	</td>	<td ><div>Spaghetti with poached eggs.</div>
	</td></tr><tr  >	<td ><div>27</div>
	</td>	<td ><div>Multigrain bread with omelet and sausages.</div>
	</td>	<td ><div>Fried chicken steak with a rich bowl of salad along with potatoes and tomatoes</div>
	</td>	<td ><div>Muffins</div>
	</td>	<td ><div>Chicken stew with beverage of choice. For desert half a serving of pudding</div>
	</td></tr><tr  >	<td ><div>28</div>
	</td>	<td ><div>Combination of bacon, mushrooms, beans and tomatoes. Along with eggs of choice. Juice or coffee.</div>
	</td>	<td ><div>Chinese rice with fried chicken and mash potatoes</div>
	</td>	<td ><div>Fried Fries</div>
	</td>	<td ><div>Lasagna</div>
	</td></tr><tr  >	<td ><div>29</div>
	</td>	<td ><div>Fried egg with baked beans and sausages.</div>
	</td>	<td ><div>Whole grain Pasta with coffee or juice or beverage of choice</div>
	</td>	<td ><div>Chicken sandwiches with mayo.</div>
	</td>	<td ><div>Spaghetti with poached eggs.</div>
	</td></tr><tr  >	<td ><div>30</div>
	</td>	<td ><div>A bowl of cornflakes or porridge with a mixed fruit bowl or juice of any kind.</div>
	</td>	<td ><div>A bowl of rice with fried chicken and potatoes</div>
	</td>	<td ><div>Chicken soup with butter and cream.</div>
	</td>	<td ><div>Chicken stew with beverage of choice. For desert half a serving of pudding</div>
	</td></tr></table>
        </div>
    </body>
</html>
<html>
<head>
    <style>
        *
        {
            margin: 0px;
            padding: 0px;
        }
    #body
    {
        width: 1360px;
        filter: blur(5px);
        height: 655px;
        }
        #div1
        {
            position: absolute;
            top: 20px;
            left: 450px;
            color: snow;
            font-size: 120px;
            width:600px;
            height: 120px;
        }
        #div2
        {
            position: absolute;
            top: 140px;
            left: 540px;
            color: snow;
            font-size: 25px;
            width:350px;
            height: 20px;
        }
        #image1
        {
            position: absolute;
            top: 180px;
            left: 50px;
            width:250px;
            height: 250px;
        }
        #Medical
        {
        position: absolute;
            top: 440px;
            left: 80px;
            font-size: 50px;
            text-decoration: none;
            color: snow;
        }
        #image2
        {
            position: absolute;
            top: 180px;
            left: 500px;
            width:300px;
            height: 250px;
        }
        #Fitness
        {
         position: absolute;
            top: 440px;
            left: 580px;
            font-size: 50px;
            text-decoration: none;
            color: snow;
        }  
        #image3
        {
            position: absolute;
            top: 180px;
            left: 1000px;
            width:300px;
            height: 250px;
        }
        #diet
        {
         position: absolute;
            top: 440px;
            left: 1100px;
            font-size: 50px;
            text-decoration: none;
            color: snow;
        }
    </style>
    <script>
        function validate()
        {
            var result=true;
            var i=document.getElementsByName("email")[0].value;
            var aindex=i.indexOf('@');
            var dotindex=i.lastIndexOf('.');
            var j=i.length;
            if( dotindex>=j-2 || dotindex-aindex<3)
               {
                   alert("please enter a valid e-mail address");
               result=false;
               }
            
               return(result);
        }
    </script>
    </head>
    <body>
        <div style="height:640px;">
            <img id="body" src="hello19.jpg"/>
        <div id="div1">
        Heathcare
        </div>
        <div id="div2">
        Medical,Fittness And Diet Charts
            </div>
                        <p style="color:white;position:absolute;top:190px;left:300px;font-size:30px;">
we can only guide you.You have to work yourself for your health.</p>
                    <img src="hello2.gif"style="position:absolute;top:400px;left:175px;width:150px;height:150px;"/>
            <div style="width:450px;height:350px;position:absolute;top:280px;left:440px;">
                    <img src="hello20.gif"style="position:absolute;top:-50px;left:175px;width:150px;height:150px;"/>
                    <p style="color:green;position:absolute;top:120px;left:95px;font-size:30px;">LOGIN INTO HealthCare</p>
                    <form action="loginvalidation.php" method="post" onsubmit="return validate()">
               <p style="position:absolute;top:170px;left:80px;font-size:20px;">Email : </p>
               <input type="email" name="email" placeholder="Type Your Email" style="position:absolute;top:170px;left:150px;width:250px;height:30px;" required/>
               <p style="position:absolute;top:225px;left:50px;font-size:20px;">Password :</p>
               <input type="password" name="password" placeholder="Type Your Password"style="position:absolute;top:220px;left:150px;width:250px;height:30px;" required/>
               <input type="submit" value="Login" style="position:absolute;top:280px;left:200px;width:80px;height:30px;font-size:20px;"/>
                </form>
                    <a href="signup.php" style="position:absolute;top:320px;left:125px;">Don't have an account? sign up here</a>
            </div> 
            
                    <img src="hello21.gif"style="position:absolute;top:400px;left:1075px;width:150px;height:150px;"/>
        </div>
    </body>
</html>
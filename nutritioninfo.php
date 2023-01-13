<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);//checking if user exists

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition Info</title>
    </head>
    <body>
        <div class = "background11"> 
        <div class="nutritioninfo1">
            <h2>Spirulina</h2>
            <img src="Pics/spirulina.jpeg" alt="spirulina">
            <ul>
                <li>Rich in Many Nutrients</li>
                <li>Boasts powerful antioxidant and anti-flammatory properties</li>
                <li>May lower cholesterol and triglyceride levels</li>
                <li>May have anti-cancer properties</li>
                <li>May reduce blood pressure</li>
                <li>May improve muscle strength and endurance</li>
            </ul>
        </div>
        <div class= "ab">
            <h3>Sea Moss</h3>
            <img src="Pics/seamoss.jpeg" alt="seamoss">
            <ul>
                <li>May promote thyroid health</li>
                <li>May support gut health</li>
                <li>May support muscle recovery</li>
                <li>Enhanced immune system response</li>
                <li>Anti-Flammatory effects</li>
                <li>May help lower cholesterol</li>
            </ul>
        </div>
           <div class = "ac">
            <h4>Chicken Breast</h4>
            <img src="Pics/chickenbreast.jpeg" alt="chickenbreast">
            <ul>
                <li>Excellent source of lean protein (31g per 100g)</li>
                <li>165 calories per 100g serving</li>
                <li>Low fat protein source (3.6g per 100g)</li>
                <li>High in antioxidants</li>
                <li>Help with appetite control</li>
                <li>Good source of Vitamin B, Vitamin D, Iron, Calcium and Zinc</li>
            </ul>
           </div>

           <div class = "ad">
            <h5>Salmon</h5>
            <img src="Pics/salmon.jpeg" alt="salmon">
            <ul>
                <li>Excellent source of protein (25.2g per 100g)</li>
                <li>Healthy Omega-3 Fatty Acids (9.2 per 100g)</li>
                <li>182 Calories per 100g serving</li>
                <li>27 minutes of cycling to burn 182 calories</li>
                <li>18 minutes of running to burn 182 calories</li>
                <li>High in Vitamin B and a good source of potassium</li>
            </ul>
            
            </div>
            <div class = "ae">
            <h6>Blueberries</h6>
            <img src="Pics/blueberries.jpeg" alt="blueberries">
            <ul>
                <li>Blueberries are 84% water!</li>
                <li>2.4g Fibre per 100g, 14.5g Carbs</li>
                <li>57 Calories per 100g serving</li>
                <li>May help regulate blood sugar</li>
                <li>May help prevent heart disease</li>
                <li>Rich in antioxidants</li>
            </ul>
            </div>

        </div>
    </div>
    </body>

    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }

    .background11{
  width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(Pics/WEBSITE.jpeg);
    background-position: center;
    background-size: cover;
    height: 500vh;
}

.nutritioninfo1 h2{
  color: #f8f8f8;
  font-size: 35px;
  font-family: Arial;
  padding-left: 650px;
  float: left;
  padding-top: 1px;
  margin-top: 10px

}
.nutritioninfo1 img{
  margin-left: 520px;
  margin-top: 30px;
  border-radius: 5px;
  padding: 0px; 
  width: 390px;
  height: 300px;  

}
.nutritioninfo1 ul{
  color: #f8f8f8;
  display: block;
  list-style-type: disc;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 40px;

}
.ab h3{
  color: #f8f8f8;
  font-size: 35px;
  font-family: Arial;
  padding-left: 650px;
  float: left;
  padding-top: 1px;
  margin-top: 10px
}
.ab img{
  margin-left: 520px;
  margin-top: 30px;
  border-radius: 5px;
  padding: 0px; 
  width: 390px;
  height: 300px; 
}
.ab ul{
  color: #f8f8f8;
  display: block;
  list-style-type: disc;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 40px;
}
.ac h4{
  color: #f8f8f8;
  font-size: 35px;
  font-family: Arial;
  padding-left: 650px;
  float: left;
  padding-top: 1px;
  margin-top: 10px;
}
.ac img{
  margin-left: 520px;
  margin-top: 30px;
  border-radius: 5px;
  padding: 0px; 
  width: 390px;
  height: 300px; 
}
.ac ul{
  color: #f8f8f8;
  display: block;
  list-style-type: disc;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 40px;
}
.ad h5{
  color: #f8f8f8;
  font-size: 35px;
  font-family: Arial;
  padding-left: 650px;
  float: left;
  padding-top: 1px;
  margin-top: 10px;
}
.ad img{
  margin-left: 520px;
  margin-top: 30px;
  border-radius: 5px;
  padding: 0px; 
  width: 390px;
  height: 300px; 
}
.ad ul{
  color: #f8f8f8;
  display: block;
  list-style-type: disc;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 40px;
}
.ae h6{
  color: #f8f8f8;
  font-size: 35px;
  font-family: Arial;
  padding-left: 650px;
  float: left;
  padding-top: 1px;
  margin-top: 10px;
}
.ae img{
  margin-left: 520px;
  margin-top: 30px;
  border-radius: 5px;
  padding: 0px; 
  width: 390px;
  height: 300px; 
}
.ae ul{
  color: #f8f8f8;
  display: block;
  list-style-type: disc;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 40px;
}

</style>
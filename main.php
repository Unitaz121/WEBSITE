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
    <title>Webpage</title>
    </head>
    <body>
    
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">HEALTHY FOOD</h2>
                </div>
    
                <div class="menu">
                    <ul>
                        <li><a href="support.php">Support</a></li>
                        <li><a href="features.php">Features</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="pricing.php">Pricing</a></li>
                    </ul>
                </div>
    
                <div class="products">
                    <img src="Pics/products.jpg" alt="products">
                    <a href="products.php"><button class="btn">Products</button>
                </a>
                  </div>

                  <div class="findexercises">
                    <img src="Pics/EXERCISE.jpeg" alt="Find Exercises">
                    <a href="findexercises.php"><button class="btn">Find exercises</button>
                </a>
                  </div>

                  <div class="createyourmeal">
                    <img src="Pics/meal.jpeg" alt="Create your meal">
                    <a href="createyourmeal.php"><button class="btn">Create Your Meal</button>
                </a>
                  </div>

                  <div class="nutritioninfo">
                    <img src="Pics/INFO.jpeg" alt="Nutrition info">
                    <a href="nutritioninfo.php"><button class="btn">Nutrition info</button>
                </a>
                  </div>

                  <div class="achievements">
                    <img src="Pics/ACHIEVE.jpeg" alt="Achievements">
                    <a href="achievements.php"><button class="btn">Your achievements</button>
                </a>
                  </div>
                <div class="logout">
                  <a href="logout.php"><button class="btn">Logout</button>
                  </a>
                </div>


            </div> 
    
                    </div>
                        </div>
                    </div>
            </div>
        </div>
        </div> 
        </div>
    </body>
    </html>


    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    
    .main{
        width: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(Pics/WEBSITE.jpeg);
        background-position: center;
        background-size: cover;
        height: 250vh;
    }
    
    .navbar{
        width: 1200px;
        height: 100px;
        margin: auto;
    }
    
    .icon{
        width: 200px;
        float: left;
        height: 70px;
    }
    
    .logo{
        color: #f8f8f8;
        font-size: 30px;
        font-family: Arial;
        padding-left: 20px;
        float: left;
        padding-top: 20px;
        margin-top: 5px
    }
    
    .menu{
        width: 400px;
        float: left;
        padding-left: 320px;
        height: 70px;
    }
    
    ul{
        float: left;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    ul li{
        list-style: none;
        margin-left: 100px;
        margin-top: 27px;
        font-size: 20px;
    }
    
    ul li a{
        text-decoration: none;
        color: #fff;
        font-family: Arial;
        font-weight: bold;
        transition: 0.6s ease-in-out;
    }
    
    .products {
        position: relative;
        width: 50%;
      }
      .products img {
        height: auto;
        margin-left: px;
        margin-top: 100px;
        border-radius: 25px;
        padding: 20px; 
        width: 290px;
        height: 203px; 
      }
      .products .btn {
        position: absolute;
        top: 70%;
        left: 27.5%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: rgba(6, 29, 13, 0.712);
        color: white;
        font-size: 46px;
        padding: 75px 58px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }
      .products .btn:hover {
        background-color: rgba(0, 0, 0, 0);
      }  
    
    .findexercises{
        position: relative;
        width: 50%;
    }
    
    .findexercises img{
        height: auto;
        margin-left: px;
        margin-top: 50px;
        border-radius: 25px;
        padding: 20px; 
        width: 290px;
        height: 203px; 
    }
    .findexercises .btn {
        position: absolute;
        top: 57.5%;
        left: 27.5%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: rgba(6, 29, 13, 0.712);
        color: white;
        font-size: 46px;
        padding: 75px 7px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }
      .findexercises .btn:hover {
        background-color: rgba(0, 0, 0, 0);
      }  
    
      .createyourmeal{
        position: relative;
        width: 50%;
      }
    
      .createyourmeal img{
        height: auto;
        margin-left: px;
        margin-top: 50px;
        border-radius: 25px;
        padding: 20px; 
        width: 290px;
        height: 203px;   
    }
    .createyourmeal .btn {
        position: absolute;
        top: 57.5%;
        left: 27.5%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: rgba(6, 29, 13, 0.712);
        color: white;
        font-size: 40px;
        padding: 79px 0px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }
      .createyourmeal .btn:hover {
        background-color: rgba(0, 0, 0, 0);
      }  
    
      .nutritioninfo{
        position: relative;
        width: 50%;
      }
    
      .nutritioninfo img{
        height: auto;
        margin-left: px;
        margin-top: 50px;
        border-radius: 25px;
        padding: 20px; 
        width: 290px;
        height: 203px;    
    }
    .nutritioninfo .btn {
        position: absolute;
        top: 57.5%;
        left: 27.5%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: rgba(6, 29, 13, 0.712);
        color: white;
        font-size: 46px;
        padding: 74.5px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }
      .nutritioninfo .btn:hover {
        background-color: rgba(0, 0, 0, 0);
      }  
    
      .nutritioninfo h2{
        color: #f8f8f8;
        font-size: 35px;
        font-family: Arial;
        text-align: justify;
        padding: 110px;
        
      }
    
      .nutritioninfo ul{
        text-decoration: none;
        color: #fff;
        font-family: Arial;
        font-weight: bold;
        transition: 0.6s ease-in-out;
      }
    
      .achievements{
        position: relative;
        width: 50%;
      }
    
      .achievements img{
        height: auto;
        margin-left: px;
        margin-top: 50px;
        border-radius: 25px;
        padding: 20px; 
        width: 290px;
        height: 200px;    
    }
    .achievements .btn {
      position: absolute;
        top: 57.5%;
        left: 27.5%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: rgba(6, 29, 13, 0.712);
        color: white;
        font-size: 34px;
        padding: 79.5px 7.5px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }
      .achievements .btn:hover {
        background-color: rgba(0, 0, 0, 0);
      }
      .logout .btn{
        position: absolute;
        top: 3%;
        left: 3%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: rgba(6, 29, 13, 0.712);
        color: white;
        font-size: 10px;
        padding: 10px 7.5px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }
      .logout .btn:hover{background-color: rgba(0, 0, 0, 0);
      }

</style>
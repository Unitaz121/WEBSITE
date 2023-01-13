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
    <title>achievments</title>
    </head>
    <body>

        <div class = "background4">
        <div class = "achievements"> 

            <div class="a">
                <img src="Pics/ex.jpeg" alt="yourexercises">
                <a href="yourexercises.html"><button class="btn">Your Exercises</button>
            </a>
              </div>

              <div class="b">
                <img src="Pics/diet.webp" alt="yourdiet">
                <a href="yourdiet.html"><button class="btn">Your Diet</button>
            </a>
              </div>

              <div class="c">
                <img src="Pics/prog.jpeg" alt="yourprogress">
                <a href="yourprogress.html"><button class="btn">Your Progress</button>
            </a>
              </div>


              <div class="d">
                <img src="Pics/todo.jpeg" alt="taskstocomplete">
                <a href="taskstocomplete.html"><button class="btn">Tasks To Complete</button>
            </a>
              </div>


              <div class="e">
                <img src="Pics/mealor.jpeg" alt="yourmealorders">
                <a href="yourmealorders.html"><button class="btn">Your Meal Orders</button>
            </a>
              </div>


              <div class="f">
                <img src="Pics/bonus.jpeg" alt="yourbonuses">
                <a href="yourbonuses.html"><button class="btn">Your Bonuses</button>
            </a>
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

    .background4 {
  width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(Pics/WEBSITE.jpeg);
    background-position: center;
    background-size: cover;
    height: 200vh;
}


.a{
  position: relative;
  width: 100%;
}
.a img {
  
    margin-left: 200px;
    margin-top: 50px;
    border-radius: 25px;
    padding: 20px; 
    width: 390px;
    height: 300px;  

}
.a .btn {
  position: absolute;
  top: 55.8%;
  left: 28.7%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 122.5px 54px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.a .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}  

.b{
  position: relative;
  width: 100%;
}
.b img {
  
    margin-left: 800px;
    margin-top: -200px;
    border-radius: 25px;
    padding: 20px; 
    width: 390px;
    height: 300px;    

}
.b .btn {
  position: absolute;
  top: -20.8%;
  left: 70.6%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 107px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.b .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

.c{
  position: relative;
  width: 100%;
}
.c img {

  margin-left: 200px;
  margin-top: -40px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;  

}
.c .btn {
  position: absolute;
  top: 42.8%;
  left: 28.8%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 61px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.c .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

.d{
  position: relative;
  width: 100%;
}
.d img {
  margin-left: 800px;
  margin-top: -180px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;   

}
.d .btn {
  position: absolute;
  top: -6%;
  left: 70.5%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 13px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.d .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

.e{
  position: relative;
  width: 100%;
}
.e img {
  margin-left: 200px;
  margin-top: -40px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;    

}
.e .btn {
  position: absolute;
  top: 42.8%;
  left: 28.8%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 28px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.e .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

.f{
  position: relative;
  width: 100%;
}
.f img {
  margin-left: 800px;
  margin-top: -180px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;    

}
.f .btn {
  position: absolute;
  top: -6%;
  left: 70.5%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 63px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.f .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

</style>
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
    <title>Find Exercises</title>
    </head>
    <body>
        <div class = "background5">
            <div class = "findexercises"> 
    
                <div class="aa">
                    <img src="Pics/burpee.jpeg" alt="burpee">
                    <a href="burpee.html"><button class="btn">Burpee</button>
                </a>
                  </div>
    
                  <div class="ba">
                    <img src="Pics/highplank.png" alt="highplank">
                    <a href="highplank.html"><button class="btn">High Plank</button>
                </a>
                  </div>
    
                  <div class="ca">
                    <img src="Pics/pushup.jpeg" alt="pushup">
                    <a href="pushup.html"><button class="btn">Push Up</button>
                </a>
                  </div>
    
    
                  <div class="da">
                    <img src="Pics/situp.jpeg" alt="sitip">
                    <a href="situp.html"><button class="btn">Sit Up</button>
                </a>
                  </div>
    
    
                  <div class="ea">
                    <img src="Pics/squats.webp" alt="squats">
                    <a href="squats.html"><button class="btn">Squats</button>
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
    .background5 {
  width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(Pics/WEBSITE.jpeg);
    background-position: center;
    background-size: cover;
    height: 200vh;
}


.aa{
  position: relative;
  width: 100%;
}
.aa img {
  
    margin-left: 200px;
    margin-top: 50px;
    border-radius: 25px;
    padding: 20px; 
    width: 390px;
    height: 300px;  

}
.aa .btn {
  position: absolute;
  top: 55.8%;
  left: 28.8%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 125px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.aa .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}  

.ba{
  position: relative;
  width: 100%;
}
.ba img {
  
    margin-left: 800px;
    margin-top: -200px;
    border-radius: 25px;
    padding: 20px; 
    width: 390px;
    height: 300px;    

}
.ba .btn {
  position: absolute;
  top: -20.8%;
  left: 70.5%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 90.8px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.ba .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

.ca{
  position: relative;
  width: 100%;
}
.ca img {

  margin-left: 200px;
  margin-top: -40px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;  

}
.ca .btn {
  position: absolute;
  top: 42.8%;
  left: 28.8%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 125px 112.1px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.ca .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

.da{
  position: relative;
  width: 100%;
}
.da img {
  margin-left: 800px;
  margin-top: -180px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;   

}
.da .btn {
  position: absolute;
  top: -6%;
  left: 70.5%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 136.2px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.da .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

.ea{
  position: relative;
  width: 100%;
}
.ea img {
  margin-left: 200px;
  margin-top: -40px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;    

}
.ea .btn {
  position: absolute;
  top: 42.8%;
  left: 28.8%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 127px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.ea .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}

.fa{
  position: relative;
  width: 100%;
}
.fa img {
  margin-left: 800px;
  margin-top: -180px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;    

}
.fa .btn {
  position: absolute;
  top: -6%;
  left: 140.9%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 96px 111px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.fa .btn:hover {
  background-color: rgba(0, 0, 0, 0);
}


    </style>
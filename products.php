<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con); //checking if user exists

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    </head>
    <body>
        <div class = "background12">
        <div class="products1">
            <div class="ca1">
                <img src="Pics/seamoss.jpeg" alt="seamoss">
                <a href="seamoss.html"><button class="btn">Sea Moss</button>
            </a>
              </div>
              <div class="cb">
                <img src="Pics/spirulina.jpeg" alt="spirulina">
                <a href="spirulina.html"><button class="btn">Spirulina</button>
            </a>
              </div>
              <div class="cc">
                <img src="Pics/chiaseeds.jpeg" alt="chiaseeds">
                <a href="chiaseeds.html"><button class="btn">Chia Seeds</button>
            </a>
              </div>
              <div class="cd">
                <img src="Pics/blueberries.jpeg" alt="blueberries">
                <a href="blueberries.html"><button class="btn">Blueberries</button>
            </a>
              </div>
              <div class="ce">
                <img src="Pics/salmon.jpeg" alt="salmon">
                <a href="salmon.html"><button class="btn">Salmon</button>
            </a>
              </div>
              <div class="cf">
                <img src="Pics/chickenbreast.jpeg" alt="chickenbreast">
                <a href="chickenbreast.html"><button class="btn">Chicken Breast</button>
            </a>
              </div>


        </div>

    </div>
    </body>
    
    <style type="text/css">
      *{
          margin: 0;
          padding: 0;
      }

    .background12{
  width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(Pics/WEBSITE.jpeg);
    background-position: center;
    background-size: cover;
    height: 500vh;
}
.ca1{
  position: relative;
  width: 100%;
  }
.ca1 img {
  
  margin-left: 800px;
  margin-top: 100px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;    

}
.ca1 .btn {
position: absolute;
top: 60.8%;
left: 70.5%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
background-color: rgba(6, 29, 13, 0.712);
color: white;
font-size: 46px;
padding: 123px 99.6px;
border: none;
cursor: pointer;
border-radius: 5px;
}
.ca1 .btn:hover {
background-color: rgba(0, 0, 0, 0);
}

.cb{
position: relative;
width: 100%;
}
.cb img {

margin-left: 200px;
margin-top: -40px;
border-radius: 25px;
padding: 20px; 
width: 390px;
height: 300px;  

}
.cb .btn {
position: absolute;
top: 42.8%;
left: 28.84%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
background-color: rgba(6, 29, 13, 0.712);
color: white;
font-size: 46px;
padding: 123px 110.3px;
border: none;
cursor: pointer;
border-radius: 5px;
}
.cb .btn:hover {
background-color: rgba(0, 0, 0, 0);
}

.cc{
position: relative;
width: 100%;
}
.cc img {
margin-left: 800px;
margin-top: -180px;
border-radius: 25px;
padding: 20px; 
width: 390px;
height: 300px;   

}
.cc .btn {
position: absolute;
top: -6%;
left: 70.5%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
background-color: rgba(6, 29, 13, 0.712);
color: white;
font-size: 46px;
padding: 124px 84px;
border: none;
cursor: pointer;
border-radius: 5px;
}
.cc .btn:hover {
background-color: rgba(0, 0, 0, 0);
}

.cd{
position: relative;
width: 100%;
}
.cd img {
margin-left: 200px;
margin-top: -40px;
border-radius: 25px;
padding: 20px; 
width: 390px;
height: 300px;    

}
.cd .btn {
position: absolute;
top: 42.8%;
left: 28.8%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
background-color: rgba(6, 29, 13, 0.712);
color: white;
font-size: 46px;
padding: 123px 85px;
border: none;
cursor: pointer;
border-radius: 5px;
}
.cd .btn:hover {
background-color: rgba(0, 0, 0, 0);
}

.ce{
position: relative;
width: 100%;
}
.ce img {
margin-left: 800px;
margin-top: -180px;
border-radius: 25px;
padding: 20px; 
width: 390px;
height: 300px;    

}
.ce .btn {
position: absolute;
top: -6.2%;
left: 70.5%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
background-color: rgba(6, 29, 13, 0.712);
color: white;
font-size: 46px;
padding: 123px 121.5px;
border: none;
cursor: pointer;
border-radius: 5px;
}
.ce .btn:hover {
background-color: rgba(0, 0, 0, 0);
}
.cf{
  position: relative;
  width: 100%;
  }
  .cf img {
  margin-left: 200px;
  margin-top: -40px;
  border-radius: 25px;
  padding: 20px; 
  width: 390px;
  height: 300px;    
  
  }
  .cf .btn {
  position: absolute;
  top: 42.6%;
  left: 28.8%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(6, 29, 13, 0.712);
  color: white;
  font-size: 46px;
  padding: 123px 47px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  }
  .cf .btn:hover {
  background-color: rgba(0, 0, 0, 0);
  }

  </style>

  
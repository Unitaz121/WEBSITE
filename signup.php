<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: popup.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	*{
        margin: 0;
        padding: 0;
    }

	#text{

	width: 320px;
    font-family: sans-serif;
    text-align: center;
    color: #009756;
    font-size: 12px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
	}

	#button{

	width: 340px;
    height: 40px;
    background: #5aed47;
    border: none;
    margin-top: 30px;
    font-size: 12px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
	}

	#box{

	width: 350px;
    height: 400px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0, 0, 0, 0.8)50%);
    position: absolute;
    top: 100px;
    left: 500px;
    transform: translate(0%,-5%);
    border-radius: 15px;
    padding: 40px;
	}
	#background{
	width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(Pics/WEBSITE.jpeg);
    background-position: center;
    background-size: cover;
    height: 100vh;
	}

	</style>

	<div id="background">
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
	
</body>
</html>
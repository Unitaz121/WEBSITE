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

			//read from database if the password and username exist then log in 
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: main.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}
		else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	<div id="background"></div>
	<div id="box">

		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>
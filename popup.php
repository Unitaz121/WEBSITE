
<!DOCTYPE html>
<html>
<head>
	<title>popup</title>
</head>
<body>
<div id="background">
<div class="popup" id = "popup">
		<h2> Thank you!</h2>
		<p> You have successfully signed up! </p>
		<a href="login.php"><button type="button">OK</button>
	</div>
	</div>


<style type="text/css">
	
	*{
        margin: 0;
        padding: 0;
    }
	#popup{
		width 400px;
		background: #fff;
		border-radius: 6px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%) scale(1);
		text-align: center;
		padding: 0 30px 30px;
		color: #333;
		visibility: visible;
		transition: transform 0.4s, top 0.4s;

	}
	
	#popup h2{
		font-size: 38px;
		font-weight: 500;
		margin: 30px 0 10px;
	}
	#popup button{
		width: 100%;
		margin-top: 50px;
		padding: 10px 0;
		background: #6fd649;
		color: #fff;
		border: 0;
		outline: none;
		font-size: 18px;
		border-radius: 4px;
		cursor: pointer;
		
	}
	#background{
	width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(Pics/WEBSITE.jpeg);
    background-position: center;
    background-size: cover;
    height: 100vh;
	}
</body>
</hmtl>
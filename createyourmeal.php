<?php 
 session_start();

 include("connection1.php");
 include("functions.php");
 include("connection.php");

 $user_data = check_login($con);//checking if user exists
 
	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'meals');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	// write query 
	$sql = 'SELECT title, nutrients, calories  id FROM Breakfast';

	// get the result set 
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$Breakfast = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory
	mysqli_free_result($result);

   //print
   print_r($Breakfast);
   
	// close connection
	mysqli_close($conn);

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your meal</title>
    </head>
    <body>
        <div class = "background11"> 
            <div class = "createyourmeal1">
                <h1> Breakfast  </h1> 
             <table align="center" border="1px" style="width:600px; line-height:40px;">
             <tr>
                <th colspan="3"><h2>Meals</h2></th>
              </tr>
              <t>
                <th> Title </th>
                <th> Nutrients </th>
                <th> Calories </th>
              </t>

        <?php
        while($Breakfast=mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
          <td><?php echo $Breakfast['Title']; ?></td>
          <td><?php echo $Breakfast['Nutrients']; ?></td>
          <td><?php echo $Breakfast['Calories']; ?></td>
        </tr>
        <?php
        }
        ?>
        
</div>
</div>      
    </body>
    </html>
  
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    .background11 {
  width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(Pics/WEBSITE.jpeg);
    background-position: center;
    background-size: cover;
    height: 300vh;
}

.createyourmeal1 h1{
  color: #f8f8f8;
    font-size: 35px;
    font-family: Arial;
    padding-left: 600px;
    float: left;
    padding-top: 1px;
    margin-top: 0px
}

.food{
  color: #f8f8f8;
    font-size: 35px;
    font-family: Arial;
    padding-left: 600px;
    float: left;
    padding-top: 1px;
    margin-top: 0px
}


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style >
	
	body{
		background-image: url(https://images.unsplash.com/photo-1491947153227-33d59da6c448?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80);
		background-size: cover;
		/*background-position: center center;
		background-attachment: fixed; */
	}
	#ui{
		background-color: #333;
		padding: 30px; 
		margin-top: 50px;
		border-radius: 20px; 
		opacity: 0.8;
	}
	#ui label,h1{

		color: white;
		align-content: center;
	}

</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div id="ui">
					<center><h1>Registration</h1></center><br>
					<form class="form-group  text-center" action="Sign_Up.php" method="post">

						<div class="row" >
							<div class="col-lg-6">
								<label><center>First Name:</center></label>
								<input type="text" name="fname" class="form-control" placeholder="Enter Your First Name" required="">
							</div>

							<div class="col-lg-6">
								<label><center>Last Name:</center></label>
								<input type="text" name="lname" class="form-control" placeholder="Enter Your Last Name" required>
							</div>
							
						</div>
						<br>
						<label><center>E-mail</center></label>
						<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
						<br>
						<div class="row">
							<div class="col-lg-6">
								<label><center>Password:</center></label>
								<input type="Password" name="fname" class="form-control" placeholder="Enter New  Password" required>
							</div>

							<div class="col-lg-6">
								<label><center>Retype Password:</center></label>
								<input type="Password" name="lname" class="form-control" placeholder="Retype again." required>
							</div>
							
							
						</div>
						<br>
						<input type="submit" name="submit" value="Submit" class="btn btn-info btn-block btn-lg">
							
					</form>
					
				</div>

			</div>
			<div class="col-lg-3"></div>
			
		</div>

	</div>

</body>
</html>
<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("registration") or die(mysql_error());

if (isset($_POST['signup']))
{
    echo $name=$_POST['name'];
    echo $password=$_POST['password'];
    echo $emailid=$_POST['email'];
    
    $query = "insert into user(name,password,email) values ('$name','$pass','$emailid')";
    if(mysql_query($query)){
        echo "<h3> you have registered successfully!!</h3>";
    }
}
?>
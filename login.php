<?php
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'form');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$s = "select * from register where email = '$email' && password = '$password'";
	$result = mysqli_query($con,$s);

	$num = mysqli_num_rows($result);
	if($num==1){
		$_SESSION['email'] = $email;
		echo '<script>window.location="index.html"</script>';
		
	}else{
		echo '<script>alert("Login Failed")</script>';
		
	}

?>
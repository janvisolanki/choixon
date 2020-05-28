<?php
session_start();
 
  $con = mysqli_connect('localhost','root','');
  mysqli_select_db($con,'form');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$s = "select * from register where email = '$email'";
  $result = mysqli_query($con,$s);
  $num = mysqli_num_rows($result);
  if($num==1){
    echo "username already exists";
  }
  else if($password!=$repassword){
    echo "password does not match";
  }
  else if( empty($fname) || empty($lname) || empty($email) || empty($password) || empty($repassword) ){
    echo "all fields are required";
  }
  else{
    $reg = "insert into register(fname,lname,email,password,repassword) values ('$fname','$lname','$email','$password','$repassword')";
    mysqli_query($con,$reg);
    echo "Registration successful";
  }
?>
<?php

  include 'connect.php';
 
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="Select * from signup where name='$name' and password='$password';";
  try{
    if($con->query($sql)==true){
      echo "Login succesfull";
      header("location:home.html");
      $insert=true;
    }
  }
  catch(Exception $e){
     echo "issue";
  }
  

?>

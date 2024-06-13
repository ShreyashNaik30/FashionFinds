<?php
$succes=0;
$user=0;



// if($_SERVER['REQUEST_METHOD']=='POST'){
  include ('connect.php');
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];



  $sql="insert into signup(name,email,password) values('$name','$email','$password');";

try{
  if($con->query($sql)==true){
    echo "signup succesfull";
    header("location:home.html");
    $insert=true;
  }
}
catch(Exception $e){
   echo "issue";
}



//   $result=mysqli_query($con,$sql);
//   if($result){
//   $num=mysqli_num_rows($result);
//   if($num>0){
//     // echo "user already exist";
//     $user=1;
//   }else{
//     $sql="INSERT INTO `registration` (name,email,password)
//     VALUES('$name','$email','$password')";

//     // $result=mysqli_query($con,$sql);
//     if($result){
//          header("location:home.html");
//     $succes=1;
//     }else{
//     die(mysqli_error($con));
//     }
//   }
// }

?>





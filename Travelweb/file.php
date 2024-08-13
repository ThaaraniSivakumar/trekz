<?php
$insertconf=false;
if(isset($_POST['name'])){
    $server="localhost";
    $user="root";
    $password="";
    $dbname="trekz";
    $con=mysqli_connect($server,$user,$password,$dbname);
if(!$con){
    die("Connection with database not hapenning due to ".mysqli_connect_error());
}
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$message=$_POST['message'];
$sql_query="INSERT INTO `contact`(`name`,`mobile`,`email`,`age`,`gender`,`message`)VALUES('$name','$mobile','$email','$age','$gender','$message')";
if($con->query($sql_query)==true){
    $insertconf=true;
}else {
    echo " ERROR: $sql_query  <br> $con->error";
}
$con->close();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cont-top">
   <div class="container">
    <h1 class="heading">Welcome to TREKZ</h1>
    <p class="para-lo">Enter your details</p>
  
    <form action="index.html" method="post">
      <input type="text" name="name" id="name" placeholder="Enter your name." required style="border:none;"> <br>
      <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" style="border:none;" requined><br>
      <input type="email" name="email" id="email" placeholder="Email Id" style="border:none;" required ><br>
      <div class="in-co">
        <input type="text" name="age" id="age" placeholder="Enter Age" style="border:none;"><br>
      <input type="text" name="gender" id="gender" placeholder="Enter Gender" style="border:none;"><br>
      </div> 
      <textarea placeholder="Enter your thoughts" name="message" id="message" cols="22" rows="2" style="border:none;"></textarea><br>
<div class="in-co">
  <button type="submit" id="submitBtn" style="font-size: 20px;background-color: #d38a30;border: none;color: black;" >Submit</button>
  <button type="reset" id="restbtn" style="font-size: 20px;background-color: #d38a30;border: none;color: black;" >Reset</button>
  
</div>
    </form>
   </div>
   </div>
</body>
</html>
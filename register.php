<?php

 include('includes/database_connection.php');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($db_connection,$_POST['name']);
   $email = mysqli_real_escape_string($db_connection,$_POST['email']);
   $pass = mysqli_real_escape_string($db_connection,md5($_POST['password']));
   $cpass = mysqli_real_escape_string($db_connection, md5($_POST['cpassword']));
   

   $query="SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'";
   $select_users = mysqli_query($db_connection,$query ) or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($db_connection, "INSERT INTO `user`(name, email, password) VALUES('$name', '$email', '$cpass')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
   <title>register</title>

<style>
.form-container{
   min-height: 40px;
   background-color:white;
   display: flex;
   margin:30px;
   align-items: center;
   justify-content: center;
   padding-top:35px;
}

.form-container form{
   padding:1rem;
   width: 27rem;
   height:40rem;
   border-radius: .5rem;
   box-shadow:grey;
   border:1px solid black;
   background-color:white;
   text-align: center;
}

.form-container form h4{
   font-size: 2rem;
   margin-bottom: 1rem;
   text-transform: uppercase;
   color:black;
}

.form-container form .box{
   width: 70%;
   border-radius: 1rem;
   background-color:white;
   padding:.5rem 1rem;
   font-size: 1.8rem;
   color:black;
   border:1px solid black;
   margin:1rem 0;
}
.form-container form .box1{
   width: 50%;
   border-radius: 1rem;
   background-color:crimson;
   padding:.5rem 1rem;
   font-size: 1.8rem;
   color:black;
   border:1px solid black;
   margin:1rem 0;
}
.form-container form .box1:hover{
   background-color:white;
  
}
.form-container form p{
   padding-top: 0rem;
   font-size: 1.5rem;
   color:black;
}

.form-container form p a{
   color:crimson;
}

.form-container form p a:hover{
   text-decoration: underline;
}
</style> 
</head>
<body>


   
<div class="form-container">

   <form action="" method="post">
      <h4>register</h4>
      <input type="text" name="name" placeholder="Enter name" required class="box">
      <input type="email" name="email" placeholder="Email" required class="box">
      <input type="password" name="password" placeholder="Password" required class="box">
      <input type="password" name="cpassword" placeholder="Confirm password" required class="box">
   
      <input type="submit" name="submit" value="register now" class="box1">
      <?php
       if(isset($message)){
       foreach($message as $message){
      echo '
       <div class="message">
         <span>'.$message.'</span>
       </div>
      ';
   }
}
?>
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>
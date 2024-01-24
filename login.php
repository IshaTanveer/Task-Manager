<?php

 include('includes/database_connection.php');
session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $pass = md5($_POST['password']);

   $select_users = mysqli_query($db_connection, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

   
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:index.php');

     

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">

   <title>login</title>
<style>
.form-container{
   min-height: 10px;
   background-color:white;
   display: flex;
   align-items: center;
   justify-content: center;
   padding-top:200px;
}

.form-container form{
   padding-top:0.5rem;
   width: 25rem;
   height:25rem;
   border-radius: .5rem;
   box-shadow:grey;
   border:1px solid black;
   background-color:white;
   text-align: center;
}

.form-container form h3{
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
   font-size: 1.5rem;
   color:black;
   border:1px solid black;
   margin:1rem 0;
}
.form-container form .box1{
   width: 40%;
   border-radius: 1rem;
   background-color:crimson;
   padding:.5rem 1rem;
   font-size: 1.5rem;
   color:black;
   border:1px solid black;
   margin:1rem 0;
}
.form-container form .box1:hover{
   background-color:white;
  
}
.form-container form p{
   padding-top: 0rem;
   font-size: 1rem;
   color:black;
}

.form-container form p a{
   color:crimson;
}

.form-container form p a:hover{
   text-decoration: underline;
}

 .btn {
	text-decoration:none;
        align-items: center;
	color:black;
	margin-top:3px;
	background-color:crimson;
	padding: 10px 20px;
	display:block;
}
.btn:hover {
    background-color:pink;
    }

</style> 

</head>
<body>


   
<div class="form-container">
   <div class="box-container">
   <form action="" method="post">
      <h3>login</h3>
      <input type="email" name="email" placeholder="Email" required class="box">
      <input type="password" name="password" placeholder="Password" required class="box">
      <?php
    if(isset($message)){
      foreach($message as $message){
      echo '
      <div class="msg">
      <span>'.$message.'</span>
      </div>
      ';
   }
  }
  ?>
      <input type="submit" name="submit" value="login now" class="box1">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>
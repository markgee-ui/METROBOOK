<?php 
include 'config.php';

session_start();
  if(isset($_POST['submit']));{
      $name = mysqli_real_escape_string($conn ,$_POST['name']);
      $email = mysqli_real_escape_string($conn ,$_POST['email']);
      $password = md5($_POST['password']);
      $cpassword =  md5($_POST['cpassword']);
      $user_type = $_POST['user_type'];

      $select = "select * from user_form where email = '$email' && password = '$password'" ;

      $result = mysqli_query($conn,$select);

      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row[ 'name'];
            header('location:admin_page.php');
        }elseif ($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row[ 'name'];
            header('location:user_page.php');
        }
      }else{
        $error[] = 'incorrect email or password!' ;
      }

  };
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
   <div class="form-container">
    <form action="index.php" method="post">
        <h3>login</h3>
        <?php
             if(isset($error)){
                foreach( $error as $error){
                    echo '<span class ="error-msg">'.$error.'</span>';
                };
             };
        ?>
        <input type="text" name="name" required placeholder="enter your name" >
        <input type="text" name="email" required placeholder="enter your email" >
        <input type="text" name="paswword" required placeholder="enter your password" >
        <input type="submit" name="submit" value="login"class="form-btn" >
        <p>don't have an account?<a href="signup_form.php">signup</a></p>
    </form>
   </div>
</body>
</html>
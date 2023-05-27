<?php 
include 'config.php';
  if(isset($_POST['submit']));{
      $name = mysqli_real_escape_string($conn ,$_POST['name']);
      $email = mysqli_real_escape_string($conn ,$_POST['email']);
      $password = md5($_POST['password']);
      $cpassword =  md5($_POST['cpassword']);
      $user_type = $_POST['user_type'];

      $select = "select * from user_form where email = '$email' && password = '$password'" ;

      $result = mysqli_query($conn,$select);

      if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist';      
      }else{
        if($password != $cpassword){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO user_form(name,email,password,user_type) VALUES('$name','$email','$password','$user_type')";
            mysqli_query($conn,$insert);
            header('location:login_form.php');
        }
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
    <form action="login_form.php" method="post">
        <h3>sign up</h3>
  <?php
             if(isset($error)){
                foreach($error as $error){
                    echo '<span class ="error-msg">'.$error.'</span>';
                };
             };
      //  ?>
        <input type="text" name="name" required placeholder="enter your name" >
        <input type="text" name="email" required placeholder="enter your email" >
        <input type="text" name="paswword" required placeholder="enter your password" >
        <input type="text" name="cpassword" required placeholder="enter your cpassword" >
        <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="signup"class="form-btn">
        <p>already have an account?<a href="login_form.php">login now</a></p>
    </form>
   </div>
</body>
</html>
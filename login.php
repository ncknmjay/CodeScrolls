<?php 
   session_start();
   if (isset($_SESSION["logged_in"])){
    header("location: Books.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login-signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>

<body>
    <div class="loginContainer">
        <div class=" box form-box">

        <?php 
             
             include("config.php");
             if(isset($_POST['submit'])){
               $userName = mysqli_real_escape_string($con,$_POST['userName']);
               $userPassword = mysqli_real_escape_string($con,$_POST['userPassword']);

               $result = mysqli_query($con,"SELECT * FROM readers WHERE userName='$userName' AND userPassword='$userPassword' ") or die("Select Error");
               $row = mysqli_fetch_assoc($result);

               if(is_array($row) && !empty($row)){
                   $_SESSION['valid'] = $row['userEmail'];
                   $_SESSION['userName'] = $row['userName'];
                   $_SESSION['id'] = $row['id'];

                   $_SESSION['logged_in'] = true;

               }else{
                   echo "<div class='message'>
                     <p>Wrong Username or Password</p>
                      </div> <br>";
                  echo "<a href='login.php'><button class='btn'>Go Back</button>";
        
               }
               if(isset($_SESSION['valid'])){
                   header('location:Books.php');
               }
             }else{

           
           ?>

            <header>Login</header>
            <form action="" method="post" class="loginForm">
                <div class="field input">
                    <label for="userName">Username</label>
                    <input type="text" name="userName" id="userName" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="userPassword">Password</label>
                    <input type="password" name="userPassword" id="userPassword"  autocomplete="off"required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php" class="href">Sign up now</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
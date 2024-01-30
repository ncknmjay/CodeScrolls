<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Register</title>
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
            $userName = $_POST['userName'];
            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT userEmail FROM readers WHERE userEmail='$userEmail'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO readers(userName,userEmail,userPassword) VALUES('$userName','$userEmail','$userPassword')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

            <header>Sign up</header>
            <form action="" method="post" class="loginForm">
                <div class="field input">
                    <label for="userName">Username</label>
                    <input type="text" name="userName" id="userName" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="userEmail">Email</label>
                    <input type="email" name="userEmail" id="userEmail" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="userPassword">Password</label>
                    <input type="password" name="userPassword" id="userPassword" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Sign up" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php" class="href">Sign in</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
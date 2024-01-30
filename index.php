<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>codeScrolls</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    
</head>

<body>
    <!-- HEADER -->
    <header class="header1st">
        <h2 class="logo">
            <span class="novel"><"</span><span class="nest">"></span>
        </h2>
        <nav class="navbar"> 
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutUs.php">About us</a></li>
                
            </ul>
        </nav>
        <a class="profile" href="<?php echo isset($_SESSION['logged_in']) ? 'Books.php' : 'login.php'; ?>">
        <button><?php echo isset($_SESSION['logged_in']) ? 'TextBooks' : 'Login'; ?></button></a>

    </header>
    <!-- HOME -->
    <section class="home" id="home">
        <div class="container">
            <div class="content">
                <h3>Welcome to the<br><span>'codeScrolls'</span></h3>
                <p>"Welcome to our online sanctuary for computer science enthusiasts! Dive into a world of boundless knowledge where students can access an array of textbooks tailored specifically for aspiring minds in the realm of computer science."</p>
            </div>
            <div class="Image">
                <img src="Pictures/FP.png" class="frontPage">
            </div>
        </div>
    </section>
    
    <script src="script.js"></script>
</body>

</html>
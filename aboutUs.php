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

    <section class="aboutUs" id="aboutUs">
            <div class="containerAbout">
                <div class="contentAbout">
                    <h3><span>About </span>us</h3>
                    <p><span>'codeScrolls'</span>:Your free online hub for diverse computer science books, eliminating library visits. Explore programming, AI, cybersecurity, and more from anywhere. Engage in interactive reading and discussions with our community. Easy navigation makes learning effortless. Join us in the world of computer science!"</p>
                </div>
                <div class="Image">
                    <img src="Pictures/ABOUT.png" class="aboutPage">
                </div>
            </div>
        </section>

</body>
</html>
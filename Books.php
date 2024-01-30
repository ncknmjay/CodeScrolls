<?php 
   session_start();
   if (!isset($_SESSION["logged_in"])){
    header("location: login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles/books.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    
</head>
<body>
    <header class="header1st">
        <h2 class="logo">
            <span class="novel"><"</span><span class="nest">"></span>
        </h2>
        <nav class="navbar"> 
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
        <a class="Log out" href="logout.php"><button>Log out</button></a>        
    </header>

    <section class="books" id="books">
        <h1 class="heading"><span>TextBooks</span></h1>
            <div class="wrapper">

                <div class="bookContainer">
                    <img src="Pictures/absolute c++.png" alt="">
                    <div class="description">
                        <h2>Absolute C++</h2>
                        <p>Absolute C++ is a comprehensive introduction to the C++ programming language. The text is organized around the specific use of C++, providing programmers with an opportunity to master the language completely.</p>
                        <a href="https://drive.google.com/file/d/1eqsnkjMLt9-aq_GSj0VGnUoH4Lktl_3r/view">Read</a>
                    </div>
                </div>

                <div class="bookContainer">
                    <img src="Pictures/c++ basics.png" alt="">
                    <div class="description">
                        <h2>C++ Basics</h2>
                        <p>"C++ Basics" is a beginner's guide introducing key concepts like variables, control structures, functions, classes, and object-oriented programming in a clear and concise manner. Ideal for those new to C++, it provides a strong foundational understanding.</p>
                        <a href="https://drive.google.com/file/d/1yIBjNI6NvN8GeYDWVtaBNUhYAE1Hgx4B/view">Read</a>
                    </div>
                </div>

                <div class="bookContainer">
                    <img src="Pictures/c++ prog.png" alt="">
                    <div class="description">
                        <h2>C++ Programming</h2>
                        <p>Explore 'C++ Programming,' a comprehensive guide covering everything from basic syntax to advanced topics like data structures and algorithms. Ideal for beginners and experienced programmers alike, this book offers practical insights to master C++ for diverse software development needs.</p>
                        <a href="https://drive.google.com/file/d/1gIWemDRQhoBd6aNJEFDHs6V236mhu3D0/view">Read</a>
                    </div>
                </div>

                <div class="bookContainer">
                    <img src="Pictures/introduction1.png" alt="">
                    <div class="description">
                        <h2>Introduction to Programming</h2>
                        <p>An 'Introduction to Programming' book provides beginners with essential concepts like variables, loops, conditionals, and algorithms. It's a foundational guide offering clear explanations and practical examples to kickstart programming skills.</p>
                        <a href="https://drive.google.com/file/d/1UlZTvs0s9lsdk4kfRh5oUr9Irl1k8twA/view">Read</a>
                    </div>
                </div>

            </div>

    </section>

</body>
</html>
<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Bean Bliss</title>
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>

    <header>
        <div class="logo">
            <img src="logo.png" alt="Bean Bliss Logo">
        </div>
        <h1>About Bean Bliss</h1>
        <hr>
        <p>Your journey into the finest coffee beans starts here</p>
    </header>

    <div class="topnav">
        <nav>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="location.php">Location</a></li>
                <li><a href="merchant.php">Merchant</a></li>
                <li><a href="aboutus.php">About us</a></li>
                                <li><a href="checkout.php">🛒 View Cart</a></li>

                <li style="margin-left: auto;">
                    <a href="log_reg.php" style="color: red;">Logout</a>
                </li>
            </ul>
        </nav>
        
    </div>

    <hr>

    <div class="container">
        <section class="about-us">
            <h2>Who We Are</h2>
            <p>At Bean Bliss, we are more than just a coffee brand. We are a community of coffee lovers who believe that every cup of coffee should be an unforgettable experience. From carefully sourcing the finest beans to roasting them with precision, we are dedicated to crafting the perfect blend for your daily indulgence.</p>
            <p>Founded with a passion for quality and sustainability, Bean Bliss has grown from a small startup to a thriving business, connecting coffee aficionados from around the world.</p>
        </section>

        <section class="about-image">
            <video width="640" height="360" controls autoplay>
                <source src="Our Coffee Journey.mp4" type="video/mp4">
            </video>
        </section>
        
        

        <section class="mission-values">
            <h2>Our Mission & Values</h2>
            <p>Our mission is simple: to deliver premium, ethically sourced coffee beans that elevate every coffee moment. We believe in sustainability, fair trade, and empowering the farmers who grow the coffee we love.</p>
            <p>At Bean Bliss, quality comes first. We meticulously select our beans from regions known for their rich coffee-growing traditions. Each batch is roasted to perfection, ensuring you experience the freshest, most flavorful coffee possible.</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Bean Bliss. All Rights Reserved.</p>
    </footer>

</body>
</html>

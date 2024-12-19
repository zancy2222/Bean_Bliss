<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant - Bean Bliss</title>
    <link rel="stylesheet" href="merchant.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header img {
            width: 120px;
            height: auto;
        }

        header h1 {
            font-size: 2.5em;
            color: #5E3023;
            margin: 15px 0 5px;
        }

        header p {
            color: #666;
            font-size: 1.1em;
        }

        /* Navigation Bar */
        .topnav {
            background-color: #5E3023;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .topnav nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .topnav nav ul li {
            margin: 0 15px;
        }

        .topnav nav ul li a {
            color: white;
            font-size: 16px;
            text-decoration: none;
            padding: 8px 15px;
            transition: background-color 0.3s ease;
        }

        .topnav nav ul li a:hover {
            background-color: #462106;
            border-radius: 5px;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .welcome-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .welcome-section img {
            object-fit: cover;
            border-radius: 10px;
            width: 300px;
            height: 400px;
        }

        .welcome-section p {
            flex: 1;
            font-size: 1.2em;
            line-height: 1.8;
            color: #5E3023;
            text-align: left;
        }

        .welcome-section a {
            background-color: #5E3023;
            color: white;
            padding: 10px 20px;
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .welcome-section a:hover {
            background-color: #462106;
        }

        /* Coffee Beans Section */
        .coffee-beans-section {
            background-color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        .coffee-beans-section h3 {
            font-size: 2.2em;
            color: #5E3023;
            margin-bottom: 30px;
        }

        .coffee-beans {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .coffee-bean {
            text-align: center;
            max-width: 200px;
        }

        .coffee-bean img {
            border-radius: 10px;
            width: 100%;
            height: auto;
        }

        .coffee-bean h4 {
            margin-top: 10px;
            font-size: 1.3em;
            color: #5E3023;
        }

        .coffee-bean p {
            font-size: 1em;
            color: #666;
            margin-top: 5px;
        }

        /* Footer */
        footer {
            background-color: #5E3023;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
            font-size: 0.9em;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <img src="logo.png" alt="Bean Bliss Logo">
        <h1>Partner with Bean Bliss</h1>
        <p>Grow your business with our premium coffee beans</p>
    </header>

    <!-- Navigation Bar -->
    <div class="topnav">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products2.php">Products</a></li>
            <li><a href="location2.php">Location</a></li>
            <li><a href="merchant2.php">Merchant</a></li>
            <li><a href="aboutus2.php">About Us</a></li>
            <li><a href="" onclick="alert('Please Login first'); return false;">🛒 View Cart</a></li>
           <li><a href="log_reg.php" style="color: white;">Log In</a></li>
        </ul>
    </nav>
</div>


    <!-- Welcome Section -->
    <div class="container">
        <section class="welcome-section">
            <img src="coffee-cup.jpg" alt="Coffee Cup">
            <p>
                Welcome to Bean Bliss, where we believe that the finest moments start with the finest beans. 
                At Bean Bliss, we are passionate about delivering premium-quality beans that elevate your culinary 
                experiences, whether it's a cup of coffee that awakens your senses or a meal enriched with the freshest, 
                most flavorful beans. Let us be part of your daily bliss!
                <br>
                <a href="#">Learn More</a>
            </p>
        </section>
    </div>

    <!-- Coffee Beans Section -->
    <section class="coffee-beans-section">
        <h3>Our Coffee Beans</h3>
        <div class="coffee-beans">
            <div class="coffee-bean">
                <img src="arabica.jpg" alt="Arabica Beans">
                <h4>Arabica</h4>
                <p>Most traded coffee due to its flavour</p>
            </div>
            <div class="coffee-bean">
                <img src="robusta.jpg" alt="Robusta Beans">
                <h4>Robusta</h4>
                <p>Best for instant coffee</p>
            </div>
            <div class="coffee-bean">
                <img src="liberica.jpg" alt="Liberica Beans">
                <h4>Liberica</h4>
                <p>Known as Kapeng Barako</p>
            </div>
            <div class="coffee-bean">
                <img src="excelsa.jpg" alt="Excelsa Beans">
                <h4>Excelsa</h4>
                <p>Blended with Robusta & Liberica</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Bean Bliss. All Rights Reserved.</p>
    </footer>
</body>
</html>

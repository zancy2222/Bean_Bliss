 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location - Bean Bliss</title>
    <link rel="stylesheet" href="Location.css">
    <style>
        /* Footer */
/* Footer */
footer {
    padding: 20px;
    text-align: center;
    background-color: #5E3023;
    color: white;
    margin-top: 40px;
}
   /* General Container */
   .container {
        padding: 40px;
        margin: 30px auto;
        max-width: 1200px;
        background-color: #fff;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        font-family: 'Arial', sans-serif;
    }

    /* Section Spacing */
    section {
        margin-bottom: 40px;
    }

    /* Location Info Section */
    .location-info h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #34495e;
        margin-bottom: 20px;
    }

    .location-info p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #7f8c8d;
    }

    /* Map Container */
    .map-container h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #34495e;
        margin-bottom: 20px;
    }

    .map-container iframe {
        width: 100%;
        height: 400px;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Contact Info Section */
    .contact-info h3 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #34495e;
        margin-bottom: 15px;
    }

    .contact-info p {
        font-size: 1.1rem;
        color: #7f8c8d;
        line-height: 1.5;
    }

    .contact-info strong {
        color: #2c3e50;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
            margin: 20px;
        }

        .map-container iframe {
            height: 300px;
        }
    }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="logo.png" alt="Bean Bliss Logo">
        </div>
        <h1><b>Visit Us at Bean Bliss</b></h1>
        <hr>
        <p>Your favorite coffee beans, now in Mandaluyong City</p>
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

    <hr>
    
    <div class="container">
    <section class="location-info">
        <h2>Our Location in Mandaluyong City</h2>
        <p>We're excited to welcome you to our store in Mandaluyong City, where you can explore our wide range of premium coffee beans, blends, and more.</p>
        <p>Drop by to experience the aroma and flavors of Bean Bliss!</p>
    </section>

    <section class="map-container">
        <h2>Find Us on the Map</h2>
        <!-- Embedded Google Map of Mandaluyong City -->
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.1896406412572!2d121.04886803550038!3d14.57944448330601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9389d44ad65%3A0xdbc56c3c3a4c3e87!2sMandaluyong%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1697871924654!5m2!1sen!2sph" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

    <section class="contact-info">
        <h3>Contact Us</h3>
        <p><strong>Address:</strong> 123 Coffee Street, Mandaluyong City, Metro Manila, Philippines</p>
        <p><strong>Phone:</strong> (02) 123-4567</p>
        <p><strong>Email:</strong> contact@beanbliss.com</p>
    </section>
</div>
    <footer>
        <p>&copy; 2024 Bean Bliss. All Rights Reserved.</p>
    </footer>

</body>
</html>

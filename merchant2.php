 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant - Bean Bliss</title>
    <link rel="stylesheet" href="merchant.css">
    <style>
    /* General Container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px;
        background-color: #fafafa;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Section Styling */
    section {
        margin-bottom: 50px;
        text-align: center;
    }

    /* Merchant Info Section */
    .merchant-info h2, .wholesale-opportunities h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .merchant-info p, .wholesale-opportunities p {
        font-size: 1.1rem;
        color: #7f8c8d;
        line-height: 1.7;
        margin: 0 auto;
        max-width: 800px;
    }

    /* Form Styling */
    form {
        margin-top: 30px;
        max-width: 650px;
        margin-left: auto;
        margin-right: auto;
        text-align: left;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 12px;
        margin: 12px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease-in-out;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        border-color: #5E3023;
        box-shadow: 0 0 5px rgba(94, 48, 35, 0.4);
    }

    input[type="submit"] {
        background-color: #5E3023;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #462106;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        .merchant-info h2,
        .wholesale-opportunities h2 {
            font-size: 2rem;
        }

        .merchant-info p,
        .wholesale-opportunities p {
            font-size: 1rem;
        }

        form {
            padding: 20px;
        }

        input[type="submit"] {
            font-size: 1rem;
        }
    }
</style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="logo.png" alt="Bean Bliss Logo">
        </div>
        <h1>Partner with Bean Bliss</h1>
        <hr>
        <p>Grow your business with our premium coffee beans</p>
    </header>



    <!-- Navigation Bar -->
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
    <section class="merchant-info">
        <h2>Become a Bean Bliss Merchant</h2>
        <p>At Bean Bliss, we believe in sharing the joy of premium coffee beans with businesses across the globe. Whether you're a café, restaurant, hotel, or a reseller, we offer wholesale opportunities that allow you to deliver top-quality coffee to your customers.</p>
        <p>Our dedication to quality and sustainability makes us the perfect partner for your business. From smooth Arabica to bold Robusta, our coffee beans are carefully sourced from the best growers in the world.</p>
    </section>

    <section class="wholesale-opportunities">
        <h2>Wholesale Opportunities</h2>
        <p>We offer flexible wholesale options tailored to your business needs. Our team is dedicated to providing you with the best service, competitive pricing, and timely deliveries. Join our growing network of merchants and experience the Bean Bliss difference.</p>
    </section>

    <section class="contact-form">
        <h3>Contact Us for Merchant Inquiries</h3>
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="company" placeholder="Your Company Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <input type="submit" value="Send Inquiry">
        </form>
    </section>
</div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Bean Bliss. All Rights Reserved.</p>
    </footer>

</body>
</html>

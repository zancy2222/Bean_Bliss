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
    <title>Products - Bean Bliss</title>
    <link rel="stylesheet" href="products.css">
    <script>
        function addToCart(productName, price, imageUrl) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Check if the item already exists in the cart
            const existingItemIndex = cart.findIndex(item => item.name === productName);
            if (existingItemIndex !== -1) {
                // If item exists, increase the quantity
                cart[existingItemIndex].quantity += 1;
            } else {
                // If item does not exist, add it with quantity 1 and image
                cart.push({
                    name: productName,
                    price: price,
                    quantity: 1,
                    image: imageUrl
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${productName} has been added to your cart!`);
        }
    </script>
    <style>

/* Modal Styling */
.modal {
    display: none;
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 60%;
    margin: 10% auto;
    overflow: hidden;
}

.modal-header {
    display: flex;
    align-items: center;
    gap: 15px;
}

.modal-header img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
}

.close {
    color: #aaa;
    font-size: 30px;
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer;
}

.close:hover {
    color: #000;
}

/* Modal Content */
.modal-content h2 {
    font-size: 1.5em;
    margin-top: 0;
}

.modal-content p {
    font-size: 1em;
    color: #333;
}

/* Responsive Design */
@media (max-width: 768px) {
    .modal-content {
        width: 80%;
    }

    .products-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 480px) {
    .products-grid {
        grid-template-columns: 1fr;
    }
}
</style>
</head>

<body>


    <header>
        <div class="logo">
            <img src="logo.png" alt="Bean Bliss Logo">
        </div>
        <h1>Our Products</h1>
        <hr>
        <p>Discover the finest coffee beans, food items, and beverages</p>
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

                <li style="">
                    <a href="log_reg.php" style="color: red;">Logout</a>
                </li>
            </ul>
        </nav>

    </div>
    <hr>



    <div class="container">
    <!-- Beans Section -->
    <h2>Beans</h2>
    <div class="products-grid">
        <div class="product-card">
            <img src="arabica.jpg" alt="Arabica Beans">
            <div class="product-info">
                <h3>Arabica Beans</h3>
                <p class="price">₱900</p>
                <button onclick="addToCart('Arabica Beans', 900, 'arabica.jpg')">Add to Cart</button>
                <button onclick="openModal('Arabica Beans', '₱900', 'Arabica beans are grown at high altitudes and are known for their smooth, complex flavors. Ingredients: Arabica beans, water.', 'arabica.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="excelsa.jpg" alt="Excelsa Beans">
            <div class="product-info">
                <h3>Excelsa Beans</h3>
                <p class="price">₱950</p>
                <button onclick="addToCart('Excelsa Beans', 950, 'excelsa.jpg')">Add to Cart</button>
                <button onclick="openModal('Excelsa Beans', '₱950', 'Excelsa beans are known for their fruity, tangy flavors. Ingredients: Excelsa beans, water.', 'excelsa.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="liberica.jpg" alt="Liberica Beans">
            <div class="product-info">
                <h3>Liberica Beans</h3>
                <p class="price">₱950</p>
                <button onclick="addToCart('Liberica Beans', 950, 'liberica.jpg')">Add to Cart</button>
                <button onclick="openModal('Liberica Beans', '₱950', 'Liberica beans are large and have a smoky, woody flavor. Ingredients: Liberica beans, water.', 'liberica.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="robusta.jpg" alt="Robusta Beans">
            <div class="product-info">
                <h3>Robusta Beans</h3>
                <p class="price">₱950</p>
                <button onclick="addToCart('Robusta Beans', 950, 'robusta.jpg')">Add to Cart</button>
                <button onclick="openModal('Robusta Beans', '₱950', 'Robusta beans are known for their strong, bitter flavor. Ingredients: Robusta beans, water.', 'robusta.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="blended.jpg" alt="Blended Beans">
            <div class="product-info">
                <h3>Blended Beans</h3>
                <p class="price">₱950</p>
                <button onclick="addToCart('Blended Beans', 950, 'blended.jpg')">Add to Cart</button>
                <button onclick="openModal('Blended Beans', '₱950', 'Blended beans are a mix of different bean varieties, offering a balanced flavor. Ingredients: Various beans, water.', 'blended.jpg')">View Info</button>
            </div>
        </div>
    </div>

    <hr>

    <!-- Food Section -->
    <h2>Food</h2>
    <div class="products-grid">
        <div class="product-card">
            <img src="Chocolate Chip.jpg" alt="Chocolate Chip">
            <div class="product-info">
                <h3>Chocolate Chip</h3>
                <p class="price">₱150 / 6pcs</p>
                <button onclick="addToCart('Chocolate Chip', 150, 'Chocolate Chip.jpg')">Add to Cart</button>
                <button onclick="openModal('Chocolate Chip', '₱150 / 6pcs', 'Chocolate chip cookies with a sweet, rich flavor. Ingredients: Flour, sugar, chocolate chips, butter.', 'Chocolate Chip.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="snickerdoodles.jpg" alt="Snickerdoodles">
            <div class="product-info">
                <h3>Snickerdoodles</h3>
                <p class="price">₱160 / 6pcs</p>
                <button onclick="addToCart('Snickerdoodles', 160, 'snickerdoodles.jpg')">Add to Cart</button>
                <button onclick="openModal('Snickerdoodles', '₱160 / 6pcs', 'Snickerdoodles are cinnamon sugar cookies with a soft texture. Ingredients: Flour, sugar, cinnamon, butter.', 'snickerdoodles.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="macaroons.jpg" alt="Macaroons">
            <div class="product-info">
                <h3>Macaroons</h3>
                <p class="price">₱160 / 6pcs</p>
                <button onclick="addToCart('Macaroons', 160, 'macaroons.jpg')">Add to Cart</button>
                <button onclick="openModal('Macaroons', '₱160 / 6pcs', 'Macaroons are coconut-based treats with a chewy texture. Ingredients: Coconut, sugar, egg whites.', 'macaroons.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="gingersnaps.jpg" alt="Gingersnaps">
            <div class="product-info">
                <h3>Gingersnaps</h3>
                <p class="price">₱150 / 6pcs</p>
                <button onclick="addToCart('Gingersnaps', 150, 'gingersnaps.jpg')">Add to Cart</button>
                <button onclick="openModal('Gingersnaps', '₱150 / 6pcs', 'Gingersnaps have a spicy and crispy flavor. Ingredients: Ginger, molasses, sugar, flour.', 'gingersnaps.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="Whoopie Pies.jpg" alt="Whoopie Pies">
            <div class="product-info">
                <h3>Whoopie Pies</h3>
                <p class="price">₱160 / 6pcs</p>
                <button onclick="addToCart('Whoopie Pies', 160, 'Whoopie Pies.jpg')">Add to Cart</button>
                <button onclick="openModal('Whoopie Pies', '₱160 / 6pcs', 'Whoopie pies are soft cakes with creamy filling. Ingredients: Flour, sugar, butter, marshmallow.', 'Whoopie Pies.jpg')">View Info</button>
            </div>
        </div>
    </div>

    <hr>

    <!-- Coffee To Go Section -->
    <h2>Coffee To Go</h2>
    <div class="products-grid">
        <div class="product-card">
            <img src="Ice Brews.png" alt="Ice Brews">
            <div class="product-info">
                <h3>Ice Brews</h3>
                <p class="price">₱380</p>
                <button onclick="addToCart('Ice Brews', 380, 'Ice Brews.png')">Add to Cart</button>
                <button onclick="openModal('Ice Brews', '₱380', 'Iced coffee brewed to perfection. Ingredients: Coffee, ice, water.', 'Ice Brews.png')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="Ice Brews Hazelnut.jpg" alt="Ice Brews Hazelnut">
            <div class="product-info">
                <h3>Ice Brews Hazelnut</h3>
                <p class="price">₱420</p>
                <button onclick="addToCart('Ice Brews Hazelnut', 420, 'Ice Brews Hazelnut.jpg')">Add to Cart</button>
                <button onclick="openModal('Ice Brews Hazelnut', '₱420', 'Hazelnut-flavored iced coffee with a smooth finish. Ingredients: Coffee, ice, hazelnut syrup.', 'Ice Brews Hazelnut.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="Ice Brews Mocha.jpg" alt="Ice Brews Mocha">
            <div class="product-info">
                <h3>Ice Brews Mocha</h3>
                <p class="price">₱420</p>
                <button onclick="addToCart('Ice Brews Mocha', 420, 'Ice Brews Mocha.jpg')">Add to Cart</button>
                <button onclick="openModal('Ice Brews Mocha', '₱420', 'Iced mocha with chocolate and coffee. Ingredients: Coffee, ice, chocolate syrup, milk.', 'Ice Brews Mocha.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="Ice Brews Macchiato.jpg" alt="Ice Brews Macchiato">
            <div class="product-info">
                <h3>Ice Brews Macchiato</h3>
                <p class="price">₱420</p>
                <button onclick="addToCart('Ice Brews Macchiato', 420, 'Ice Brews Macchiato.jpg')">Add to Cart</button>
                <button onclick="openModal('Ice Brews Macchiato', '₱420', 'Iced macchiato with rich espresso. Ingredients: Espresso, ice, milk.', 'Ice Brews Macchiato.jpg')">View Info</button>
            </div>
        </div>
        <div class="product-card">
            <img src="Boxed Brew Drip Coffee.jpg" alt="Boxed Brew Drip Coffee">
            <div class="product-info">
                <h3>Boxed Brew Drip Coffee</h3>
                <p class="price">₱550</p>
                <button onclick="addToCart('Boxed Brew Drip Coffee', 550, 'Boxed Brew Drip Coffee.jpg')">Add to Cart</button>
                <button onclick="openModal('Boxed Brew Drip Coffee', '₱550', 'Premium drip coffee for a rich flavor. Ingredients: Coffee beans, water.', 'Boxed Brew Drip Coffee.jpg')">View Info</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="productModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-header">
            <img id="modalProductImage" src="" alt="Product Image">
            <h2 id="modalProductName"></h2>
        </div>
        <p><strong>Price:</strong> <span id="modalProductPrice"></span></p>
        <p><strong>Description:</strong> <span id="modalProductDescription"></span></p>
        <p><strong>Ingredients:</strong> <span id="modalProductIngredients"></span></p>
    </div>
</div>


    <footer>
        <p>&copy; 2024 Bean Bliss. All Rights Reserved.</p>
    </footer>
    <script>
 

    function openModal(name, price, description, image) {
        document.getElementById("modalProductName").innerText = name;
        document.getElementById("modalProductPrice").innerText = price;
        document.getElementById("modalProductDescription").innerText = description;
        document.getElementById("modalProductIngredients").innerText = description.split('Ingredients: ')[1];
        document.getElementById("modalProductImage").src = image;
        document.getElementById("productModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("productModal").style.display = "none";
    }
</script>
</body>

</html>
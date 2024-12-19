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
    <title>Checkout - Bean Bliss</title>
    <link rel="stylesheet" href="Checkout.css">
    <style>
        /* Modal Styling (same as you had before) */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            color: #888;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #000;
        }

        .modal-content h2 {
            color: #5E3023;
            margin-bottom: 20px;
        }

        .modal-content label {
            display: block;
            margin: 10px 0 5px;
            font-size: 1em;
            color: #333;
        }

        .modal-content textarea,
        .modal-content select {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .modal-content button {
            width: 100%;
            background-color: #5E3023;
            color: white;
            border: none;
            padding: 10px;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .modal-content button:hover {
            background-color: #462106;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .cart-item div {
            display: flex;
            align-items: center;
        }

        .cart-item button {
            margin: 0 5px;
            padding: 5px 10px;
            background-color: #5E3023;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Bean Bliss Logo">
        </div>
        <h1>Checkout</h1>
        <p>Review your cart and complete your purchase</p>
        <!-- Cart Icon -->
        <div id="cart-container">
            <a href="checkout.php" style="text-decoration: none; color: white;">
                <span id="cart-icon" style="font-size: 24px;">🛒</span>
                <span id="cart-count" style="background-color: red; color: white; font-size: 14px; border-radius: 50%; padding: 2px 6px; position: relative; top: -10px; left: -10px;">0</span>
            </a>
        </div>
    </header>

    <div class="container">
        <h2>Your Cart</h2>
        <div class="cart-items" id="cart-items"></div>
        <div class="total" id="total">Total: ₱0</div>
        <button class="checkout-btn" onclick="checkout()">Checkout</button>
    </div>

    <footer>
        <p>&copy; 2024 Bean Bliss. All Rights Reserved.</p>
    </footer>

    <!-- Address Confirmation Modal -->
    <div id="address-confirmation-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Confirm Your Address</h2>
            <form id="address-form">
                <label for="address">Delivery Address:</label>
                <textarea id="address" name="address" required></textarea>

                <label for="payment-method">Payment Method:</label>
                <select id="payment-method" name="payment-method" required>
                    <option disabled value="">Please select</option>
                    <option value="COD">Cash on Delivery</option>
                </select>

                <button type="button" onclick="submitOrder()">Confirm Order</button>
            </form>
        </div>
    </div>

    <script>
        // Add to Cart Functionality
        function addToCart(productName, price) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existingItemIndex = cart.findIndex(item => item.name === productName);
            if (existingItemIndex !== -1) {
                cart[existingItemIndex].quantity += 1;
            } else {
                cart.push({
                    name: productName,
                    price: price,
                    quantity: 1
                });
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${productName} has been added to your cart!`);
        }

        // Load Cart Items
        function loadCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsContainer = document.getElementById('cart-items');
    const totalElement = document.getElementById('total');
    const cartCount = document.getElementById('cart-count');
    let total = 0;

    cartItemsContainer.innerHTML = '';

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        totalElement.textContent = 'Total: ₱0';
        cartCount.textContent = '0';
        return;
    }

    cart.forEach((item, index) => {
        total += item.price * item.quantity;
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <div>
                <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px; margin-right: 10px;">
                <span>${item.name}</span>
                <span>₱${item.price}</span>
            </div>
            <div>
                <button onclick="updateQuantity(${index}, -1)">-</button>
                <span>${item.quantity}</span>
                <button onclick="updateQuantity(${index}, 1)">+</button>
            </div>
            <div>
                <span>₱${item.price * item.quantity}</span>
            </div>
        `;
        cartItemsContainer.appendChild(cartItem);
    });

    totalElement.textContent = `Total: ₱${total}`;
    cartCount.textContent = cart.length;
}

        // Update Quantity
        function updateQuantity(index, change) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart[index]) {
                cart[index].quantity += change;
                if (cart[index].quantity <= 0) {
                    cart.splice(index, 1);
                }
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }

        // Checkout Functionality (Trigger Pop-up)
        function checkout() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            if (cart.length === 0) {
                alert('Your cart is empty. Add some products before checking out!');
                return;
            }

            // Show the modal
            document.getElementById('address-confirmation-modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('address-confirmation-modal').style.display = 'none';
        }

        // Submit the order details to the server (via POST)
        function submitOrder() {
            const address = document.getElementById('address').value;
            const paymentMethod = document.getElementById('payment-method').value;

            if (!address || !paymentMethod) {
                alert('Please fill out all fields!');
                return;
            }

            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const totalPrice = cart.reduce((total, item) => total + item.price * item.quantity, 0);

            // Send data to the backend (save order to database)
            const formData = new FormData();
            formData.append('address', address);
            formData.append('payment_method', paymentMethod);
            formData.append('total_price', totalPrice);

            fetch('save_order.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data); // You can handle the response here

                    // Assuming the response is the URL of the generated PDF
                    const pdfUrl = data.trim(); // Get the URL of the generated PDF file

                    // Trigger the download by redirecting the user to the PDF URL
                    window.location.href = pdfUrl; // This will prompt the browser to download the PDF

                    alert('Thank you for your purchase! Your order has been placed.');
                    localStorage.removeItem('cart');
                    closeModal();
                    loadCart(); // Update the cart display
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                });
        }



        // Load cart when the page loads
        window.onload = loadCart;
    </script>
</body>

</html>
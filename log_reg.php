<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body style="background: #d7ccc8; font-family: 'Roboto', sans-serif;">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="width: 100%; max-width: 500px; border-radius: 15px; background-color: #f5f5f5;">
            <!-- Toggle Buttons -->
            <div class="card-header bg-white border-0 text-center">
                <button class="btn me-2" id="loginBtn" style="background-color: #5E3023; color: #fff;" onclick="showForm('login')">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
                <button class="btn" id="registerBtn" style="background-color: #e0d9d2; color: #5E3023;" onclick="showForm('register')">
                    <i class="fas fa-user-plus"></i> Register
                </button>
            </div>

            <!-- Forms -->
            <div class="card-body">
                <!-- Login Form -->
                <form id="loginForm" action="login.php" method="POST">
                    <h4 class="text-center mb-4" style="color: #5E3023;">Login</h4>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn w-100" style="background-color: #5E3023; color: #fff;">Login</button>
                    </div>
                </form>

                <!-- Register Form -->
                <form id="registerForm" action="register.php" method="POST" style="display: none;">
                    <h4 class="text-center mb-4" style="color: #5E3023;">Register</h4>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="middleName" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" name="middle_name" placeholder="Middle Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Full Address</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Full Address" rows="2" required></textarea>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <label for="zip" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" id="zip" name="zip_code" placeholder="Zip Code" required>
                        </div>
                        <div class="col-md-6">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col-md-6">
                            <label for="region" class="form-label">Region</label>
                            <input type="text" class="form-control" id="region" name="region" placeholder="Region" required>
                        </div>
                        <div class="col-md-6">
                            <label for="barangay" class="form-label">Barangay</label>
                            <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Barangay" required>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn w-100" style="background-color: #5E3023; color: #fff;">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript for Form Toggle -->
    <script>
        function showForm(form) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const loginBtn = document.getElementById('loginBtn');
            const registerBtn = document.getElementById('registerBtn');

            if (form === 'login') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
                loginBtn.style.backgroundColor = '#5E3023';
                loginBtn.style.color = '#fff';
                registerBtn.style.backgroundColor = '#e0d9d2';
                registerBtn.style.color = '#5E3023';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
                registerBtn.style.backgroundColor = '#5E3023';
                registerBtn.style.color = '#fff';
                loginBtn.style.backgroundColor = '#e0d9d2';
                loginBtn.style.color = '#5E3023';
            }
        }
    </script>
</body>
</html>

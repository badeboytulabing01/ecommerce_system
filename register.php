<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="img/logo.png"></a>
            <span>Pawfect Shoppe</span>
        </div>
    </header>
    <main>
        <div class="signup-container">
            <h2>Sign Up</h2>
            <form id="signupForm" class="signup-form" onsubmit="handleSignUp(event)">
               <div class="form-group">
                    <div>
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div>
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div>
                        <label for="contact-number">Contact Number</label>
                        <input type="text" id="contact-number" name="contact-number" required>
                    </div>
                </div>
                
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
                
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
                
                <div class="form-group">
                    <div>
                        <label for="password">Password</label>
                        <div class="password-container">
                            <input type="password" id="password" name="password" required>
                            <span class="toggle-password">👁️</span>
                        </div>
                    </div>
                    <div>
                        <label for="confirm-password">Confirm Password</label>
                        <div class="password-container">
                            <input type="password" id="confirm-password" name="confirm-password" required>
                            <span class="toggle-password">👁️</span>
                        </div>
                    </div>
                </div>
                
                <button type="submit">Sign up</button>
            </form>
            <p>Already have an account? <a href="login.php">Log in here</a></p>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <p>Questions? We're here 24 hours a day:</p>
            <p>Shop.co © 2000-2023, All Rights Reserved</p>
            <div class="footer-links">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <p>Signed up successfully!</p>
            <button onclick="redirectToIndex()">Go to Home</button>
        </div>
    </div>
    <script>
        function handleSignUp(event) {
            event.preventDefault();
            document.getElementById('popup').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function redirectToIndex() {
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>

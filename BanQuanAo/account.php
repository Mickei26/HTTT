<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán quần áo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="assets/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="menuItem">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="assets/cart.png" width="30px"></a>
            <img src="assets/menu.png" class="menu-icon" onclick="menuOpen()">

        </div>
    </div>

    <!-- ACCOUNT -->
    <div class="account">
        <div class="container">
            <div class="row">
                <div class="col-2">'
                    <img src="assets/image1.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>

                        <form action="includes/functions/login.php" method="post" id="loginForm">
                            <input type="text" placeholder="Username" required>
                            <input type="password" placeholder="Password" required>
                            <button type="submit" name="login" class="btn">Login</button>
                            <!-- <input type="submit" name="login" value="Submit"> -->
                            <a href="">Forgot password?</a>
                        </form>

                        <form id="regForm">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Join Our Family</h3>
                    <p>Download our App for Android and IOS</p>
                    <div class="app-logo">
                        <img src="assets/play-store.png" alt="">
                        <img src="assets/app-store.png" alt="">

                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="assets/logo-white.png">
                    <p>Our goal is to sustainably make the pleasure and benefits of sports accessible to the many</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog</li>
                        <li>Return Policy</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        var menuItem = document.getElementById('menuItem');

        menuItem.style.maxHeight = '0px';

        function menuOpen() {
            if (menuItem.style.maxHeight == '0px') {
                menuItem.style.maxHeight = '200px'
            } else {
                menuItem.style.maxHeight = '0px'
            }
        }

        // LOGIN/REG FORM //
        var loginForm = document.getElementById('loginForm')
        var regForm = document.getElementById('regForm')
        var indicator = document.getElementById('indicator')

        function register() {
            regForm.style.transform = 'translateX(0px)';
            loginForm.style.transform = 'translateX(0px)';
            indicator.style.transform = 'translateX(100px)';
        }

        function login() {
            regForm.style.transform = 'translateX(300px)';
            loginForm.style.transform = 'translateX(300px)';
            indicator.style.transform = 'translateX(0px)';
        }
    </script>
</body>

</html>
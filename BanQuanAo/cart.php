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

    <!-- CART ITEMS-->
    <div class="small-container cart-item">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="assets/buy-1.jpg" alt="">
                        <div>
                            <p>Red T-Shirt</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td> <input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="assets/buy-2.jpg" alt="">
                        <div>
                            <p>Running Shoes</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td> <input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="assets/buy-3.jpg" alt="">
                        <div>
                            <p>Jogger Pant</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td> <input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>

                <tr>
                    <td>Tax</td>
                    <td>$30.00</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>$230.00</td>
                </tr>
            </table>
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
    </script>
</body>

</html>
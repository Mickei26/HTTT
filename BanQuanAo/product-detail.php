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


    <!-- SINGLE PRODUCT DETAIL -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="assets/gallery-1.jpg" width="100%" id="productImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="assets/gallery-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/gallery-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/gallery-4.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / T-shirt</p>
                <h1>Red T-Shirt by HRX</h1>
                <h4>$50.00</h4>
                <select>
                    <option value="">Size</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i> </h3>
                <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro modi sed aliquam officia soluta voluptatem repudiandae velit numquam eum necessitatibus rem consectetur reiciendis nobis eveniet harum, voluptatum ipsum. Est, architecto.</p>
            </div>
        </div>
    </div>

    <!-- TITLE -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>

    <!-- PRODUCT -->
    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <img src="assets/product-5.jpg">
                <h4>Fashion Sneaker</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/product-6.jpg">
                <h4>Puma T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/product-7.jpg">
                <h4>Athletic Socks</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/product-8.jpg">
                <h4>Classic Watch</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
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


        // PRODUCT GALLERY//
        var productImg = document.getElementById('productImg');
        var smallImg = document.getElementsByClassName('small-img');

        smallImg[0].onclick = function() {
            productImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function() {
            productImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function() {
            productImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function() {
            productImg.src = smallImg[3].src;
        }
    </script>
</body>

</html>
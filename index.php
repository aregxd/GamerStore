<?php 
    include 'php/connection.php';
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="Img/gamerStoreLogo.png" type="image/x-icon">
    <title>Gamer Store</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>

    
    <!-- navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="Img/gamerStoreLogo.png">
            <p>Gamer <span>Store</span></p>
        </div>
        <div class="links">
            <div class="wrapper">
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="#"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </div>
    
<!-- Carousels Scroll -->
     <div class="container-fluid p-3 m-0 border-0">
        <div id="customCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-3">
                        <div class="col-12 p-2 col-md-6">
                            <img src="Img/Carousels1.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                        <div class="col-12 p-2 col-md-6 d-none d-md-block">
                            <img src="Img/Carousels2.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-3">
                        <div class="col-12 p-2 col-md-6">
                            <img src="Img/Carousels2.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                        <div class="col-12 p-2 col-md-6 d-none d-md-block">
                            <img src="Img/Carousels3.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-3">
                        <div class="col-12 p-2 col-md-6">
                            <img src="Img/Carousels3.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                        <div class="col-12 p-2 col-md-6 d-none d-md-block">
                            <img src="Img/Carousels4.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-3">
                        <div class="col-12 p-2 col-md-6">
                            <img src="Img/Carousels4.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                        <div class="col-12 p-2 col-md-6 d-none d-md-block">
                            <img src="Img/Carousels5.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-3">
                        <div class="col-12 p-2 col-md-6">
                            <img src="Img/Carousels5.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                        <div class="col-12 p-2 col-md-6 d-none d-md-block">
                            <img src="Img/Carousels6.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-3">
                        <div class="col-12 p-2 col-md-6">
                            <img src="Img/Carousels6.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                        <div class="col-12 p-2 col-md-6 d-none d-md-block">
                            <img src="Img/Carousels7.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-3">
                        <div class="col-12 p-2 col-md-6">
                            <img src="Img/Carousels7.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                        <div class="col-12 p-2 col-md-6 d-none d-md-block">
                            <img src="Img/Carousels1.jpg" class="d-block w-100 img-fluid custom-img rounded">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!-- Banner -->
    <div class="banner-wrapper">
        <div class="banner-img">
            <picture>
                <source srcset="Img/banner-mob.png" media="(max-width: 500px)">
                <img src="Img/banner-img.png">
            </picture>
        </div>
    </div>
    <br>


<!-- products -->
    <div class="product-container">
        <div class="product">
            <p class="title">Products</p>
            <div class="underline">
                <div class="underline small"></div>
            </div>
        </div>
    </div>
<!-- cards  -->
    <div class="product-list">
        <div class="product-item">
            <div class="container">
                <?php 
                $select = "SELECT * FROM products";
                $select_query = mysqli_query($conn, $select);
                $empty;

                if (mysqli_num_rows($select_query) > 0) {//check if table is empty 
                    $empty = false;
                } else {
                    $empty = true;
                }

                while ($row = $select_query->fetch_assoc()) {
                    $pid = $row["product_id"];
                    $item = $row['item'];
                    $amount = $row['quantity'];
                    $price = $row['price'];
                    $card_img = $row['card_img'];
                    $cur_img = $row['cur_img'];
                ?>
                <div class="card">
                    <img src="Img/<?php echo$card_img; ?>">
                    <div class="details">
                        <p class="game"><i class="fa-solid fa-gamepad"></i><?php echo $item; ?></p>
                        <div class="uc-price">
                            <div class="uc">
                                <img src="Img/<?php echo $cur_img; ?>">
                                <p><?php echo $amount; ?></p>
                            </div>
                            <div class="price">
                                <p>रु. <span><?php echo $price; ?></span></p>
                            </div>
                        </div>
                    </div>
                    <a href="order.php?pid=<?php echo $pid; ?>" class="add-to-cart"><i class="fa-solid fa-cart-shopping"></i>BUY NOW</a>
                </div>
                <?php } ?>
            </div>
            <p class="khali-xa">खली रैछ त यार ... </p>
            <p class="yeti-ho">यति हो ... </p>
            <?php 
            if($empty){//display when empty and end of page
                echo "<script>
                    document.querySelector('.khali-xa').style.display='flex';
                    document.querySelector('.yeti-ho').style.display='none';
                </script>";
            }
            else{//display when end of page
                echo "<script>
                    document.querySelector('.khali-xa').style.display='none';
                    document.querySelector('.yeti-ho').style.display='flex';
                </script>";
            }
            ?>
        </div>
    </div>

<!-- footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <div class="footer-content">
                    <div class="logo">
                        <img src="Img/gamerStoreLogo.png">
                        <p class="site-name">Gamer <span>Store</span></p>
                    </div>
                    <p class="about">Gamer Store is your premier online platform for purchasing in-game items and games at competitive prices. At Gamer Store, we offer a wide range of products to enhance your gaming experience, including in-game purchases and various game titles.</p>
                </div>
            </div>
            <div class="footer-column">
                <div class="footer-content">
                    <h3>Contact Info</h3>
                    <p><i class="fa-solid fa-envelope"></i> gamerstore2081@gmail.com</p>
                    <p><i class="fa-solid fa-location-dot"></i> Bharatpur Chitwan, Nepal</p>
                    <p><i class="fa-solid fa-phone"></i> +977 970-4989205</p>
                </div>
            </div>
            <div class="footer-column">
                <div class="footer-content">
                    <h3>Payment Via</h3>
                    <div class="payment-partners">
                        <img src="Img/payment/esewa.png">
                        <img src="Img/payment/khalti.png">
                        <img src="Img/payment/ime-pay.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links">
            <a href="https://shorturl.at/OWxF0" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://shorturl.at/UwpgR" target="_blank"><i class="fa-brands fa-instagram" target="_blank"></i></a>
            <a href="https://shorturl.at/OHxI3" target="_blank"><i class="fa-brands fa-whatsapp" target="_blank"></i></a>
        </div>
        <div class="footer">
            <div class="footer-bottom">
                <p>&copy; Gamer Store @ All rights reserved. </p>
            </div>
            <div class="footer-bottom">
                <p>Developed with  <i class="fa-solid fa-heart "></i>  by <a href="https://www.aprimregmi.com.np/index.html" target="_blank">aprimr</a>. </p>
            </div>
        </div>

    </footer>

    

<script src="script.js"></script>
</body>
</html>

<?php 

    include 'connection.php';
    session_start();
    $user_id = $_SESSION['user_name'];

    if (!isset($user_id)) {
        header('localtion:login.php');
    }

    if (isset($_POST['logout'])) {
        session_destroy();
        header('localtion:login.php');
    }

    //adding product in wishlist
    if (isset($_POST['add_to_wishlist'])) {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
    
        $wishlist_number = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        $cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        
        if(mysqli_num_rows($wishlist_number)>0) {
            $message[]='product already exist in wishlist';
        }else if(mysqli_num_rows($cart_number)>0) {
            $message[]='product already exist in cart';
        }else {
            mysqli_query($conn, "INSERT INTO `wishlist`(`user_id`, `pid`, `name`, `price`, `image`) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')");
            $message[]='product successfuly added in your wishlist';
        }
    }

    //adding product in cart
    if (isset($_POST['add_to_cart'])) {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        
        if(mysqli_num_rows($cart_number)>0) {
            $message[]='product already exist in cart';
        }else {
            mysqli_query($conn, "INSERT INTO `cart`(`user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')");
            $message[]='product successfuly added in your cart';
        }

    }
?>

<style type="text/css">
    <?php 
        include 'main.css';
    ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- box icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- home slider -->
    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <!-- <img src="img/slider.jpg" alt=""> -->
                <img src="https://shreegroup.in/wp-content/uploads/2019/02/bottle-slider-images-1.jpg" alt="">
                <div class="slider-caption">
                    <span>Test The Quanlity</span>
                    <h1>Organic Premium <br>Honey</h1>
                    <p>Enjoy sweet, aromatic honey made by hardworking people od <br> ecologically clean raw materials in the
                        most pure enviroment
                    </p>
                    <a href="shop.png" class="btn">shop now</a>
                </div>
            </div>
            <div class="slider-item">
                <!-- <img src="img/slider2.jpg" alt=""> -->
                <img src="https://www.canvardpackaging.com/wp-content/uploads/sites/63/2018/03/PET-Bottle-Banner.jpg" alt="">
                <div class="slider-caption">
                    <span>Test The Quanlity</span>
                    <h1>Organic Premium <br>Honey</h1>
                    <p>Enjoy sweet, aromatic honey made by hardworking people od <br> ecologically clean raw materials in the
                        most pure enviroment
                    </p>
                    <a href="shop.png" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <div class="control">
            <i class="bi bi-chevron-left prev"></i>
            <i class="bi bi-chevron-right next"></i>
        </div>
    </div>

    <div class="line"></div>

    <div class="services">
        <div class="row">
            <div class="box">
                <i class="bi bi-truck"></i>
                <div>
                    <h1>Free Shipping Fast</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicinh elit.</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-currency-dollar"></i>
                <div>
                    <h1>Money Back & Guarantee</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicinh elit.</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-telephone-fill"></i>
                <div>
                    <h1>Online Support 24/7</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicinh elit.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="line2"></div>

    <div class="story">
        <div class="row">
            <div class="box">
                <span>our story</span>
                <h1>Production of natural honey since 1990</h1>
                <p>Interdum Et Malesuada Fames Ac Ante Ipsum Primis In Faucibus. Vestibulim Laoreet Est Orci, Eu
                    Placerat Est Posuere In.
                    Sad Malesuada Magna Vitae Pulvinar Varius. Orci Varius Nato Que Penatibus Et Magnis Dis
                    Parturient
                    Montes, Ridiculus
                    Mus. Integer Vel Nisi Lorem. Dignissim Commodo Rhon Cus. Nullam.
                </p>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <!-- <img src="img/8.png" alt=""> -->
                <img src="https://www.dicota.com/media/mageplaza/blog/post/p/e/pet_recycling_banner.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="line3"></div>

    <!-- testimonial -->
    <div class="line4"></div>
    <div class="testimonial-fluid">
        <h1 class="title">What Our Customers Say's</h1>
        <div class="testimonial-slider">
            <div class="testimonial-item">
                <!-- <img src="img/3.jpg" alt=""> -->
                <img src="https://toigingiuvedep.vn/wp-content/uploads/2021/01/avatar-dep-cute.jpg" alt="">
                <div class="testimonial-caption">
                    <span>Test The Quanlity</span>
                    <h1>Organic Premium Honey</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                        consequat.
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <!-- <img src="img/4.jpg" alt=""> -->
                <img src="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/10/anh-dai-dien-zalo-4.jpg" alt="">
                <div class="testimonial-caption">
                    <span>Test The Quanlity</span>
                    <h1>Organic Premium Honey</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                        consequat.
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <!-- <img src="img/profile.jpg" alt=""> -->
                <img src="https://www.phanmemninja.com/wp-content/uploads/2023/07/anh-dai-dien-zalo-mac-dinh-11.jpg" alt="">
                <div class="testimonial-caption">
                    <span>Test The Quanlity</span>
                    <h1>Organic Premium Honey</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                        consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="control">
            <i class="bi bi-chevron-left prev1"></i>
            <i class="bi bi-chevron-right next1"></i>
        </div>
    </div>
    <div class="line"></div>

    <!-- discover section -->
    <div class="line2"></div>
    <div class="discover">
        <div class="detail">
            <h1 class="title">Organic Honey Be Healthy</h1>
            <span>Buy Now And Save 30% Off!</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                industry's 
                standard 
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
                make 
                a 
                type specimen 
                book.
            </p>
            <a href="shop.php" class="btn">discover now</a>
        </div>
        <div class="img-box">
            <!-- <img src="img/13.png" alt=""> -->
            <img src="https://www.dfupublications.com/images/2022/07/14/Pet%20Bottle-Recycling.webp" alt="">
        </div>
    </div>
    <?php include 'homeshop.php'; ?>
    <div class="line2"></div>
    <div class="newslatter">
        <h1 class="title">Join Our To Newslatter</h1>
        <p>Get 15% off your next order. Be the first to learn abour promotions special events, new arrivals and more.</p>
        <input type="text" name="" placeholder="your Email Address...">
        <button>subscribe now</button>
    </div>
    <div class="line3"></div>
    <div class="client">
        <div class="box">
            <!-- <img src="img/client0.png" alt=""> -->
            <img src="https://www.dosenprofi.com/content/products/86400013_01.png" alt="">
        </div>
        <div class="box">
            <!-- <img src="img/client1.png" alt=""> -->
            <img src="https://www.dosenprofi.com/content/products/86400013_01.png" alt="">

        </div>
        <div class="box">
            <!-- <img src="img/client2.png" alt=""> -->
            <img src="https://www.dosenprofi.com/content/products/86400013_01.png" alt="">

        </div>
        <div class="box">
            <!-- <img src="img/client3.png" alt=""> -->
            <img src="https://www.dosenprofi.com/content/products/86400013_01.png" alt="">

        </div>
        <div class="box">
            <!-- <img src="img/client4.png" alt=""> -->
            <img src="https://www.dosenprofi.com/content/products/86400013_01.png" alt="">

        </div>
    </div>




    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="script2.js"></script>
</body>
</html>
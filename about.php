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
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    
    <!-- main css link -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="index.php">home </a><span>/ about us</span>
        </div>
    </div>
    <div class="line"></div>

    <!-- about us -->
    <div class="line2"></div>
    <div class="about-us">
        <div class="row">
            <div class="box">
                <div class="title">
                    <span>ABOUT OUR ONLINE STORE</span>
                    <h1>Hello, With 25 years of experience</h1>
                </div>
                <p>Over 25 years Ecommerce helping companies reach their financial and branding goals.
                    THe perfect way to enjoy brewing tea on low hanging fruit to identity. Duis autem vel eum iriure
                    dolor in hendrerit in
                    vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. For me,
                    the most impotant part of
                    improving at photography
                </p>
            </div>
            <div class="img-box">
                <!-- <img src="img/about3.jpg" alt=""> -->
                <img src="https://images.zeald.com/site/linkplas/images/basic_theme/banner1.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="line3"></div>
    <!-- end about us -->

    <!-- features -->
    <div class="line4"></div>
    <div class="features">
        <div class="title">
            <h1>Complete Customer Ideas</h1>
            <span>best features</span>
        </div>
        <div class="row">
            <div class="box">
                <i class="bi bi-person-fill"></i>
                <h4>24 X 7</h4>
                <p>Online Support 24/7</p>
            </div>
            <div class="box">
                <i class="bi bi-currency-dollar"></i>
                <h4>Money Back Guarantee</h4>
                <p>100% Secure Payment</p>
            </div>
            <div class="box">
                <i class="bi bi-gift-fill"></i>
                <h4>Special Gift Card</h4>
                <p>Give the Perfect Gift</p>
            </div>
            <div class="box">
                <i class="bi bi-truck-front-fill"></i>
                <h4>Worlwide Shipping</h4>
                <p>On Order Over $99</p>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <!-- team section -->
    <div class="line2"></div>
    <div class="team">
        <div class="title">
            <h1>Our Workable Team</h1>
            <span>best team</span>
        </div>
        <div class="row">
            <div class="box">
                <div class="img-box">
                    <img src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/474074YFI/ucjh-i6e5-pgg8-5njt-o83k-mmjy-ezta-9nqh-anh-dai-dien-dep-cute-1.jpg" alt="">
                </div>
                <div class="detail">
                    <span>Finace Manager</span>
                    <h4>Miguel Rodrigez</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/474074YFI/ucjh-i6e5-pgg8-5njt-o83k-mmjy-ezta-9nqh-anh-dai-dien-dep-cute-1.jpg" alt="">
                </div>
                <div class="detail">
                    <span>Finace Manager</span>
                    <h4>Miguel Rodrigez</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/474074YFI/ucjh-i6e5-pgg8-5njt-o83k-mmjy-ezta-9nqh-anh-dai-dien-dep-cute-1.jpg" alt="">
                </div>
                <div class="detail">
                    <span>Finace Manager</span>
                    <h4>Miguel Rodrigez</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/474074YFI/ucjh-i6e5-pgg8-5njt-o83k-mmjy-ezta-9nqh-anh-dai-dien-dep-cute-1.jpg" alt="">
                </div>
                <div class="detail">
                    <span>Finace Manager</span>
                    <h4>Miguel Rodrigez</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="line3"></div>
    <div class="line4"></div>
    <div class="project">
        <div class="title">
            <h1>Our Best Project</h1>
            <span>how it works</span>
        </div>
        <div class="row">
            <div class="box">
                <img src="https://www.pace.edu.vn/uploads/news/2023/05/1-khai-niem-teamwork.jpg" alt="">
            </div>
            <div class="box">
                <img src="https://cl-wpml.s3.ap-southeast-1.amazonaws.com/cam-nang-viec-lam/wp-content/uploads/2023/06/02083625/group-asia-young-creative-people-smart-casual-wear-smiling-thumbs-up-creative-office-workplace-1024x576.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="line2"></div>
    <div class="ideas">
        <div class="title">
            <h1>We And Our Clients Are Happy To Cooperate With Our Company</h1>
            <span>our features</span>
        </div>
        <div class="row">
            <div class="box">
                <i class="bi bi-stack"></i>
                <div class="detail">
                    <h2>What We Really Do</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus
                        leo.
                    </p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-grid-1x2-fill"></i>
                <div class="detail">
                    <h2>History of Beginning</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus
                        leo.
                    </p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-tropical-storm"></i>
                <div class="detail">
                    <h2>Our Vision</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus
                        leo.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line3"></div>


    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>
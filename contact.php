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

    if (isset($_POST['submit-btn'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = mysqli_real_escape_string($conn, $_POST['number']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name='$name' AND email='$email' AND number='$number' AND message='$message'") or die('query failed');
        if(mysqli_num_rows($select_message)>0) {
            echo 'message already send';
        }else {
            mysqli_query($conn, "INSERT INTO `message`(`user_id`, `name`, `email`, `number`, `message`) VALUES('$user_id', '$name', '$email', '$number', '$message')");
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
    <title>PETBot - Contact Us</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    
    <!-- main css link -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>contact us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="index.php">home </a><span>/ contact us</span>
        </div>
    </div>
    <div class="line"></div>

    <!-- contact -->
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

    <div class="line4"></div>
    <div class="form-container">
        <h1 class="title">leave a message</h1>
        <form method="post">
            <div class="input-field">
                <label>your name</label>
                <input type="text" name="name">
            </div>
            <div class="input-field">
                <label>your email</label>
                <input type="text" name="email">
            </div>
            <div class="input-field">
                <label>number</label>
                <input type="number" name="number">
            </div>
            <div class="input-field">
                <label>your message</label>
                <textarea name="message"></textarea>
            </div>
            <button type="submit" name="submit-btn">send message</button>
        </form>
    </div>
    <div class="line"></div>
    <div class="address">
        <h1 class="title">our contact</h1>
        <div class="row">
            <div class="box">
                <i class="bi bi-map-fill"></i>
                <div>
                    <h4>address</h4>
                    <p>1093 Marigold Lane,
                        Coral Way, <br> Miami,
                        Florida, 33169
                    </p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-telephone-fill"></i>
                <div>
                    <h4>phone number</h4>
                    <p>(+84)123 456 789</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-envelope-fill"></i>
                <div>
                    <h4>email</h4>
                    <p>Petbot@gmail.com</p>
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
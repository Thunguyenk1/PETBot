<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<>

    <!-- header section starts -->
    <header>
        <a href="../index.html" class="animate1 logo"><i class="fas-fa-untensils"></i>PETBOT</a>

        <nav class="navbar">
            <a class="active" href="../index.html">Home</a>
            <a href="./product.html">Products</a>
            <a href="./about.html">About Us</a>
            <a href="./review.html">Review</a>
            <a href="./contact.html">Contact Us</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="./cart.html" class="fas fa-shopping-cart"></a>
            <a href="./login.html" class="fas fa-user-alt"></a>
        </div>
    </header>

    <!-- header section ends -->


    <!-- search form -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>


    <!-- home section starts -->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>spicy noodles</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://chailoviettrung.com/thumbs/1366x503x1/upload/photo/3-98210.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>fried chicken</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://chailoviettrung.com/thumbs/1366x503x1/upload/photo/3-98210.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>hot pizza</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="https://chailoviettrung.com/thumbs/1366x503x1/upload/photo/3-98210.png" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- home section ends -->

    <section></section>

    <section class="login" id="login">
        <h3 class="heading">Login</h3>
        <form action="">
            <div class="inputBox">
                <div class="input">
                    <span>Username: </span>
                    <input type="text" name="username" placeholder="Your Username" id="username" required>
                </div>
                <div class="input">
                    <span>Password: </span>
                    <div class="passform">
                        <input type="password" name="password" placeholder="Your password" id="password">
                        <i class="far fa-eye" id="togglePassword"></i>  
                    </div>
                </div>
            </div>
            <input type="submit" value="Login" class="btn">
            <br/><br/>
            <a href="./forgot-password.html">Forgot your password?</a>
            <a href="./register.html">Don't have an account? Register</a>
        </form>
    </section>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            var passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.classList.remove('far', 'fa-eye');
                this.classList.add('far', 'fa-eye-slash'); // change the icon to eye-slash when the password is visible
            } else {
                passwordInput.type = 'password';
                this.classList.remove('far', 'fa-eye-slash');
                this.classList.add('far', 'fa-eye'); // change the icon back to eye when the password is hidden
            }
        });
    </script>

    <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        // Get the values from the form
        $loginUsername = $_POST['username'];
        $loginPassword = $_POST['password'];
        
        // Create the SQL query
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        
        // Prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $loginUsername, $loginPassword);
        
        // Execute the statement
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();
        
        // Check if we have a result
        if ($result->num_rows > 0) {
          echo "Login successful!";
        } else {
          echo "Username or password is incorrect.";
        }
        
        $stmt->close();
        $conn->close();
    ?>

    <section></section>

    <!-- about section starts -->
    <section class="about" id="about">
        <h3 class="sub-heading">about us</h3>
        <h1 class="heading">why choose us?</h1>
        <div class="row">
            <div class="image">
                <img src="https://chailoviettrung.com/thumbs/1366x503x1/upload/photo/3-98210.png" alt="">
            </div>
            <div class="content">
                <h3>best food in the country</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti
                    corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod
                    reprehenderit rem? Tempora aut soluta odio corporis nohil!
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo.Sit
                    porro illo eos cumque deleniti iste alias, eum natus.
                </p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- footer section starts -->
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>locations</h3>
                <a href="#">india</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
                <a href="#">USA</a>
                <a href="#">france</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">products</a>
                <a href="#">orders</a>
                <a href="#">About us</a>
                <a href="#">Contact us</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">+111-222-3333</a>
                <a href="#">thunguyenhtay@gmail.com</a>
                <a href="#">khankly@gmail.com</a>
                <a href="#">hanoi, vietnam - 400104</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">gmail</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>
        </div>
        <div class="credit">copyright @2024 by <span>Petbot</span></div>
    </section>
    <!-- footer section ends -->


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>
</html>
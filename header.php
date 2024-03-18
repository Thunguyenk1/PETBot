<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Header</title>
    <!-- box icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="index.php" class="animate1 logo">PETBot</a>
            <nav class="navbar">
                <a href="index.php">home</a>
                <a href="about.php">about us</a>
                <a href="shop.php">shop</a>
                <a href="order.php">order</a>
                <a href="contact.php">contact us</a>
            </nav>
            <div class="icons">
                <i class="bi bi-person" id="user-btn"></i>

                <?php 
                    $select_wishlist = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
                    $wishlist_number_rows = mysqli_num_rows($select_wishlist);
                ?>
                <a href="wishlist.php"><i class="bi bi-heart"></i><sup><?php echo $wishlist_number_rows; ?></sup></a>
                
                <?php 
                    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                    $cart_number_rows = mysqli_num_rows($select_cart);
                ?>
                <a href="cart.php"><i class="bi bi-cart"></i><sup><?php echo $cart_number_rows; ?></sup></a>
                
                <i class="bi bi-list" id="menu-btn"></i>
            </div>
            <div class="user-box">
                <p>username: <span><?php echo $_SESSION['user_name'];?></span></p>
                <p>Email: <span><?php echo $_SESSION['user_email'];?></span> </p>
                <form method="post">
                    <button type="submit" class="logout-btn">log out</button>
                </form>
            </div>
        </div>
    </header>
    
</body>
</html>
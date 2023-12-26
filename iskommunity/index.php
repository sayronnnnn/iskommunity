<?php 
include('path.php');
include(ROOT_PATH . "/app/database/db.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUP Iskommunity</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/homepage.css'?>">
</head>
<body>
    <header>
        <div class="nav">
            <a href="index.php">PUP Iskommunity</a>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Organizations</a></li>
                <li><a href="">Support</a></li>
                <?php if(isset($_SESSION['id'])):?>
                    <li><a href=""><?php echo $_SESSION['username'];?></a></li>
                    <li><a href="logout.php">Log-out</a></li>
                <?php else:?>
                    <li><a href="login.php">Log-in</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                <?php endif;?>
            </ul>
        </div>
        <!-- Welcome message -->
        <?php include(ROOT_PATH . '/app/helpers/message.php')?>
        <!-- Welcome message -->
        <div class="welcome">
            <div class="welcome-picture"></div>
            <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <p>Eligendi a ea aliquid sed quia eaque accusantium deserunt iusto dolorum inventore?</p>
        </div>
    </header>
</body>
</html>

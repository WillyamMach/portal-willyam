<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/template/css/page_home.css">
    <link rel="stylesheet" href="src/lib/bootstrapIcons/icons-1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbarItem">
            <a href="./page_home.php">
                <i class="bi bi-piggy-bank-fill navbarItemIcon"></i>
            </a>
        </div>
        <div class="navbarItem">
            <a href="./page_home.php">
                <i class="bi bi-piggy-bank-fill navbarItemIcon"></i>
            </a>
        </div>
        <div class="navbarItem">
            <a href="./page_home.php">
                <i class="bi bi-piggy-bank-fill navbarItemIcon"></i>
            </a>
        </div>
        <div class="navbarItem">
            <a href="./page_home.php">
                <i class="bi bi-piggy-bank-fill navbarItemIcon"></i>
            </a>
        </div>
        <div class="navbarItem">
            <i>Hello <?php echo $_SESSION['userName']; ?></i>
        </div>
    </nav>
</body>
</html>
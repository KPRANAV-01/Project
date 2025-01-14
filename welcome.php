
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: config.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
</head>
<body>
    <?php 
    echo "<h1>Welcome To Fruits And Vegetable Shop "  .   $_SESSION['username'] . "</h1>";
     ?>
    <a href="logout.php">Logout</a>
</body>
</html>
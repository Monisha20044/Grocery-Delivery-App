<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Delivery App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Grocery Delivery App</h1>
        <p>
            <?php
            if (isLoggedIn()) {
                echo 'Welcome, logged-in user!';
            } else {
                echo 'Please <a href="login.php">login</a> or <a href="register.php">register</a>.';
            }
            ?>
        </p>
    </div>
</body>
</html>

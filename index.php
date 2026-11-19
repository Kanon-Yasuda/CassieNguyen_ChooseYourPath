<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
<title>Choose Your Path</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Choose Your Path</h1>

<p>Welcome to Choose Your Path!</p>

<p>

This is a story about a chance to change your orinary life into something amazing! You are suddenly thrown into this new life when your friend is attacked. Will you answer the call or will you ignore?

</p>

<?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true): ?>

<p>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</p>

<a href="game.php">Start Game</a>
<a href="logout.php">Log Out</a>

<?php else: ?>

<a href="login.php">Log In</a>
<a href="register.php">Register</a>

<?php endif; ?>

</body>
</html>
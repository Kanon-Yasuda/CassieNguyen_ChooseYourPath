<?php

session_start();

$endings = $_SESSION["endings"] ?? [];

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>

<p>Here are the endings you have discovered.</p>

<ul>
<li>
Ordinary Life -
<?php echo in_array("ordinary", $endings) ? "Discovered" : "Not discovered"; ?>
</li>

<li>
Giving Up -
<?php echo in_array("give_up", $endings) ? "Discovered" : "Not discovered"; ?>
</li>

<li>
True Hero -
<?php echo in_array("continue", $endings) ? "Discovered" : "Not discovered"; ?>
</li>
</ul>

<p><a href="game.php">Play Again</a></p>
<p><a href="index.php">Main Menu</a></p>

</body>
</html>
<?php

session_start();
session_destroy();

header("Location: login.php");
exit();

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>

<h1>LOGGED OUT</h1>
<h2>Bye bye! See you next time</h2>

</body>
</html>
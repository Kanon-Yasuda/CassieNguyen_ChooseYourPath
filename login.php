<?php

session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$password = $_POST["password"];

$file = fopen("data/users.txt", "r");

while (($user = fgetcsv($file)) !== false) {
if ($user[0] == $username && password_verify($password, $user[1])) {
$_SESSION["logged_in"] = true;
$_SESSION["user"] = $username;

fclose($file);
header("Location: game.php");
exit();
}
}

fclose($file);
$message = "Incorrect username or password.";
}

?>

<!DOCTYPE html>
<html>
<body>

<form method="POST">
Username: <input type="text" name="username" required><br><br>
Password: <input type="password" name="password" required><br><br>
<button type="submit">Login</button>
</form>

<p><?php echo htmlspecialchars($message); ?></p>

<a href="register.php">Register</a>

</body>
</html>
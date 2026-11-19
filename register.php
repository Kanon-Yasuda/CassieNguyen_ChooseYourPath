<?php

session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = trim($_POST["username"]);
$password = $_POST["password"];

$file = fopen("data/users.txt", "r");
$exists = false;

while (($user = fgetcsv($file)) !== false) {
if ($user[0] == $username) {
$exists = true;
}
}

fclose($file);

if ($username == "" || $password == "") {
$message = "Fill in all fields.";
} elseif ($exists) {
$message = "Username already exists.";
} else {
$file = fopen("data/users.txt", "a");

fputcsv($file, [$username, password_hash($password, PASSWORD_DEFAULT)]);

fclose($file);

header("Location: login.php");
exit();
}
}

?>

<!DOCTYPE html>
<html>
<body>

<form method="POST">
Username: <input type="text" name="username" required><br><br>
Password: <input type="password" name="password" required><br><br>
<button type="submit">Register</button>
</form>

<p><?php echo htmlspecialchars($message); ?></p>

<a href="login.php">Login</a>

</body>
</html>
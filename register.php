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

$path = __DIR__ . "/data/users.txt";

echo "Folder writable: " . (is_writable(__DIR__ . "/data") ? "Yes" : "No") . "<br>";
echo "File writable: " . (is_writable($path) ? "Yes" : "No") . "<br>";

$file = fopen($path, "a");

if ($file === false) {
die("Cannot open users.txt for writing.");
}

fputcsv($file, [$username, password_hash($password, PASSWORD_DEFAULT)]);

fclose($file);

header("Location: login.php");
exit();
}
}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>

<form method="POST">
<h2>username</h2>
Username: <input type="text" name="username" required><br><br>
<h2>password</h2>
Password: <input type="password" name="password" required><br><br>
<button type="submit">Register</button>
</form>

<p><?php echo htmlspecialchars($message); ?></p>

<a href="login.php">Login</a>

</body>
</html>
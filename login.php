<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query) == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "Invalid credentials";
    }
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
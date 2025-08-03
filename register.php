<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    mysqli_query($conn, "INSERT INTO users(username, password) VALUES('$username', '$password')");
    echo "Registration successful! <a href='login.php'>Login now</a>";
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $upi = "8755453763-4@ybl";
    echo "<h3>Send ₹$amount to UPI ID: <b>$upi</b></h3>";
    echo "<p>Once done, contact admin with payment screenshot to activate access.</p>";
    exit();
}
?>
<form method="post">
    <h2>Recharge Panel Access</h2>
    <input type="number" name="amount" placeholder="Enter Amount (e.g. 500)" required><br>
    <button type="submit">Recharge Now</button>
</form>
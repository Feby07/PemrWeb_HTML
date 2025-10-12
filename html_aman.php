<!DOCTYPE html>
<html>
<head>
    <title>Validasi Email Aman</title>
</head>
<body>
<h2>Form Validasi Email</h2>

<form method="post" action="">
    <label for="email">Masukkan Email:</label>
    <input type="text" name="email" id="email">
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email valid: $email</p>";
        } else {
            echo "<p style='color:red;'>Email tidak valid!</p>";
        }
    }
}
?>
</body>
</html>

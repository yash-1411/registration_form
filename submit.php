<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    echo "<div class='container'>";
    echo "<h1>Registration Successful</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Message:</strong><br> $message</p>";
    echo "</div>";
}
?>

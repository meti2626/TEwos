<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>

<form action="zFeedback.php" method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Message: <textarea name="message" required></textarea><br>
    <input type="submit" value="Send Feedback">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "Thank you, $name. Your feedback has been received.";
    } else {
        echo "Please fill in all fields.";
    }
}
?>

</body>
</html>

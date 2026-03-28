
<!-- validation and sanitizing cases using filter_var() use the variable and the vilter type -->

<!-- validate emailm --   FILTER_VALIDATE_EMAIL -->
<!-- <Sanitization , cleansinvalid character > -->

<?php

// $email = "example@domain.com";

// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo "Valid email address.";
// } else {
//     echo "Invalid email address.";
// }


// $number = "£";

// if (filter_var($number, FILTER_VALIDATE_INT))
// {
//     echo "Valid integer" ;

// }

//  else{
//      echo "Invalid integer";
//  }

?>
<form action="validation.php" method="post">
    Username: <input type="text" name="username" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    Age: <input type="number" name="age" required><br>
    <input type="submit" value="Register">
</form>
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];

    $errors = [];

    if (empty($username)) {
        $errors[] = "Username is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    if (empty($errors)) {
        echo "Registration successful.";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}


?>

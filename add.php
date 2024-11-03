<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    if (!empty($username) && !empty($password) && !empty($passwordConfirm)) {
        if ($password === $passwordConfirm) {

            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "New user has been added.";
            } else {
                echo "Failed to add new user.";
            }
        } else {
            echo "Passwords miss match.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <h2>Register</h2>
    <form method="POST" action="add.php">
        <label for="username">Username:</label>
        <br>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <br>
        <input type="password" name="password" required><br><br>

        <label for="passwordConfirm">Confirm Password:</label>
        <br>
        <input type="password"  name="passwordConfirm" required><br><br>

        <button type="submit">Register</button>
    </form>

    <br>
    <a href="index.php">Back to Dashboard</a>
    
</body>
</html>
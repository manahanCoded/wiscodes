<?php
include 'db.php';

$id = "";
$username = "";

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["id"])) {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username)) {
        $update_sql = "UPDATE users SET username='$username'";

        if (!empty($password)) {
            $update_sql .= ", password='$password'";
        }

        $update_sql .= " WHERE id=$id";

        if ($conn->query($update_sql)) {
            echo "User updated successfully.";
        } else {
            echo "Failed to update user.";
        }
    } else {
        echo "Username cannot be empty.";
    }
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql)) {
        echo "User deleted successfully.";
    } else {
        echo "Failed to delete user.";
    }
}

$result = $conn->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>User Management</h2>
    <h3>Add user:</h3>
    <a href="add.php">Create user</a>
    <br>
    <?php if (!empty($id)): ?>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="username">Username:</label>
        <input type="text"  name="username" value="<?php echo htmlspecialchars($username); ?>" required><br><br>

        <label for="password">Change password Password:</label>
        <input type="password"  name="password"><br><br>

        <button type="submit">Update User</button>
    </form>
    <?php endif; ?>

    <h3>Users List</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo htmlspecialchars($row["username"]); ?></td>
            <td>
                <a href="?edit=<?php echo $row['id']; ?>">Edit</a>
                
                <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    

   
</body>
</html>

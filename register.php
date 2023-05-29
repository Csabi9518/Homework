<?php
require_once "conf.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $name = $_POST["name"] ?? "";

    if (empty($email) || empty($password) || empty($name)) {
        echo "Please, write the all boxes!";
    } else {
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "This email is already used!";
        } else {
            $stmt->close();

            $sql = "INSERT INTO users (email, password, name) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bind_param("sss", $email, $hashed_password, $name);
            $stmt->execute();

            echo "Successful registration!";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="kezdolap.php">Back to Home page</a></li>
            </ul>
        </nav>
    </header>

    <header>
        <nav>
            <ul>
                <li><a href="login.php">Go to Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="card">
    <div>
        <h2>Registration</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <input type="submit" value="Registration">
            </div>
        </form>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

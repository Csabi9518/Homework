<?php
require_once "conf.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    if (empty($email) || empty($password)) {
        echo "Please, write all boxes!";
    } else {
        $sql = "SELECT id, email, password, name FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $user["id"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["name"] = $user["name"];

            header("location: index.php");
        } else {
            echo "Wrong email or password!";
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
    <title>Login</title>
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
                <li><a href="register.php">Registration</a></li>
            </ul>
        </nav>
    </header>

    <div class="card">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <input type="submit" value="Login" class="gomb">
            </div>
        </form>
    </div>
</body>
</html>



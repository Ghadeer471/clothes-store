<?php
/*----include 'db.php';
session_start();-*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php?login=success");
            exit;
        } else {
            header("Location: Account.php?error=invalid");
            exit;
        }
    } else {
        header("Location: Account.php?error=missing");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form id="loginform" action="login.php" method="POST">
    <label>Name</label>
    <input type="text" name="username" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <button type="submit" class="btn">Login</button>
    <a href="#">Forget Password</a>
</form>


<form action="register.php" method="POST" id="regform">
    <label for="fname">Name</label>
    <input type="text" name="username" required>
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit" class="btn">Register</button>
    <a href="#">Forget Password</a>
</form>

</body>
</html>
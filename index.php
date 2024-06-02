<?php
$servername = "mysql";
$username = "user";
$password = "user_password";
$dbname = "test_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->query("SELECT name, email FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>LEMP Stack</title>
</head>
<body>
    <h1>Welcome to the LEMP Stack</h1>
    <h2>User List</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo htmlspecialchars($user['name']) . ' (' . htmlspecialchars($user['email']) . ')'; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

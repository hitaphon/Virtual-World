<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // เชื่อมต่อฐานข้อมูล
    $conn = mysqli_connect("localhost", "root", "", "my_database");

    // ตรวจสอบการเชื่อมต่อ
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // ค้นหาผู้ใช้
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // ตรวจสอบผลลัพธ์
    if (mysqli_num_rows($result) == 1) {
        // เข้าสู่ระบบสำเร็จ
        $_SESSION['username'] = $username;
        header("location: welcome.php");
    } else {
        // เข้าสู่ระบบไม่สำเร็จ
        echo "Invalid username or password.";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

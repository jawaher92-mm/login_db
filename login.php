<?php
$conn = mysqli_connect("localhost", "root", "", "login_db"); // ← غيري اسم_قاعدتك إلى اسم قاعدة البيانات

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    echo "<h2 style='color: green; text-align: center;'> تم تسجيل الدخول بنجاح</h2>";
} else {
    echo "<h2 style='color: red; text-align: center;'> اسم المستخدم أو كلمة المرور غير صحيحة</h2>";
}

mysqli_close($conn);
?>
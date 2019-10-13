<?php
require_once "functions.php";
if(isset($_GET['email']) && isset($_GET['token'])) {
    $conn = new mysqli('localhost', 'root', '', 'project');
    $email = $conn->real_escape_string($_GET['email']);
    $token = $conn->real_escape_string($_GET['token']);
    $sql = $conn->query("SELECT id FROM users WHERE email='$email' AND tokenExpire > NOW() AND token='$token'  AND token<>''
");
    if ($sql->num_rows > 0) {
        $newPassword = generateNewString();
        $conn->query("UPDATE users SET token='', password = '$newPassword'
				WHERE email='$email'
			");
        echo "Your New Password Is $newPassword<br><a href=login.php'>Click Here To Log In</a>";
    } else
        redirectToLoginPage();
} else{
    redirectToLoginPage();
}
?>
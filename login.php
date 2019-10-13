<?php
require "db.php";
$data=$_POST;
if(isset($data['do_login'])) {
    $errors = array();
    $user = R::findOne('users', 'login=?', array($data['login']));
    if ($user) {
        if (password_verify($data['password'], $user->password)
        ) {
            $_SESSION['logged_user']=$user;
            header('Location:index1.php');
        } else {
            $errors[] = 'Password is false';
        }
    } else {
        $errors[] = 'User with this login do not find';
    }
    if (!empty($errors)) {
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }


}

?>
<html>
<head>
<title>Log In</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"
</head>
<body data-vide-bg="travel">
<div class="login-form">
    <div class="back">
        <a  href="indexv3.php"><span>Back to Main Page</span></a>
    </div>
    <h2>Log In</h2>
<form  action=""login.php" method="POST">
    <div class="form-input">
        <p><strong>Login</strong>
    <input type="text" name="login" value="<?php echo @$data['login'];?>">
        </p>
    </div>
    <div class="form-input">
        <p><strong>Password</strong>
    <input type="password" name="password" value="<?php echo @$data['password'];?>">
        </p>
    </div>
    <div class="form-input">
    <button type="submit" name="do_login">Log In</button>
    </div>
    <a href="reset.php" class="forget">Forgot Password?</a>
    <a href="signup.php" class="forget">if you are not registered.</a>
</form>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script src="js/jquery.vide.js"></script>
</body>
</html>
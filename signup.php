<?php
require "db.php";
$data=$_POST;
if(isset($data['do_signup']))
{
    $errors=array();
    if(trim($data['login'])==''){
        $errors[]='Enter login';
    }
    if(trim($data['email'])==''){
        $errors[]='Enter Email';
    }
    if($data['password']==''){
        $errors[]='Enter password';
    }
    if($data['password2']!=$data['password']){
        $errors[]='This password is false';
    }
    if(R::count('users',"login=?",array($data['login']))>0){
        $errors[]='User with this login  has yet';
    }
    if(R::count('users',"email=?",array($data['email']))>0){
        $errors[]='User with this email  has yet';
    }
    if(empty($errors)){
        $user=R::dispense('users');
        $user->login=$data['login'];
        $user->email=$data['email'];
        $user->password=password_hash($data['password'],PASSWORD_DEFAULT);
        R::store($user);
        header('Location:login.php');
    }
    else{
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
    <h2>Sign Up</h2>
<form action="signup.php" method="post">
    <div class="form-input">
    <p><strong>Login</strong>
        <input type="text" name="login" value="<?php echo @$data['login'];?>">
    </p>
    </div>
    <div class="form-input">
    <p><strong>Email</strong>
        <input type="email" name="email" value="<?php echo @$data['email'];?>">
    </p>
    </div>
    <div class="form-input">
    <p><strong>Password</strong>
        <input type="password" name="password" value="<?php echo @$data['password'];?>">
    </p>
    </div>
        <div class="form-input">
    <p><strong>Confirm Password</strong>
        <input type="password" name="password2" value="<?php echo @$data['password2'];?>">
    </p>
        </div>
            <div class="form-input">
        <button type="submit" name="do_signup">Sign In</button>
                <a href="login.php" class="forget">if you are  registered.</a>
    </div>
</form>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script src="js/jquery.vide.js"></script>
</body>
</html>
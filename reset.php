<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"
</head>
<body data-vide-bg="travel">
<div class="login-form">
    <div class="back">
        <a  href="indexv3.php"><span>Back to Main Page</span></a>
    </div>
    <h2>Forgot Password</h2>
    <form action="reset.php" method="post">
        <div class="form-input">
            <p><strong>Email</strong>
                <input id="email" type="email" name="email">
            </p>
        </div>
        <div class="form-input">
            <button class="reset" type="submit" name="reset">Reset Password</button>
            <br><br>
            <p id="response"></p>
        </div>
    </form>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/jquery.vide.js"></script>
</body>
</html>
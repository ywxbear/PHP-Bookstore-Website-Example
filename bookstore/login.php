<html>
<link rel="stylesheet" href="style.css">
<body>
<header>
<blockquote>
    <a href="index.php"><img src="image/logo.png"></a>
</blockquote>
</header>
<blockquote>
<div class="container">
<center><h1>Login</h1></center>
<form action="checklogin.php" method="post">
    Username:<br><input type="text" name="username"/>
    <br><br>
    Password:<br><input type="password" name="pwd" />
    <br><br>
    <input class="button" type="submit" value="Login"/>
    <input class="button" type="button" name="cancel" value="Cancel" onClick="window.location='index.php';" />
</form>
</div>
<blockquote>
<?php
if (isset($_GET['errcode'])) {
$errorMessages = [
    1 => 'Invalid username or password. Please try again.',
    2 => 'Please login.'
];

$errcode = intval($_GET['errcode']);
if (array_key_exists($errcode, $errorMessages)) {
    echo '<span style="color: red;">' . htmlspecialchars($errorMessages[$errcode]) . '</span>';
}
}
?>
</body>
</html>

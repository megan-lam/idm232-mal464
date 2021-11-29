<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="normalizer" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Login</title>
</head>
<body class="view">
    <div class="black">
    <?php include 'includes/header_white.php';?>  
    </div>
    <form action="">
        <label for="email_field">Email</label>
        <input type="email" name="email" value="">

        <label for="password_field">Password</label>
        <input type="password" name="password" value="">

        <label for="remember_me_field">Remember Me</label>
        <input type="checkbox" name="remember_me" value="">

        <input type="submit" value="Log in" class="btn btn-primary">

</body>
</html>
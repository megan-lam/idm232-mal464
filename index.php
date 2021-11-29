<?php
// database info
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';

$db_connection = mysqli_connect(
    $db_host,
    $db_user,
    $db_password,
);

if(!$db_connection){
    echo 'Connection Error: '.mysqli_connect_error();
    exit();


echo'it worked';

die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="normalizer" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Home</title>
</head>
<body class="home">
  <?php include 'includes/header_black.php';?>

</body>
</html>
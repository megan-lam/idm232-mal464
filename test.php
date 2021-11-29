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


if (!$db_connection){
    echo 'Connection Error: '.mysqli_connect_error();
    exit();

echo'why isnt this working';

die;


}
?>
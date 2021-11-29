<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="normalizer" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>View All</title>
</head>
<body class="view">
    <div class="black">
    <?php include 'includes/header_white.php';?>

<?php

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    // Build Query
    $query .= 'DELETE ';
    $query .= 'FROM users ';
    $query .= 'WHERE id=' . $user_id;
    // Sanity check to make sure we're only deleting a single record.
    $query . -'LIMIT 1';

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('viewall.php?success=User was deleted');
    } else {
        redirectTo('view.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>

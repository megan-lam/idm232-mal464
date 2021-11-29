<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="normalizer" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>View</title>
</head>
<body class="view">
    <div class="black">
    <?php include 'includes/header_white.php';?>

<div class="top">

<?php
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Build Query
    $query .= 'SELECT * ';
    $query .= 'FROM Recipes ';
    $query .= 'WHERE id=' . $user_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $user = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/users?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>
<div class="view_content">
    <h1 class="recipe_title"><?php echo $user['recipe_title']; ?>
    </h1>
    <div class="copy_container">
    <p class="copy">Category: <?php echo $user['category']; ?>
    </p>
    <p class="copy">Ingredients: <?php echo $user['ingredients']; ?>
    </p>
    <p class="copy">Steps: <?php echo $user['steps']; ?>
    </p>
    <p class="copy">Date Created: <?php echo $user['date_posted']; ?>
    </p>
    <p class="copy">Last Updated: <?php echo $user['date_updated']; ?>
    </p>
    </div>
    <p><a class="btn btn-primary"
            href="/editrecipe.php?id=<?php echo $user['id']; ?>">Edit</a>
        <a class="btn btn-primary"
            href="/delete.php?id=<?php echo $user['id']; ?>">Delete</a>
    </p>
</div>

</div>
</body>
</html>
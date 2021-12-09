<?php
$page_title = 'View';
require_once __DIR__ . '../../../global/admin_header_white2.php'; ?>

<div class="top">

<?php
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Build Query
    $query = "SELECT * FROM recipes WHERE id=" . $user_id;

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
<body class="recipes">
    <h1 class="header_text1"><?php echo $user['recipe_title']; ?>
    </h1>
    <HR WIDTH="100%" COLOR="FB6854" SIZE="4">

<div class="mobile_center">
<div class="center_recipe">

    <div class="column left">
    <h2 class="ingredients">Ingredients </h2> 
    <ul class="ingredients_list">
    <li class="recipepg"><?php echo $user['ingredients']; ?>
    </li></ul>
    </div>

    <div class="column right">
    <h2 class="steps">Steps</h2> 
    <ul class="instructions">
    <li class="recipepg"><?php echo $user['steps']; ?>
    </li></ul>
    </div>
   
    </div> 

    <p class="date">Date Created: <?php echo $user['date_posted']; ?>
    </p>
    <p class="date">Last Updated: <?php echo $user['date_updated']; ?>
    </p> 
   <div class="controls">
   <div class="center_btn">

    <p><a class="btn btn-primary"
            href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
        <a class="btn btn-primary"
            href="delete.php?id=<?php echo $user['id']; ?>">Delete</a>
    </p>
    </div>
</div>

</div>
</body>
</html>
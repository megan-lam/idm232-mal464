<?php
$page_title = 'Edit';
include_once '../../global/admin_header_white.php'; ?>

<div class="top">
<h2 class="view_title">EDIT</h2>

<?php
if (isset($_POST['update'])) {
    $recipe_id = $_POST['recipe_id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $recipe_id) {
        redirectTo('edit.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    //$recipe_title = mysqli_real_escape_string($db_connection, $_POST['$recipe_title']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $steps = mysqli_real_escape_string($db_connection, $_POST['steps']);
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'UPDATE Recipe ';
    $query .= 'SET ';
    //$query .= "recipe_title = '{$recipe_title}', ";
    $query .= "ingredients = '{$ingredients}', ";
    $query .= "steps = '{$steps}', ";
    $query .= "date_updated = '{$current_date}' ";
    $query .= "WHERE id = {$recipe_id}";
//echo '<pre>';
 //   var_dump($query);
//echo'</pre>';
die;
    // Execute Query
    $db_results = mysqli_query($db_connection, $query);

    if ($db_results && $db_results->num_rows > 0) {
        // Success
        redirectTo('viewall.php?success=Recipe Updated');
    } else {
        // Error
        redirectTo('viewall.php?id=' . $recipe_id . '&error=' . mysqli_error($db_connection));
    }
} elseif (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    // Build Query
    $query = "SELECT * FROM recipes WHERE id=" . $recipe_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        $recipe = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('viewall.php?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('viewall.php');
}
?>
<div class="container">
  <form action="" method="POST">

    <input type="text"
      value="<?php echo $recipe['recipe_title']; ?>"
      name="recipe_title">

    <input type="text"
      value="<?php echo $recipe['ingredients']; ?>"
      name="ingredients">

    <input type="text"
      value="<?php echo $recipe['steps']; ?>"
      name="steps">

    <br>
    <br>
    <input class="btn btn-primary" name="update" type="submit" value="Update">

  </form>
</div>

</div>
</body>
</html>

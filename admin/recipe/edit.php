<?php
$page_title = 'Edit';
require_once __DIR__ . '../../../global/admin_header_white.php'; ?>

<div class="top">
<h2 class="view_title">EDIT</h2>

<?php
if (isset($_POST['update'])) {
$user_id =$_POST['user_id'];
    // Make sure GET ID == post ID
    
    //  Parse Data
    $recipe_title = mysqli_real_escape_string($db_connection, $_POST['recipe_title']);
    $category = mysqli_real_escape_string($db_connection, $_POST['category']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $steps = mysqli_real_escape_string($db_connection, $_POST['steps']);
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'UPDATE recipes ';
    $query .= 'SET ';
    $query .= "recipe_title = '{$recipe_title}', ";
    $query .= "category = '{$category}', ";
    $query .= "ingredients = '{$ingredients}', ";
    $query .= "steps = '{$steps}', ";
    $query .= "date_updated = '{$current_date}' ";
    $query .= "WHERE id = {$user_id}";


    // Execute Query
    $db_results = mysqli_query($db_connection, $query);

    if ($db_results) {
        // Success
        redirectTo('admin/recipe/viewall.php?success=Recipe Updated');
    } else {
        // Error
        redirectTo('admin/recipe/viewall.php?id=&error=' . mysqli_error($db_connection));
    }
} elseif (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    // Build Query
    $query = "SELECT * FROM recipes WHERE id=" . $user_id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
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
    <form action="" method ="POST">

    <input type="text" 
    value="<?php echo $user['recipe_title'];?>""
    name="recipe_title" >

    <input type="text" 
    value="<?php echo $user['category'];?>"
    name= "category">

    <input type="text" 
    value="<?php echo $user['ingredients'];?>"
    name= "ingredients">

    <input type="text"
    value="<?php echo $user['steps'];?>"
    name="steps">

    <input class="btn btn-primary" name="update" type="submit" value="Update">

    <input type="hidden"
      value="<?php echo $user['id']; ?>"
      name="user_id">

    </form>

  </form>
</div>
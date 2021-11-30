<?php
$page_title = 'Create Recipe';
include_once '../../global/admin_header_black.php'; ?>
      
<?php   // Form has been submitted
if (isset($_POST['submit'])) {
    //  Parse Data
    $recipe_title = mysqli_real_escape_string($db_connection, $_POST['$recipe_title']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $steps = mysqli_real_escape_string($db_connection, $_POST['steps']);


    // Build Query
    $query = 'INSERT INTO Recipes (recipe_title, ingredients,  steps)';
    $query .= "VALUES ('{$recipe_title}', '{$ingredients}', '{$steps}')";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // Success
        redirectTo('viewall.php?success=Recipe created');
    } else {
        // Error
        redirectTo('viewall.php?error=' . mysqli_error($db_connection));
    }
}
//echo '<pre>';
//    var_dump($db_connection);
//echo'</pre>';
//die;
?>
<body class="edit">
<div class="title_container">
<form action="" method ="POST">
  <input class="title_text" id="recipe_title" type="text" name="recipe_title" value="" placeholder="+ RECIPE TITLE" required>
</div>
            <HR WIDTH="100%" COLOR="FB6854" SIZE="4">

        <input class="add_pic btn" type="file" id="myFile" name="filename">
     
        <div class="mobile_center">
            <div class="center_recipe">
                <div class="column left">

        <h2 class="ingredients">INGREDIENTS</h2>
            <input class="info" id="ingredient" type="text" name="ingredients" value="" placeholder="+ Add Ingredient" required>
        </div>

        <div class="column right">
        <h2 class="steps">STEPS</h2>
        <input class="info" id="step" type="text" name="steps" value="" placeholder="+ Type your step here" required>
            </div>
        </div>

        
    <br>
    <br>
    <div class="center_btn">
    <input class="btn btn-primary" name="submit" type="submit">
    </div>
  </form>
</div>
</body>
</html>
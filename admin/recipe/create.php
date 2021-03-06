<?php
$page_title = 'Create Recipe';
require_once __DIR__ . '../../../global/admin_header_black.php';?>

      
<?php   // Form has been submitted
if (isset($_POST['submit'])) {
    //  Parse Data
    $recipe_title = mysqli_real_escape_string($db_connection, $_POST['recipe_title']);
    $category = mysqli_real_escape_string($db_connection, $_POST['category']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $steps = mysqli_real_escape_string($db_connection, $_POST['steps']);
    $current_date = getFormattedDateTime();
    

    // Build Query
    $sql = "INSERT INTO `Recipes` (`recipe_title`, `category`, `ingredients`, `steps`, `date_posted`, `date_updated`)
    VALUES ('$recipe_title', '$category','$ingredients', '$steps', '{$current_date}', '{$current_date}');";

    // Execute Query
    $db_results = mysqli_query($db_connection, $sql);
    if ($db_results) {
        // Success
        redirectTo('admin/recipe/viewall.php');
    } else {
        // Error
        // echo 'Error';
        redirectTo('admin/recipe/viewall.php?error=' . mysqli_error($db_connection));
    }
}

if (isset($_POST['submit'])) {
    //echo '<pre>';
    //var_dump($_FILES['image']);
    //echo '</pre>';
    //die;
    // Parse Data
    $files_array = explode('.', $_FILES['image']['name']);
    $file_title = slugify($files_array[0]);
    $extension = $files_array[1];
    $final_file_name = $file_title . '.' . $extension;
    $temp_name = $_FILES['image']['tmp_name'];
}
?>
<div class="edit">
        <form action="" method ="POST" enctype="multipart/form-data">
    <div class="title_container">

            <input class="title_text" id="recipe_title" type="text" name="recipe_title" value="" placeholder="+ RECIPE TITLE" required>
    </div>
            <hr width="100%" color="FB6854" size="4">

        <input class="add_pic btn" type="file" value="" name="image">

        <div class="cat_layout">
            <div class="mobile_center">
            <input class="cat_text" id="category" type="text" name="category" value="" placeholder="+ Category" required>
            </div>

            <div class="center_recipe">
            
                <div class="column left">
                <h2 class="ingredients">INGREDIENTS</h2>
                <textarea class="textarea" id="ingredient" name="ingredients" placeholder="+ Add Ingredient"></textarea>
                </div>

                <div class="column right">
                <h2 class="steps">STEPS</h2>
                <textarea class="textarea" id="step" name="steps" placeholder="+ Type your step here"></textarea>
                </div>
            </div>
        </div>

        
    <br>
    <br>
        <div class="center_btn">
        <input class="btn btn-primary" name="submit" type="submit">
        </div>
  </form>
</div>
<?php require_once __DIR__ . '../../../global/footer.php';?>
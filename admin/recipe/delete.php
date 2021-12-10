
<?php
$page_title = 'Delete Recipe';
require_once __DIR__ . '../../../global/admin_header_white.php';

if(isset($_GET['id'])){
    $recipe_id = $_GET['id'];
    $db_results = mysqli_query($db_connection, "DELETE FROM Recipes WHERE id=$recipe_id");

    if ($db_results) {
        // Success
        redirectTo('admin/recipe/viewall.php?success=Recipe Deleted');
    } else {
        // Error
        redirectTo('admin/recipe/viewall.php?error=' . mysqli_error($db_connection));
    }
}
?>
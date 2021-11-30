
<?php
$page_title = 'Delete Recipe';
include_once '../../global/admin_header_white.php';

if(isset($_GET['id'])){
    $recipe_id = $_GET['id'];
    $sql = mysqli_query($db_connection, "DELETE FROM recipes WHERE id=$recipe_id") or die($sql->error());

    $db_results = mysqli_query($db_connection, $sql);
    if ($db_results) {
        // Success
        redirectTo('viewall.php?success=Recipe Deleted');
    } else {
        // Error
        redirectTo('viewall.php?error=' . mysqli_error($db_connection));
    }
}
?>
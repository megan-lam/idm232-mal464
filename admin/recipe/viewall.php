<?php
$page_title = 'Create User';
include_once '../../global/header_black2.php'; ?>

<div class="top">
<h2 class="view_title">VIEW ALL</h2>
<a href="addrecipe.php">
<h2 class="addrec">ADD A RECIPE</h2></div></a>
<div class="container">
<?php
    // Build Query
$query = 'SELECT * ';
$query .= 'FROM Recipes';
$db_results = mysqli_query($db_connection, $query);
?>
    <?php
    // Check if the results returned anything

    if ($db_results && $db_results->num_rows > 0) {
        include $_SERVER['DOCUMENT_ROOT'] . '/components/list-recipes.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }
    ?>
</div>
</div>
</body>
</html>
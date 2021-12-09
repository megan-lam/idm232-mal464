<?php
$page_title = 'View All';
require_once __DIR__ . '../../../global/admin_header_white.php'; ?>

<div class="top">
<h2 class="view_title">VIEW ALL</h2>
<a href="create.php">
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
         include '../../components/list-recipes.php';
     } else {
         echo '<p>There are no recipes yet, create one!</p>';
     }
     ?>
</div>
</div>
</body>
</html>
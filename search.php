    <?php include 'global/header_black.php';

// Build Query


// If Keyword param exist, update query to show search results instead of everything

$keyword = $_GET['keyword'];
if ($keyword) {
      global $db_connection;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM Recipes ';
      $query .= ' WHERE ';
      $query .= "`recipe_title` LIKE '%" . $keyword . "%'";
      $query .= "OR `category` LIKE '%" . $keyword . "%' ";
      $query .= "OR `ingredients` LIKE '%" . $keyword . "%' ";
      $query .= "OR `steps` LIKE '%" . $keyword . "%'";

      $result = mysqli_query($db_connection, $query);
      if ($result && $result->num_rows > 0) {
          $db_results = $result;
      } else {
          $db_results = null;
      }
}
else {
    $query = 'SELECT * ';
    $query .= 'FROM Recipes';
    
    $db_results = mysqli_query($db_connection, $query);
}
?> 

          <div class="search_center">
          <div class="searchbar">

          <form class="searchtext" action="" method="GET">
        <input type="text" id="site-search" name="keyword" placeholder="SHOW ME"
            value="<?php echo @$_GET['keyword']; ?>">
        <input class="sbutton" type="submit" value="submit">
    </form>

        </div></div>

          <!--<h3 class="searchtext">Show me</h3>-->
  
          <h2 class="section_title">SEARCH</h2>
          <div class="center">
            <div class="container">
            <?php
        if ($db_results) {
            include __DIR__ . '/components/list-recipes.php';
        } else {
            echo '<p>There are no recipes in the database yet!</p>';
        }
        ?>
        </div>
</body>
</html>
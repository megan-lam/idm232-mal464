<table>
    <thead>
      <tr>
        <th>Recipe</th>
        <th>Created</th>
        <th>Title</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($db_results)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['date_posted'] . '</td>';
              echo '<td><a href="view.php?id=' . $row['id'] . '">' . $row['recipe_title'] . '</a></td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>
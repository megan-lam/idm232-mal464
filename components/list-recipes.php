<table>
    <thead>
      <tr>
        <th class="table_title">Recipe</th>
        <th class="table_title">Date</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($db_results)) {
              echo '<tr>';
              echo '<td><a href="view.php?id=' . $row['id'] . '">' . $row['recipe_title'] . '</a></td>';
              echo '<td>' . $row['date_posted'] . '</td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>
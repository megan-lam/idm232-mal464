<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="normalizer" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo&display=swap" rel="stylesheet">
    <title>Create Recipe</title>
</head>
<body class="edit">
    <?php include 'includes/header_black.php';?>
      
        <form action="" method="POST">
            <input class="header_text" id="recipe_title" type="text" name="title_field" value="" placeholder="+ RECIPE TITLE" required>
            <HR WIDTH="100%" COLOR="FB6854" SIZE="4">
        <input class="addpic" type="submit" value="+ ADD PHOTO">
     
        <div class="mobile_center">
            <div class="center_recipe">
                <div class="column left">
        <h2 class="ingredients">INGREDIENTS</h2>
            <input class="info" id="ingredient" type="text" name="ingredient_field" value="" placeholder="+ Add Ingredient" required>
        </div>
        <div class="column right">
        <h2 class="steps">STEPS</h2>
        <input class="info" id="step" type="text" name="step_field" value="" placeholder="+ Type your step here" required>
            </div>
        </div>
        <div class="savepost">
        <input class="publish" type="submit" value="PUBLISH">
        <input class="publish" type="submit" value="DELETE">
        <input class="addpic" type="submit" value="SAVE DRAFT">
        </div>
</body>
</html>
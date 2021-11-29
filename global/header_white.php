<?php
//Required files for the app 

include 'config.php';
include 'includes/database.php';
include 'includes/helper.php';

if (isset($page_title)) {
    $page_title = $page_title . '';
} else {
    $page_title = 'IDM 232';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="normalizer" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title><?php echo $page_title; ?></title>
</head>
<body>
<div>
        <a href="/index.php">
            <img src="images/logo_white.svg" alt="Logo" class= "logo_w"/></a>
        <a href="/search.php">  
            <img src="images/w_search.svg" alt="search" class= "search_w"></a>     
        
        <!-- take out login
            <a href="/login.php">  
            <img src="images/acc_white.svg" alt="Login" class= "search_w"></a>     
        -->

        <div class="dropdown">
          <button class="dropbtn">RECIPES</button>
          <div class="dropdown-content">
            <a href="categories.html" class="droptext">Categories</a>
            <a href="viewall.html" class="droptext">View All</a>
          </div>
        </div>
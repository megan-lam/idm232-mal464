<?php
//Required files for the app 

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/helper.php';


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
    <link rel="normalizer" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <title><?php echo $page_title; ?></title>
</head>
<body>
<div>
    <a href="../../index.php">
        <img src="/images/logo_black.svg" alt="Logo" class= "logo"/></a>
    <a href="../../search.php">  
        <img src="/images/search.svg" alt="search" class= "search"></a>

    <!-- take out login
        <a href="login.php">  
        <img src="images/acc_black.svg" alt="Login" class= "search"></a>
    --> 
         
    <div class="dropdown">
        <button class="drophome">RECIPES</button>
        <div class="dropdown-content">
          <a href="../../categories.php" class="droptext">Categories</a>
          <a href="../recipe/viewall.php" class="droptext">View All</a>
        </div>
      </div>
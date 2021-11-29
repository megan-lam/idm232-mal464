<?php
require_once __DIR__ . '../../config.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/helper.php';
?>

<div>
    <a href="index.php">
        <img src="images/logo_black.svg" alt="Logo" class= "logo"/></a>
    <a href="search.php">  
        <img src="images/search.svg" alt="search" class= "search"></a>

    <!-- take out login
        <a href="login.php">  
        <img src="images/acc_black.svg" alt="Login" class= "search"></a>
    --> 
         
    <div class="dropdown">
        <button class="drophome">RECIPES</button>
        <div class="dropdown-content">
          <a href="categories.html" class="droptext">Categories</a>
          <a href="viewall.html" class="droptext">View All</a>
        </div>
      </div>
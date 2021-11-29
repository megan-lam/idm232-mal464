<?php
require_once __DIR__ . '../../config.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/helper.php';
?>

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
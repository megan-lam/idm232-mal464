<?php
require_once __DIR__ . '../../../config.php';
require_once __DIR__ . '../../database.php';

$query = "INSERT INTO 'Recipes'('recipe_title','ingredients','steps','category','status','date_posted','date_updated"
$query .= "VALUES ('Strawberry ice cream', 'milk', 'mix', 'featured', 'pending', '2018-01-01 23:30:00', '2018-01-01 23:30:00')"

$db_connection->query($query);
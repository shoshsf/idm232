<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability

$id = $_POST['id'];
$recipe_name_value = $_POST['recipe_name'];
$servings_value = $_POST['servings'];
$cook_time_value = $_POST['cook_time'];
$prep_time_value = $_POST['prep_time'];
$description_value = $_POST['description'];
$ingredients_value = $_POST['ingredients'];
$directions_value = $_POST['directions'];



// Create a SQL statement to insert the data into the database
$query = "UPDATE recipe SET
     recipe_name = '{$recipe_name_value}', 
     servings = '{$servings_value}', 
     cook_time = '{$cook_time_value}', 
     prep_time = '{$prep_time_value}',
     description = '{$description_value}', 
     ingredients = '{$ingredients_value}', 
     directions = '{$directions_value}' 
WHERE id = {$id}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'recipe was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}
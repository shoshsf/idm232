<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability

$recipe_name_value = $_POST['recipe_name'];
$servings_value = $_POST['servings'];
$cook_time_value = $_POST['cook_time'];
$prep_time_value = $_POST['prep_time'];
$description_value = $_POST['description'];
$ingredients_value = $_POST['ingredients'];
$directions_value = $_POST['directions'];

$result = add_recipe(
    $recipe_name_value,
    $servings_value,
    $cook_time_value,
    $prep_time_value,
    $description_value,
    $ingredients_value,
    $directions_value
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes/index.php');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}

?>
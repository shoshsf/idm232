<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability

$recipe_name_value =  sanitize_value($_POST['recipe_name']);
$image_path_value = sanitize_value($_POST['image_path']);
$servings_value = sanitize_value($_POST['servings']);
$cook_time_value = sanitize_value($_POST['cook_time']);
$prep_time_value = sanitize_value($_POST['prep_time']);
$description_value = sanitize_value($_POST['description']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$directions_value = sanitize_value($_POST['directions']);

$result = add_recipe(
    $recipe_name_value,
    $image_path_value,
    $servings_value,
    $cook_time_value,
    $prep_time_value,
    $description_value,
    $ingredients_value,
    $directions_value
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}

?>
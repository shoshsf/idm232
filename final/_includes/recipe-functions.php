<?php

function add_recipe($recipe_name, $servings,  $cook_time, $prep_time, $description, $ingredients, $directions)
{
    global $db_connection;
    $query = 'INSERT INTO recipe';
    $query .= ' ( recipe_name, servings, cook_time, prep_time, description, ingredients, directions)';
    $query .= " VALUES (' $recipe_name', '$servings', '$cook_time', '$prep_time', '$description', '$ingredients', '$directions')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

?>
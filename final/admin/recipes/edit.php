<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>



<?php
// get recipe data from database
$query = "SELECT * FROM recipe WHERE id = {$_GET['id']}";
// recipe_name = {$_GET['$recipe_name']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $id variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?> 

<div class="formPage">
    <div class="adminHeaderSec">
        <h1 class="adminHeader">Edit A Recipe</h1>
    </div>
    <hr class="hr_form">
    <div class="adminFormDiv">
        <form action="<?php echo site_url(); ?>/_includes/process-edit-recipe.php" method="POST">

            <div class="recipeInput">
                <label for="">Name Of Recipe</label>
                <input type="text" name="recipe_name"
                    value="<?php echo $recipe['recipe_name']; ?>">
            </div>
            <div class="recipeInput">
                <label for="">Image Path</label>
                <input type="text" name="image_path"
                    value="<?php echo $recipe['image_path']; ?>">
            </div>
            <div class="recipeInput">
                <label for="">Servings</label>
                <input type="text" name="servings"
                    value="<?php echo $recipe['servings']; ?>">
            </div>
            <div class="recipeInput">
                <label for="">Cook Time</label>
                <input type="text" name="cook_time"
                    value="<?php echo $recipe['cook_time']; ?>">
            </div>
            <div class="recipeInput">
                <label for="">Prep Time</label>
                <input type="text" name="prep_time"
                    value="<?php echo $recipe['prep_time']; ?>">
            </div>
            <div class="recipeInput">
                <label for="">Description</label>
                <br>
                <textarea class="classic" name="description" cols="30" rows="10">
                    <?php echo $recipe['description']; ?>
                </textarea>
            </div>
            <div class="recipeInput">
                <label for="">Ingredients</label>
                <br>
                <textarea class="classic" name="ingredients" cols="30" rows="10">
                    <?php echo $recipe['ingredients']; ?>
                </textarea>
            </div>
            <div class="recipeInput">
                <label for="">Directions</label>
                <br>
                <textarea class="classic" name="directions" cols="30" rows="10">
                    <?php echo $recipe['directions']; ?>
                </textarea>
            </div>
            <div class="secondaryButtonDiv">
                <input class="secondaryButton" type="submit" value="Update">
            </div>

            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        </form>
        
    </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php'; 
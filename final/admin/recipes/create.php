<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Add Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipe';
$result = mysqli_query($db_connection, $query);

?>

<div class="formPage">
    <div class="adminHeaderSec">
        <h1 class="adminHeader">Add A Recipe</h1>
    </div>
    <hr class="hr_form">

    <div class="adminFormDiv">
        <form class="adminForm" action="<?php echo site_url(); ?>/_includes/process-create-recipe.php" method="POST">

            <div class="recipeInput">
                <label for="">Name Of Recipe</label>
                <input type="text" name="recipe_name">
            </div>

            <div class="recipeInput">
                <label for="">Servings</label>
                <input type="text" name="servings">
            </div>

            <div class="recipeInput">
                <label for="">Cook Time</label>
                <input type="text" name="cook_time">
            </div>

            <div class="recipeInput">
                <label for=""> Prep Time</label>
                <input type="text" name="prep_time">
            </div>


            <div class="recipeInput">
                <label for=""> Description </label>
                <input type="text" name="description">
            </div>

            <div class="recipeInput">
                <label for=""> Ingredients </label>
                <input type="text" name="ingredients">
            </div>

            <div class="recipeInput">
                <label for=""> Directions </label>
                <input type="text" name="directions">
            </div>
            <div class="secondaryButtonDiv">
                <input class="secondaryButton" type="submit" value="submit">
            </div>
        </form> 
    </div>
</div>


<?php include_once __DIR__ . '/../../_components/footer.php';
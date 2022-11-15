<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home';
include_once __DIR__ . '/../_components/header.php';
?>

<form action="<?php echo site_url(); ?>/_includes/process-create-recipe.php" method="POST">

    <h2 class="pageHeading"> Add A Recipe </h2>
    <div class="addrecipeInput">
        <label for="">Name Of Recipe</label>
        <input type="text" name="recipe_name">
    </div>

    <div class="addrecipeInput">
        <label for="">Servings</label>
        <input type="text" name="servings">
    </div>

    <div class="addrecipeInput">
        <label for="">Cook Time</label>
        <input type="text" name="cook_time">
    </div>

    <div class="addrecipeInput">
        <label for=""> Prep Time</label>
        <input type="text" name="prep_time">
    </div>


    <div class="addrecipeInput">
        <label for=""> Description </label>
        <input type="text" name="description">
    </div>

    <div class="addrecipeInput">
        <label for=""> Ingredients </label>
        <input type="text" name="ingredients">
    </div>

    <div class="addrecipeInput">
        <label for=""> Directions </label>
        <input type="text" name="directions">
    </div>
    <input type="submit" value="Submit Recipe">
</form>

<?php include_once __DIR__ . '/../_components/footer.php';
?>


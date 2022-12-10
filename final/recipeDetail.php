<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View Recipe';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get recipe data from database
$query = "SELECT * FROM recipe WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

?> 


<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
          
<?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($result)) {
        echo "
 
  
            <div class='midSection'>
                <div class='recipeDetailTop text-center'>
                    <h2 class='recipeDetailTitle'>{$recipe['recipe_name']}</h2>
                    <div class='recipeDetailTimes'> 
                        <div class='recipeDetailTimesContent'>
                            <p class='recipeDetailTimesItem ffArchitectsDaughter'> Prep Time: {$recipe['prep_time']} mins</p>
                            <p class='recipeDetailTimesItem ffArchitectsDaughter specialBorder'> Cook Time: {$recipe['cook_time']} mins</p>
                            <p class='recipeDetailTimesItem ffArchitectsDaughter'> Servings: {$recipe['servings']}</p>
                        </div>
                    </div>
                </div>
                
                <img class='featureImage center responsive' src='{$site_url}/{$recipe['image_path']}' alt='#'>
                
                <hr class='hr_30'>

                <div class='recipeBottom'>
                    <div class='ingredients'>
                        <h3> Ingredients </h3>
                        <p class=''>{$recipe['ingredients']}</p>
                    </div>
                    <div class='directions'>
                        <h3> Directions </h3>
                        <p class=''>{$recipe['directions']}</p>
                    </div>
                </div> 
            </div>


        ";
    }
?>
            <!-- </div>
          </div> -->

          <?php include_once __DIR__ . '/_components/footer.php';
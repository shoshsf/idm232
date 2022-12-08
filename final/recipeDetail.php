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
        <div class=''>
            <div class=''>
                <div class=''>
                    <div>
                        <h2 class=''>{$recipe['recipe_name']}</h2>
                        <div> 
                            <p class=''> Prep Time: {$recipe['prep_time']}</p>
                            <p class=''> Cook Time: {$recipe['cook_time']}</p>
                            <p class=''> Servings: {$recipe['servings']}</p>
                        </div>
                    </div>
                    <img class='' width='500px' height='500px' src='{$site_url}/{$recipe['image_path']}' alt=''>
                    <div>
                        <p class=''>{$recipe['description']}</p>
                    </div>

                    <hr class='hr_30'>

                    <div class=''>
                        <div class=''>
                            <h3> Ingredients </h3>
                            <p class=''>{$recipe['ingredients']}</p>
                        </div>
                        <div class=''>
                            <h3> Directions </h3>
                            <p class=''>{$recipe['directions']}</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>    
        ";
    }
?>
            <!-- </div>
          </div> -->

          <?php include_once __DIR__ . '/_components/footer.php';
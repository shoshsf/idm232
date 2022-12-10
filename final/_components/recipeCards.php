<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
          
<?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($result)) {
        echo "
        <div class='recipeCard'>
            <a href='{$site_url}/recipeDetail.php?id={$recipe['id']}' class='recipeCardContent'>
                    <div>
                        <img class='recipeCardImg' src='{$recipe['image_path']}' alt=''> 
                    </div>
                                   
                    <div class='recipeCardText'>
                        <h3 class='recipeCardTitle'>{$recipe['recipe_name']}</h3>
                        <p class='recipeCardDesc'>{$recipe['description']}</p>
                    </div> 
            </a> 
        </div>
        ";
    }
?>

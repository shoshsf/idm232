<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
          
<?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($result)) {
        echo "
        <a href='{$site_url}/recipeDetail.php?id={$recipe['id']}' class=''>
            <div class=''>
            <img class='' width='100px' height='100px' src='{$recipe['image_path']}' alt=''>                
                <div class=''>
                    <p class=''>{$recipe['recipe_name']}</p>
                    <p class=''>{$recipe['description']}</p>
                </div> 

            </div>
        </a>    
        ";
    }
?>

<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View All Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get data from database

$query = 'SELECT * FROM recipe ORDER BY recipe_name ASC';
$result = mysqli_query($db_connection, $query);

?>


<div class="midSection">
    
    <div class="center viewAllHeader">
        <h1 class="ffArchitectsDaughter text-center topSecHeader">All Recipes</h1>
        <hr class="hr_20">
    </div>
    <div class="searchSection">
        <div class="searchContainer">
            <form class="searchBox" action= "<?php echo site_url(); ?>/admin/search" method="GET">
                <div>
                    <input class="searchText" type="text" placeholder="Search..." name="search">
                    <button class="searchButtonSec">
                        <iconify-icon icon="arcticons:xiaoyuan-search" style="color: black; weight: bold" width="45" height="auto"  type="submit" class="searchIcon"></iconify-icon>
                    </button>
                </div>
            </form>
        </div> 
    </div>
    <div class="">  
        <div class="recipeCardSec">
            <?php include __DIR__ . '/_components/recipeCards.php'; ?>
        </div>
    </div>  
</div>




<?php include_once __DIR__ . '/_components/footer.php'; ?>


<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Recipe Search';
include_once __DIR__ . '/../../_components/header.php';
//$services = get_services();


// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}


$query = 'SELECT *';
$query .= ' FROM recipe';
$query .= " WHERE recipe_name LIKE '%{$search}%'";
$query .= " OR servings LIKE '%{$search}%'";
$query .= " OR description LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);



// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipe_results = true;
} else {
    $recipe_results = false;
}
?>


<div class="">
  <div class="">
    <!-- not sure whats happening here -->
    <?php include __DIR__ . '../results.php'; ?> 
    <div class="midSection responsive">
        <div class="">
            <h1 class="searchTitle">Search Results</h1>
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
            <h2>You searched for "<?php echo $search; ?>"</h2>
            <?php
                // If no results, echo no results
                if (!$recipe_results) {
                    echo '<p>No results found</p>';
                }
            ?>
            <?php
                // If error query param exist, show error message
                if (isset($_GET['error'])) {
                    echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
                }
            ?>
        </div>

    </div>

    <?php
        $site_url = site_url();
    // If we have results, show them
      if ($recipe_results) {
          while ($recipe_results = mysqli_fetch_assoc($results)) {
            //   echo '<div class= "">';
            //   echo '<p class= "" >' . $recipe_results['recipe_name'] . '<p>';
            //   echo '<p class= "" >' . $recipe_results['description'] . '<p>' ;
            //   echo '</div>';
            echo "
                <a href='{$site_url}/recipeDetail.php?id={$recipe_results['id']}' class='' >
                    <div class=''>
                    <img class='' width='100px' height='100px' src='{$site_url}/{$recipe_results['image_path']}' alt=''>
                        <div class=''>
                            <p class=''>{$recipe_results['recipe_name']}</p>
                            <p class=''>{$recipe_results['description']}</p>
                        </div> 

                    </div>
                </a>
            ";
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>
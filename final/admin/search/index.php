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
    <?php include __DIR__ . '/../../search.php'; ?> 
    <div class="">
        <div class="">
            <h1 class="">Search Results</h1>
            <form action="<?php echo site_url(); ?>/admin/search" method="GET">
            <input class=" " type="text" name="search" id="search" placeholder="Search"
                value="<?php echo $search; ?>">
            <button type="submit">Search</button>
            </form>
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
    // If we have results, show them
      if ($recipe_results) {
          while ($recipe_results = mysqli_fetch_assoc($results)) {
              echo '<div class="flex flex-row justify-center items-center">';
              echo '<p class="" >' . $recipe_results['recipe_name'] . '<p>';
              echo '<p class="" >' . $recipe_results['description'] . '<p>' ;
              
              echo '</div>';
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>
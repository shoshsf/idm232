<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Admin View';
include_once __DIR__ . '/../../_components/header.php';
?>


<?php
// get users data from database
$query = 'SELECT * FROM recipe ORDER BY recipe_name ASC';
$result = mysqli_query($db_connection, $query);

?>



<div class="adminBody">

  <div class="adminViewAll">
    <div class="adminViewAll_TopSec">
      <div class="header center">
        <h1 class="ffArchitectsDaughter topSecHeader text-center center">All Recipes</h1>
        <hr class="hr_20">
      </div>
      

      <div class="centerBtnDiv">
        <button type="button"
          class="i centerBtnDiv">
          <a href="<?php echo site_url() . '/admin/recipes/create.php' ?>" class="centerBtn">
            Add a Recipe</a></button>
      </div>
    </div>

    <div class="adminTable">
 
      <table class="adminDiv">
        <thead class="">
          <!-- <tr>
            <th scope="col" class="">Name of Recipe</th>
          </tr> -->
        </thead>
        <tbody>
          <?php
            $site_url = site_url();
            while ($recipe = mysqli_fetch_array($result)) {
              echo "<tr >
                <td class='recipeName'>{$recipe['recipe_name']}</td>
                <td class='recipeButtons'>
                  <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}' class='editDeleteBtn'>Edit</a>
                  <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' class='editDeleteBtn deleteBtn'>Delete</a>
                </td>
              </tr>";
            }
            ?>
        </tbody>
      </table>

    </div>
  </div>
  
</div>

<?php include_once __DIR__ . '/../../_components/footer.php'; ?>



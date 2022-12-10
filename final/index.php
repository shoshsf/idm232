<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<!--Body Here-->
<div class="midSection">
        <div id="welcomeText">
            <p> 
                Welcome to my kitchen! I know how hard it is to find delicious recipes that you absolutely love. That is why I am here to share my collection of recipes with you. The collection consists of a variety of healthy and delicious dishes.
                <br>Hope you find a recipe you like in my Kitchen!
            </p>
        </div>
        <hr class="hr_30">
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
        <!-- Top Pick Section-->
        <div id="topPickSection">
            <div id="display">
                <p id="sectionHeader">Today's Top Pick <p>
                <div class="container center">
                    <img  src=" <?php echo site_url(); ?>/dist\images\homeImgs\layer-bean-dip-880x400.png" alt="Top Pick" class="image responsive" >
                    <div class="overlay">
                        <div class="slideText">
                            <p class="text">7 Layer Bean Dip
 </p>
                            <p class="subtext"> It's not a party without 7 layer dip! We make it with hot refried beans topped with cheddar cheese, chilies, tomatoes, avocados, sour cream, and sliced black olives. It's an essential Game Day appetizer. </p>
                            <!-- <a class="button" href="#" target="_blank" > 
                            View Recipe</a> -->
                            <div>
                                <a id="buttonTopPick" href="<?php echo site_url() . '/recipeDetail.php?id=57' ?>" target="_blank" >View Recipes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Category Section-->
        <div id="categorySec">
            <p id="sectionHeader" class="center"> Categories </p>
            <div id="categoryDiv" >
                    <section>
                        <img src="<?php echo site_url(); ?>/dist/images/homeImgs/f2_306x306.jpg" alt="food2">
                        <p> Breakfast</p>
                    </section>
                    <section>
                        <img src="<?php echo site_url(); ?>/dist/images/homeImgs/f3_306x306.jpg" alt="food3">
                        <p> Lunch </p>
                    </section>
                    <section>
                    <img src="<?php echo site_url(); ?>/dist/images/homeImgs/f4_306x306.jpg" alt="food4">
                        <p> Dinner </p>
                    </section>
            </div>
        </div>
    </div>
<!--Body ENDSHere-->

<?php include_once __DIR__ . '/_components/footer.php';
?>
<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<!--Body Here-->
<div class="midSection">
        <div id="welcomeText">
            <p> 
                Welcome to my kitchen! I know how hard it is to find delicious recipes that you absolutly love. That’s why I am here to share my collection of recipes with you. The collection consists of a variety of healthy and delicious dishs.
                <br>Hope you find a recipe you like in my Kitchen!
            </p>
        </div>
        <hr class="hr_30">
        <div class="searchContainer">
            <form class="searchBox"> <!--action="/action_page.php"  -->
                <div >
                    <input class="searchText" type="text" placeholder="Search..." name="search">
                    <button id="searchIcon"><iconify-icon icon="arcticons:xiaoyuan-search" style="color: black; weight: bold" width="45" height="auto"  type="submit" class="searchIcon"></iconify-icon></button>
                </div>
            </form>
        </div> 
        <!-- Top Pick Section-->
        <div id="topPickSection">
            <div id="display">
                <p id="sectionHeader">Today's Top Pick <p>
                <div class="container center">
                    <img  src=" <?php echo site_url(); ?>/dist/images/homeImgs/f3_880x400.jpg" alt="Top Pick" class="image responsive" >
                    <div class="overlay">
                        <div class="slideText">
                            <p class="text">Lorem ipsum </p>
                            <p class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <!-- <a class="button" href="#" target="_blank" > 
                            View Recipe</a> -->
                            <div>
                                <a id="buttonTopPick" href="#" target="_blank" >View Recipes</a>
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
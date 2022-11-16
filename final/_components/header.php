<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = 'Home';
}
$site_title = 'Kazi\'s Kitchen';
$document_title = $page_title . ' | ' . $site_title; // Home | JAWN Clips

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="icon" type="image/x-icon" href=" echo site_url(); ?>/dist/images/favicon.ico"> -->
  <link rel="stylesheet" href=" <?php echo site_url(); ?>/dist/styles/style.css">
  <link rel="stylesheet" href=" <?php echo site_url(); ?>/dist/styles/media.css">
  <!-- <link rel="stylesheet" href="../dist/styles/style.css">
  <link rel="stylesheet" href="../dist/styles/media.css"> -->
  <link href="https://www.dafontfree.net/embed/YWtyb25pbS1yZWd1bGFyJmRhdGEvMjkvYS8xNTM0MTIvQWtyb25pbS1SZWd1bGFyLnR0Zg" rel="stylesheet" type="text/css"/>
  
  <title><?php echo $document_title ; ?></title>
</head>

<body>
 
    <!--Main Content Begins-->
    <div class="topSection">
    <div class="logoHeader responsive">
         <!-- <img src="imgs/logo3.png" id="logo" class="center " alt=""> -->
         <h1 id="logo">
            Kazi's Kitchen
        </h1>
    </div>

    <div class="nav">
        <ul id="navWidth">
            <li><a href="<?php echo site_url(); ?>/index.php">Home</a></li>
            <li><a href="#">Recipes</a></li>
            <!-- <li><a href="#">Login</a></li> -->
            <li><a href="<?php echo site_url(); ?>/admin/recipes/index.php">Admin</a></li>
        </ul>
    </div>
<div>
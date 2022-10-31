
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kazi's Kitchen</title>
    <link rel="stylesheet" href="styles.css">

    <link href="https://www.dafontfree.net/embed/YWtyb25pbS1yZWd1bGFyJmRhdGEvMjkvYS8xNTM0MTIvQWtyb25pbS1SZWd1bGFyLnR0Zg" rel="stylesheet" type="text/css"/>
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
            <li><a href="#">Home</a></li>
            <li><a href="#">Recipes</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Admin</a></li>
        </ul>
    </div>
<div>
<!-------------->

<?php

  function site_url()
  {
    $protocol ='http';
      if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $protocol ='https';
    
      }
        //Get current domain
        $domain = $_SERVER['HTTP_HOST'];
        //Merge it with the current path
        if ($domain === 'samihashoshi.com'){
          return $protocol . '://' . $domain . '/idm232/final';

        } else{
           return $protocol . '://' . $domain . 'final';
        }
  }



    ?>